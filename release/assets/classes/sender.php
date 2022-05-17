<?php

header('Content-type: application/json; encoding: UTF-8');

class Sender{

	private $modx;
	private $content;
	private $iWant;
	private $participationType;
	private $projectName;
	private $profession;
	private $comment;
	private $name;
	private $mail;
	private $phone;

	public function __construct(){
		$this->initModx();
		$this->prepareData();
	}

	// Подготовка данных запроса
	private function prepareData(){
		$this->iWant =				 isset($_POST['i-want'])?$_POST['i-want']:null;
		$this->participationType =	 isset($_POST['participation-type'])?$_POST['participation-type']:null;
		$this->projectName =		 isset($_POST['project-name'])?$_POST['project-name']:null;
		$this->profession =			 isset($_POST['profession'])?mb_strtolower($_POST['profession']):null;
		$this->comment =			 mb_strtolower(isset($_POST['support-comment'])?$_POST['support-comment']:null);
		$this->name =				 isset($_POST['fio'])?$_POST['fio']:null;
		$this->mail =				 isset($_POST['mail'])?$_POST['mail']:null;
		$this->phone =				 isset($_POST['phone'])?$_POST['phone']:null;

		if(empty($this->iWant)){
			$this->return404("Что хочу");
		}
		
		// Данные по сути вопроса
		if($this->iWant=="participate"){
			if(empty($this->participationType)){
				$this->return404("Тип участия");
			}else{
				if($this->participationType == 'project' && empty($this->projectName)){
					$this->return404("Проект");
				}
				if($this->participationType == 'as' && empty($this->profession)){
					$this->return404("Профессия");
				}
			}
		}else{
			if(empty($this->comment)){
				$this->return404("Комментарий");
			}
		}
		
		// Данные по контактам
		if(empty( $this->name )){
			$this->return404("Фамилия, имя, отчество");
		}

		if( empty($this->mail) && empty($this->phone) ){
			$this->return404("Контактные данные");
		}
	}

	// Генерация тела письма в зависимости от информации, представленной в модальном окне
	public function generateContent(){

		$iWant = 				$this->iWant;
		$participationType =	$this->participationType;
		$projectName =			$this->projectName;
		$profession = 			$this->profession;
		$comment = 				$this->comment;
		$name =					$this->validate($this->name, "string", 3, "Фамилия, имя, отчество");
		$mail =					$this->validate($this->mail, "mail", 5, "Эл. почта");
		$phone =				$this->validate($this->phone, "string", 10, "Телефон");

		$templateName = "";
		$contact = "";

		// Выбор шаблона
		switch(true){
			case ($iWant == "participate" && $participationType == "project") : 
				$templateName = "mail_project_tpl"; 
				$projectName = $this->validate($projectName, "string", 3, "Название проекта");
				break;
			case ($iWant == "participate" && $participationType =="as" ) : 
				$templateName = "mail_join_tpl"; 
				$profession = $this->validate($profession, "string", 5, "Профессия");
				break;
			case ($iWant == "get-support" ) : 
				$templateName = "mail_support_tpl"; 
				$comment = $this->validate($comment, "string", 10, "Комментарий");
				break;
		}

		// Определение строки контактов
		switch(true){
			case !empty($phone) && !empty($mail): $contact = " по телефону ($phone), или по почте ($mail)"; break;
			case !empty($phone) && empty($mail): $contact = " по телефону ($phone)"; break;
			case !empty($mail) && empty($phone): $contact = " по почте ($mail)"; break;
		}

		$props = array(
			'contact' => $contact,
			'name' => $name,
			'project_name' => $projectName,
			'details' => $comment,
			'profession' => $profession
		);

		if( $templateName ){
			return $this->modx->getChunk($templateName, $props);
		}else{
			return "";
		}
		
	}

	// Подготовка строки, экранирование спецсимволов
	private function prepareString($string){
		return htmlspecialchars(strip_tags($string));
	}

	// Подключение MODx
	private function initModx(){
		$server_root = $_SERVER['DOCUMENT_ROOT'];
		require_once $server_root . '/config.core.php';
		require_once MODX_CORE_PATH.'model/modx/modx.class.php';
		$this->modx = new modX();
		$this->modx->initialize('web');
		$this->modx->getService('error', 'error.modError');
	}

	// Подключение отправки почты MODx
	public function send($message){

		global $modx;

		$siteName =	 $this->prepareString($this->modx->getOption('site_name'));
		$from =		 "no-reply@{$_SERVER[SERVER_NAME]}";
		$fromName =	 "Система уведомлений сайта '$siteName'";
		$to =		 $this->modx->getOption('mailSendAddress');

		$message =	 $this->prepareString($message);
		$to =		 $this->prepareString($to);
		$fromName =	 $this->prepareString($fromName);

		$this->modx->getService('mail', 'mail.modPHPMailer');
		$this->modx->mail->set(modMail::MAIL_BODY, $message);
		$this->modx->mail->set(modMail::MAIL_FROM, $from);
		$this->modx->mail->set(modMail::MAIL_FROM_NAME, $fromName);
		$this->modx->mail->set(modMail::MAIL_SUBJECT, "С сайта $siteName! отправлен запрос.");
		$this->modx->mail->address('to', $to);
		$this->modx->mail->setHTML(true);

		if($this->mail){
			$this->modx->mail->address('reply-to', $this->mail);
		}

		if(!$this->modx->mail->send()){
			$this->modx->log(modX::LOG_LEVEL_ERROR, 'Ошибка при отправке: ' . $this->modx->mail->mailer->ErrorInfo);
			
			http_response_code(500);
			echo(json_encode(array('message' => "Ошибка отправки сообщения!"), JSON_UNESCAPED_UNICODE));
		}

		$this->modx->mail->reset();

		http_response_code(200);
		echo(json_encode(array('message' => "Сообщение успешно отправлено!"), JSON_UNESCAPED_UNICODE));
	}

	// Отработка ошибок
	function return404($field = null){
		http_response_code(400);
		die(json_encode(array('message' => "Не заполнены обязательные поля: (" . mb_strtolower($field) . ")!"), JSON_UNESCAPED_UNICODE));
	}

	private function validate($value, $type, $min_length, $fieldname){

		switch($type){
			case "string":
				if( strlen($value) < $min_length && strlen($value) > 0 ){
					http_response_code(400);
					die(json_encode(array('message' => "Некорректно указаны данные ($fieldname)"), JSON_UNESCAPED_UNICODE));
				}
				break;
			case "mail": 
				if ( !filter_var($value, FILTER_VALIDATE_EMAIL) && strlen($value) > 0 ) {
					http_response_code(400);
					die(json_encode(array('message' => "Некорректный адрес электронной почты!"), JSON_UNESCAPED_UNICODE));
				}
				break;
		}

		return $value;
	}
}

$sender = new Sender;
$content = $sender->generateContent();

if( $content != "" ){
	$sender->send( $content );
}
