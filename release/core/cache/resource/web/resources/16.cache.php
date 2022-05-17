<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 16,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Отчёты',
    'longtitle' => '',
    'description' => '',
    'alias' => 'reports',
    'alias_visible' => 1,
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 3,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1647515599,
    'editedby' => 1,
    'editedon' => 1647515702,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1647515580,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'reports.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'image' => 
    array (
      0 => 'image',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'image',
    ),
    'date' => 
    array (
      0 => 'date',
      1 => '',
      2 => 'date',
      3 => NULL,
      4 => 'date',
    ),
    '_content' => '<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Официальный сайт проекта Дети-лучики – Отчёты</title>
<link rel="stylesheet" href="/css/master.css">
<base href="http://deti-luchiki.local/">
</head>
<body>
    <header>
	<div class="container">
		<a class="burger"><i class="mdi mdi-menu"></i></a>
		<a href="/" class="logo"></a>
		<nav>
		    [[!Wayfinder? &startId=`0` &level=2 &hereClass=`active`]]
		</nav>
		<div class="separator"></div>
		<div class="nav-right">
			<div class="hide-m-down">
				<!--<a href="" class="social"><i class="mdi mdi-odnoklassniki"></i></a>-->
				<a href="" class="social"><i class="mdi mdi-vk"></i></a>
				<a href="" class="social"><i class="mdi mdi-youtube"></i></a>
				<!--<a href="" class="social"><i class="mdi mdi-instagram"></i></a>-->
			</div>
			<a href="participate.html" class="btn">Хочу помочь</a>
		</div>
	</div>
</header>
    
    <footer>
	<div class="container">
		<div class="row flex">
			<div class="col xl2 l3 s6 m3 xs12">
				<a href="" class="logo"></a>
			</div>
			<div class="col xl2 l3 m3 s6 xs12">
				<ul>
					<li><a href="">О нас</a></li>
					<li><a href="">Благотворителям</a></li>
					<li><a href="">Отчёты</a></li>
					<li><a href="">Родителям</a></li>
					<li><a href="">Контакты</a></li>
				</ul>
			</div>
			<div class="col xl8 l6 m12 s12">
				<form action="" id="subscribe">
					<div class="input-field-wrapper">
						<div class="input-field">
							<input type="text" placeholder="Ваш E-mail">
							<div class="indicator"></div>
							<label for="">Ваш E-mail</label>
						</div>
					</div>
					<div class="button-wrapper">
						<a href="" class="btn">Подписаться</a>
					</div>
				</form>
				<div class="socials right-align">
					<a href="" class="social"><i class="mdi mdi-odnoklassniki"></i></a>
					<a href="" class="social"><i class="mdi mdi-vk"></i></a>
					<a href="" class="social"><i class="mdi mdi-youtube"></i></a>
					<a href="" class="social"><i class="mdi mdi-instagram"></i></a>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="footer-copyright center-align">© 2022</div>
    <form class="modal" id="request">
    <div class="overflow-wrapper">
        <div class="modal-content">
            <div class="row">
                <div class="col s12 modal-header">
                    <h3>Заявка на участие</h3>
                    <a href="javascript:void(0);" class="modal-close"><i class="mdi mdi-close"></i></a>
                </div>
                <div class="col l4 m12">
                    <div class="input-field"><input type="text" placeholder="Ваше имя" name="fio"><label for="">Ваше имя</label><div class="indicator"></div></div>
                </div>
                <div class="col l4 m12">
                    <div class="input-field"><input type="email" placeholder="E-mail" name="mail"><label for="">E-mail</label><div class="indicator"></div></div>
                </div>
                <div class="col l4 m12">
                    <div class="input-field"><input type="phone" placeholder="Телефон" name="phone"><label for="">Телефон</label><div class="indicator"></div></div>
                </div>
                <div class="col s12">
                    <div class="i-want-divider"><strong>Я хочу</strong></div>
                    <div class="input-field radio-field"><input class="div-selector" type="radio" name="i-want" id="iwant1" value="participate" checked data-section-name="i-want" data-val="participate"><label for="iwant1">Принять участие</label></div>
                    <div class="input-field radio-field"><input class="div-selector" type="radio" name="i-want" id="iwant2" value="get-support" data-section-name="i-want" data-val="get-support"><label for="iwant2">Получить поддержку</label></div>
                </div>
            </div>
            <div class="row active" id="participate" data-section="i-want">
                <div class="col l6 m12">
                    <div class="input-field radio-field"><input class="div-selector" type="radio" name="participation-type" id="type1" value="project" data-section-name="participation-type" data-val="project" checked><label for="type1">В проекте</label></div>
                    <div class="input-field radio-field"><input class="div-selector" type="radio" name="participation-type" id="type2" value="as" data-section-name="participation-type" data-val="as"><label for="type2">В качестве</label></div>
                </div>
                <div class="col l6 m12 active" id="project" data-section="participation-type">
                    <div class="input-field">
                        <input type="text" name="project-name" placeholder="Наименование проекта">
                        <label for="">Наименование проекта</label>
                        <div class="indicator"></div>
                    </div>
                </div>
                <div class="col l6 m12" id="as" data-section="participation-type">
                    <div class="input-field select-field">
                        <input type="hidden" name="profession" id="profession">
                        <label for="" class="list-label">Наименование профессии</label>
                        <ul>
                            <li><a href="javascript:void(0);">Работодателя</a></li>
                            <li><a href="javascript:void(0);">Преподавателя</a></li>
                            <li><a href="javascript:void(0);">Волонтёра</a></li>
                        </ul>
                    </div>                
                </div>
            </div>
            <div class="row" id="get-support" data-section="i-want">
                <div class="col s12">
                    <div class="input-field select-field">
                        <input type="text" name="support-comment" placeholder="Комментарий" id="comment">
                        <label>Комментарий</label>
                        <div class="indicator"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn outlined" id="send-request">Отправить</a>
            </div>
        </div>
    </div>
</form>
    <script src="/js/jquery.min.js"></script>
<script src="/js/jquery.lazy.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script src="/js/swiper-bundle.min.js"></script>
<script src="/js/master.js"></script>
</body>
</html>
',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$head]]' => '<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Официальный сайт проекта Дети-лучики – Отчёты</title>
<link rel="stylesheet" href="/css/master.css">
<base href="http://deti-luchiki.local/">',
    '[[$header]]' => '<header>
	<div class="container">
		<a class="burger"><i class="mdi mdi-menu"></i></a>
		<a href="/" class="logo"></a>
		<nav>
		    [[!Wayfinder? &startId=`0` &level=2 &hereClass=`active`]]
		</nav>
		<div class="separator"></div>
		<div class="nav-right">
			<div class="hide-m-down">
				<!--<a href="" class="social"><i class="mdi mdi-odnoklassniki"></i></a>-->
				<a href="" class="social"><i class="mdi mdi-vk"></i></a>
				<a href="" class="social"><i class="mdi mdi-youtube"></i></a>
				<!--<a href="" class="social"><i class="mdi mdi-instagram"></i></a>-->
			</div>
			<a href="participate.html" class="btn">Хочу помочь</a>
		</div>
	</div>
</header>',
    '[[$footer]]' => '<footer>
	<div class="container">
		<div class="row flex">
			<div class="col xl2 l3 s6 m3 xs12">
				<a href="" class="logo"></a>
			</div>
			<div class="col xl2 l3 m3 s6 xs12">
				<ul>
					<li><a href="">О нас</a></li>
					<li><a href="">Благотворителям</a></li>
					<li><a href="">Отчёты</a></li>
					<li><a href="">Родителям</a></li>
					<li><a href="">Контакты</a></li>
				</ul>
			</div>
			<div class="col xl8 l6 m12 s12">
				<form action="" id="subscribe">
					<div class="input-field-wrapper">
						<div class="input-field">
							<input type="text" placeholder="Ваш E-mail">
							<div class="indicator"></div>
							<label for="">Ваш E-mail</label>
						</div>
					</div>
					<div class="button-wrapper">
						<a href="" class="btn">Подписаться</a>
					</div>
				</form>
				<div class="socials right-align">
					<a href="" class="social"><i class="mdi mdi-odnoklassniki"></i></a>
					<a href="" class="social"><i class="mdi mdi-vk"></i></a>
					<a href="" class="social"><i class="mdi mdi-youtube"></i></a>
					<a href="" class="social"><i class="mdi mdi-instagram"></i></a>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="footer-copyright center-align">© 2022</div>',
    '[[$modals]]' => '<form class="modal" id="request">
    <div class="overflow-wrapper">
        <div class="modal-content">
            <div class="row">
                <div class="col s12 modal-header">
                    <h3>Заявка на участие</h3>
                    <a href="javascript:void(0);" class="modal-close"><i class="mdi mdi-close"></i></a>
                </div>
                <div class="col l4 m12">
                    <div class="input-field"><input type="text" placeholder="Ваше имя" name="fio"><label for="">Ваше имя</label><div class="indicator"></div></div>
                </div>
                <div class="col l4 m12">
                    <div class="input-field"><input type="email" placeholder="E-mail" name="mail"><label for="">E-mail</label><div class="indicator"></div></div>
                </div>
                <div class="col l4 m12">
                    <div class="input-field"><input type="phone" placeholder="Телефон" name="phone"><label for="">Телефон</label><div class="indicator"></div></div>
                </div>
                <div class="col s12">
                    <div class="i-want-divider"><strong>Я хочу</strong></div>
                    <div class="input-field radio-field"><input class="div-selector" type="radio" name="i-want" id="iwant1" value="participate" checked data-section-name="i-want" data-val="participate"><label for="iwant1">Принять участие</label></div>
                    <div class="input-field radio-field"><input class="div-selector" type="radio" name="i-want" id="iwant2" value="get-support" data-section-name="i-want" data-val="get-support"><label for="iwant2">Получить поддержку</label></div>
                </div>
            </div>
            <div class="row active" id="participate" data-section="i-want">
                <div class="col l6 m12">
                    <div class="input-field radio-field"><input class="div-selector" type="radio" name="participation-type" id="type1" value="project" data-section-name="participation-type" data-val="project" checked><label for="type1">В проекте</label></div>
                    <div class="input-field radio-field"><input class="div-selector" type="radio" name="participation-type" id="type2" value="as" data-section-name="participation-type" data-val="as"><label for="type2">В качестве</label></div>
                </div>
                <div class="col l6 m12 active" id="project" data-section="participation-type">
                    <div class="input-field">
                        <input type="text" name="project-name" placeholder="Наименование проекта">
                        <label for="">Наименование проекта</label>
                        <div class="indicator"></div>
                    </div>
                </div>
                <div class="col l6 m12" id="as" data-section="participation-type">
                    <div class="input-field select-field">
                        <input type="hidden" name="profession" id="profession">
                        <label for="" class="list-label">Наименование профессии</label>
                        <ul>
                            <li><a href="javascript:void(0);">Работодателя</a></li>
                            <li><a href="javascript:void(0);">Преподавателя</a></li>
                            <li><a href="javascript:void(0);">Волонтёра</a></li>
                        </ul>
                    </div>                
                </div>
            </div>
            <div class="row" id="get-support" data-section="i-want">
                <div class="col s12">
                    <div class="input-field select-field">
                        <input type="text" name="support-comment" placeholder="Комментарий" id="comment">
                        <label>Комментарий</label>
                        <div class="indicator"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn outlined" id="send-request">Отправить</a>
            </div>
        </div>
    </div>
</form>',
    '[[$scripts]]' => '<script src="/js/jquery.min.js"></script>
<script src="/js/jquery.lazy.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script src="/js/swiper-bundle.min.js"></script>
<script src="/js/master.js"></script>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Официальный сайт проекта [[++site_name]] – [[*pagetitle]]</title>
<link rel="stylesheet" href="/css/master.css">
<base href="[[++site_url]]">',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Официальный сайт проекта [[++site_name]] – [[*pagetitle]]</title>
<link rel="stylesheet" href="/css/master.css">
<base href="[[++site_url]]">',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<header>
	<div class="container">
		<a class="burger"><i class="mdi mdi-menu"></i></a>
		<a href="/" class="logo"></a>
		<nav>
		    [[!Wayfinder? &startId=`0` &level=2 &hereClass=`active`]]
		</nav>
		<div class="separator"></div>
		<div class="nav-right">
			<div class="hide-m-down">
				<!--<a href="" class="social"><i class="mdi mdi-odnoklassniki"></i></a>-->
				<a href="" class="social"><i class="mdi mdi-vk"></i></a>
				<a href="" class="social"><i class="mdi mdi-youtube"></i></a>
				<!--<a href="" class="social"><i class="mdi mdi-instagram"></i></a>-->
			</div>
			<a href="[[~21]]" class="btn">Хочу помочь</a>
		</div>
	</div>
</header>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<header>
	<div class="container">
		<a class="burger"><i class="mdi mdi-menu"></i></a>
		<a href="/" class="logo"></a>
		<nav>
		    [[!Wayfinder? &startId=`0` &level=2 &hereClass=`active`]]
		</nav>
		<div class="separator"></div>
		<div class="nav-right">
			<div class="hide-m-down">
				<!--<a href="" class="social"><i class="mdi mdi-odnoklassniki"></i></a>-->
				<a href="" class="social"><i class="mdi mdi-vk"></i></a>
				<a href="" class="social"><i class="mdi mdi-youtube"></i></a>
				<!--<a href="" class="social"><i class="mdi mdi-instagram"></i></a>-->
			</div>
			<a href="[[~21]]" class="btn">Хочу помочь</a>
		</div>
	</div>
</header>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<footer>
	<div class="container">
		<div class="row flex">
			<div class="col xl2 l3 s6 m3 xs12">
				<a href="" class="logo"></a>
			</div>
			<div class="col xl2 l3 m3 s6 xs12">
				<ul>
					<li><a href="">О нас</a></li>
					<li><a href="">Благотворителям</a></li>
					<li><a href="">Отчёты</a></li>
					<li><a href="">Родителям</a></li>
					<li><a href="">Контакты</a></li>
				</ul>
			</div>
			<div class="col xl8 l6 m12 s12">
				<form action="" id="subscribe">
					<div class="input-field-wrapper">
						<div class="input-field">
							<input type="text" placeholder="Ваш E-mail">
							<div class="indicator"></div>
							<label for="">Ваш E-mail</label>
						</div>
					</div>
					<div class="button-wrapper">
						<a href="" class="btn">Подписаться</a>
					</div>
				</form>
				<div class="socials right-align">
					<a href="" class="social"><i class="mdi mdi-odnoklassniki"></i></a>
					<a href="" class="social"><i class="mdi mdi-vk"></i></a>
					<a href="" class="social"><i class="mdi mdi-youtube"></i></a>
					<a href="" class="social"><i class="mdi mdi-instagram"></i></a>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="footer-copyright center-align">© 2022</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<footer>
	<div class="container">
		<div class="row flex">
			<div class="col xl2 l3 s6 m3 xs12">
				<a href="" class="logo"></a>
			</div>
			<div class="col xl2 l3 m3 s6 xs12">
				<ul>
					<li><a href="">О нас</a></li>
					<li><a href="">Благотворителям</a></li>
					<li><a href="">Отчёты</a></li>
					<li><a href="">Родителям</a></li>
					<li><a href="">Контакты</a></li>
				</ul>
			</div>
			<div class="col xl8 l6 m12 s12">
				<form action="" id="subscribe">
					<div class="input-field-wrapper">
						<div class="input-field">
							<input type="text" placeholder="Ваш E-mail">
							<div class="indicator"></div>
							<label for="">Ваш E-mail</label>
						</div>
					</div>
					<div class="button-wrapper">
						<a href="" class="btn">Подписаться</a>
					</div>
				</form>
				<div class="socials right-align">
					<a href="" class="social"><i class="mdi mdi-odnoklassniki"></i></a>
					<a href="" class="social"><i class="mdi mdi-vk"></i></a>
					<a href="" class="social"><i class="mdi mdi-youtube"></i></a>
					<a href="" class="social"><i class="mdi mdi-instagram"></i></a>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="footer-copyright center-align">© 2022</div>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'modals' => 
      array (
        'fields' => 
        array (
          'id' => 17,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'modals',
          'description' => 'Модалки',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<form class="modal" id="request">
    <div class="overflow-wrapper">
        <div class="modal-content">
            <div class="row">
                <div class="col s12 modal-header">
                    <h3>Заявка на участие</h3>
                    <a href="javascript:void(0);" class="modal-close"><i class="mdi mdi-close"></i></a>
                </div>
                <div class="col l4 m12">
                    <div class="input-field"><input type="text" placeholder="Ваше имя" name="fio"><label for="">Ваше имя</label><div class="indicator"></div></div>
                </div>
                <div class="col l4 m12">
                    <div class="input-field"><input type="email" placeholder="E-mail" name="mail"><label for="">E-mail</label><div class="indicator"></div></div>
                </div>
                <div class="col l4 m12">
                    <div class="input-field"><input type="phone" placeholder="Телефон" name="phone"><label for="">Телефон</label><div class="indicator"></div></div>
                </div>
                <div class="col s12">
                    <div class="i-want-divider"><strong>Я хочу</strong></div>
                    <div class="input-field radio-field"><input class="div-selector" type="radio" name="i-want" id="iwant1" value="participate" checked data-section-name="i-want" data-val="participate"><label for="iwant1">Принять участие</label></div>
                    <div class="input-field radio-field"><input class="div-selector" type="radio" name="i-want" id="iwant2" value="get-support" data-section-name="i-want" data-val="get-support"><label for="iwant2">Получить поддержку</label></div>
                </div>
            </div>
            <div class="row active" id="participate" data-section="i-want">
                <div class="col l6 m12">
                    <div class="input-field radio-field"><input class="div-selector" type="radio" name="participation-type" id="type1" value="project" data-section-name="participation-type" data-val="project" checked><label for="type1">В проекте</label></div>
                    <div class="input-field radio-field"><input class="div-selector" type="radio" name="participation-type" id="type2" value="as" data-section-name="participation-type" data-val="as"><label for="type2">В качестве</label></div>
                </div>
                <div class="col l6 m12 active" id="project" data-section="participation-type">
                    <div class="input-field">
                        <input type="text" name="project-name" placeholder="Наименование проекта">
                        <label for="">Наименование проекта</label>
                        <div class="indicator"></div>
                    </div>
                </div>
                <div class="col l6 m12" id="as" data-section="participation-type">
                    <div class="input-field select-field">
                        <input type="hidden" name="profession" id="profession">
                        <label for="" class="list-label">Наименование профессии</label>
                        <ul>
                            <li><a href="javascript:void(0);">Работодателя</a></li>
                            <li><a href="javascript:void(0);">Преподавателя</a></li>
                            <li><a href="javascript:void(0);">Волонтёра</a></li>
                        </ul>
                    </div>                
                </div>
            </div>
            <div class="row" id="get-support" data-section="i-want">
                <div class="col s12">
                    <div class="input-field select-field">
                        <input type="text" name="support-comment" placeholder="Комментарий" id="comment">
                        <label>Комментарий</label>
                        <div class="indicator"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn outlined" id="send-request">Отправить</a>
            </div>
        </div>
    </div>
</form>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<form class="modal" id="request">
    <div class="overflow-wrapper">
        <div class="modal-content">
            <div class="row">
                <div class="col s12 modal-header">
                    <h3>Заявка на участие</h3>
                    <a href="javascript:void(0);" class="modal-close"><i class="mdi mdi-close"></i></a>
                </div>
                <div class="col l4 m12">
                    <div class="input-field"><input type="text" placeholder="Ваше имя" name="fio"><label for="">Ваше имя</label><div class="indicator"></div></div>
                </div>
                <div class="col l4 m12">
                    <div class="input-field"><input type="email" placeholder="E-mail" name="mail"><label for="">E-mail</label><div class="indicator"></div></div>
                </div>
                <div class="col l4 m12">
                    <div class="input-field"><input type="phone" placeholder="Телефон" name="phone"><label for="">Телефон</label><div class="indicator"></div></div>
                </div>
                <div class="col s12">
                    <div class="i-want-divider"><strong>Я хочу</strong></div>
                    <div class="input-field radio-field"><input class="div-selector" type="radio" name="i-want" id="iwant1" value="participate" checked data-section-name="i-want" data-val="participate"><label for="iwant1">Принять участие</label></div>
                    <div class="input-field radio-field"><input class="div-selector" type="radio" name="i-want" id="iwant2" value="get-support" data-section-name="i-want" data-val="get-support"><label for="iwant2">Получить поддержку</label></div>
                </div>
            </div>
            <div class="row active" id="participate" data-section="i-want">
                <div class="col l6 m12">
                    <div class="input-field radio-field"><input class="div-selector" type="radio" name="participation-type" id="type1" value="project" data-section-name="participation-type" data-val="project" checked><label for="type1">В проекте</label></div>
                    <div class="input-field radio-field"><input class="div-selector" type="radio" name="participation-type" id="type2" value="as" data-section-name="participation-type" data-val="as"><label for="type2">В качестве</label></div>
                </div>
                <div class="col l6 m12 active" id="project" data-section="participation-type">
                    <div class="input-field">
                        <input type="text" name="project-name" placeholder="Наименование проекта">
                        <label for="">Наименование проекта</label>
                        <div class="indicator"></div>
                    </div>
                </div>
                <div class="col l6 m12" id="as" data-section="participation-type">
                    <div class="input-field select-field">
                        <input type="hidden" name="profession" id="profession">
                        <label for="" class="list-label">Наименование профессии</label>
                        <ul>
                            <li><a href="javascript:void(0);">Работодателя</a></li>
                            <li><a href="javascript:void(0);">Преподавателя</a></li>
                            <li><a href="javascript:void(0);">Волонтёра</a></li>
                        </ul>
                    </div>                
                </div>
            </div>
            <div class="row" id="get-support" data-section="i-want">
                <div class="col s12">
                    <div class="input-field select-field">
                        <input type="text" name="support-comment" placeholder="Комментарий" id="comment">
                        <label>Комментарий</label>
                        <div class="indicator"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn outlined" id="send-request">Отправить</a>
            </div>
        </div>
    </div>
</form>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'scripts' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'scripts',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<script src="/js/jquery.min.js"></script>
<script src="/js/jquery.lazy.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script src="/js/swiper-bundle.min.js"></script>
<script src="/js/master.js"></script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<script src="/js/jquery.min.js"></script>
<script src="/js/jquery.lazy.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script src="/js/swiper-bundle.min.js"></script>
<script src="/js/master.js"></script>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'Wayfinder' => 
      array (
        'fields' => 
        array (
          'id' => 12,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Wayfinder',
          'description' => 'Wayfinder for MODx Revolution 2.0.0-beta-5 and later.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'prop_wayfinder.level_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Depth (number of levels) to build the menu from. 0 goes through all levels.',
              'area' => '',
              'area_trans' => '',
            ),
            'includeDocs' => 
            array (
              'name' => 'includeDocs',
              'desc' => 'prop_wayfinder.includeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will limit the output to only the documents specified in this parameter. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'excludeDocs' => 
            array (
              'name' => 'excludeDocs',
              'desc' => 'prop_wayfinder.excludeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will remove the documents specified in this parameter from the output. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'contexts' => 
            array (
              'name' => 'contexts',
              'desc' => 'prop_wayfinder.contexts_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Specify the contexts for the Resources that will be loaded in this menu. Useful when used with startId at 0 to show all first-level items. Note: This will increase load times a bit, but if you set cacheResults to 1, that will offset the load time.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheResults' => 
            array (
              'name' => 'cacheResults',
              'desc' => 'prop_wayfinder.cacheResults_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Cache the generated menu to the MODX Resource cache. Setting this to 1 will speed up the loading of your menus.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'prop_wayfinder.cacheTime_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 3600,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The number of seconds to store the cached menu, if cacheResults is 1. Set to 0 to store indefinitely until cache is manually cleared.',
              'area' => '',
              'area_trans' => '',
            ),
            'ph' => 
            array (
              'name' => 'ph',
              'desc' => 'prop_wayfinder.ph_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'To display send the output of Wayfinder to a placeholder set the ph parameter equal to the name of the desired placeholder. All output including the debugging (if on) will be sent to the placeholder specified.',
              'area' => '',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_wayfinder.debug_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'With the debug parameter set to 1, Wayfinder will output information on how each Resource was processed.',
              'area' => '',
              'area_trans' => '',
            ),
            'ignoreHidden' => 
            array (
              'name' => 'ignoreHidden',
              'desc' => 'prop_wayfinder.ignoreHidden_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The ignoreHidden parameter allows Wayfinder to ignore the display in menu flag that can be set for each document. With this parameter set to 1, all Resources will be displayed regardless of the Display in Menu flag.',
              'area' => '',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'prop_wayfinder.hideSubMenus_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The hideSubMenus parameter will remove all non-active submenus from the Wayfinder output if set to 1. This parameter only works if multiple levels are being displayed.',
              'area' => '',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'prop_wayfinder.useWeblinkUrl_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => ' If WebLinks are used in the output, Wayfinder will output the link specified in the WebLink instead of the normal MODx link. To use the standard display of WebLinks (like any other Resource) set this to 0.',
              'area' => '',
              'area_trans' => '',
            ),
            'fullLink' => 
            array (
              'name' => 'fullLink',
              'desc' => 'prop_wayfinder.fullLink_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set to 1, will display the entire, absolute URL in the link. (It is recommended to use scheme instead.)',
              'area' => '',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'prop_wayfinder.scheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.relative',
                  'value' => '',
                  'name' => 'Relative',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.absolute',
                  'value' => 'abs',
                  'name' => 'Absolute',
                ),
                2 => 
                array (
                  'text' => 'prop_wayfinder.full',
                  'value' => 'full',
                  'name' => 'Full',
                ),
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Determines how URLs are generated for each link. Set to "abs" to show the absolute URL, "full" to show the full URL, and blank to use the relative URL. Defaults to relative.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortOrder' => 
            array (
              'name' => 'sortOrder',
              'desc' => 'prop_wayfinder.sortOrder_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.ascending',
                  'value' => 'ASC',
                  'name' => 'Ascending',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.descending',
                  'value' => 'DESC',
                  'name' => 'Descending',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Allows the menu to be sorted in either ascending or descending order.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortBy' => 
            array (
              'name' => 'sortBy',
              'desc' => 'prop_wayfinder.sortBy_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menuindex',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Sorts the output by any of the Resource fields on a level by level basis. This means that each submenu will be sorted independently of all other submenus at the same level. Random will sort the output differently every time the page is loaded if the snippet is called uncached.',
              'area' => '',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'prop_wayfinder.limit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Causes Wayfinder to only process the number of items specified per level.',
              'area' => '',
              'area_trans' => '',
            ),
            'cssTpl' => 
            array (
              'name' => 'cssTpl',
              'desc' => 'prop_wayfinder.cssTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing a link to a style sheet or style information to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'jsTpl' => 
            array (
              'name' => 'jsTpl',
              'desc' => 'prop_wayfinder.jsTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing some Javascript to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'prop_wayfinder.rowIdPrefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set, Wayfinder will replace the id placeholder with a unique id consisting of the specified prefix plus the Resource id.',
              'area' => '',
              'area_trans' => '',
            ),
            'textOfLinks' => 
            array (
              'name' => 'textOfLinks',
              'desc' => 'prop_wayfinder.textOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menutitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktext placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'titleOfLinks' => 
            array (
              'name' => 'titleOfLinks',
              'desc' => 'prop_wayfinder.titleOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'pagetitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktitle placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'prop_wayfinder.displayStart_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Show the document as referenced by startId in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'prop_wayfinder.firstClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'first',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the first item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'prop_wayfinder.lastClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'last',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the last item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'prop_wayfinder.hereClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'active',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the items showing where you are, all the way up the chain.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'prop_wayfinder.parentClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for menu items that are a container and have children.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'prop_wayfinder.rowClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting each output row.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'prop_wayfinder.outerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the outer template.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'prop_wayfinder.innerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the inner template.',
              'area' => '',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'prop_wayfinder.levelClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting every output row level. The level number will be added to the specified class (level1, level2, level3 etc if you specified "level").',
              'area' => '',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'prop_wayfinder.selfClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the current item.',
              'area' => '',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'prop_wayfinder.webLinkClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for weblink items.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerTpl' => 
            array (
              'name' => 'outerTpl',
              'desc' => 'prop_wayfinder.outerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the outer most container; if not included, a string including "<ul>[[+wf.wrapper]]</ul>" is assumed.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowTpl' => 
            array (
              'name' => 'rowTpl',
              'desc' => 'prop_wayfinder.rowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the regular row items.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowTpl' => 
            array (
              'name' => 'parentRowTpl',
              'desc' => 'prop_wayfinder.parentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for any Resource that is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowHereTpl' => 
            array (
              'name' => 'parentRowHereTpl',
              'desc' => 'prop_wayfinder.parentRowHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereTpl' => 
            array (
              'name' => 'hereTpl',
              'desc' => 'prop_wayfinder.hereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerTpl' => 
            array (
              'name' => 'innerTpl',
              'desc' => 'prop_wayfinder.innerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for each submenu. If no innerTpl is specified the outerTpl is used in its place.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerRowTpl' => 
            array (
              'name' => 'innerRowTpl',
              'desc' => 'prop_wayfinder.innerRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the row items in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerHereTpl' => 
            array (
              'name' => 'innerHereTpl',
              'desc' => 'prop_wayfinder.innerHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'activeParentRowTpl' => 
            array (
              'name' => 'activeParentRowTpl',
              'desc' => 'prop_wayfinder.activeParentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for items that are containers, have children and are currently active in the tree.',
              'area' => '',
              'area_trans' => '',
            ),
            'categoryFoldersTpl' => 
            array (
              'name' => 'categoryFoldersTpl',
              'desc' => 'prop_wayfinder.categoryFoldersTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for category folders. Category folders are determined by setting the template to blank or by setting the link attributes field to rel="category".',
              'area' => '',
              'area_trans' => '',
            ),
            'startItemTpl' => 
            array (
              'name' => 'startItemTpl',
              'desc' => 'prop_wayfinder.startItemTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the start item, if enabled via the &displayStart parameter. Note: the default template shows the start item but does not link it. If you do not need a link, a class can be applied to the default template using the parameter &firstClass=`className`.',
              'area' => '',
              'area_trans' => '',
            ),
            'permissions' => 
            array (
              'name' => 'permissions',
              'desc' => 'prop_wayfinder.permissions_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'list',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Will check for a permission on the Resource. Defaults to "list" - set to blank to skip normal permissions checks.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'prop_wayfinder.hereId_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set, will change the "here" Resource to this ID. Defaults to the currently active Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'prop_wayfinder.where_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A JSON object for where conditions for all items selected in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'prop_wayfinder.templates_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A comma-separated list of Template IDs to restrict selected Resources to.',
              'area' => '',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'prop_wayfinder.previewunpublished_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set to Yes, if you are logged into the mgr and have the view_unpublished permission, it will allow previewing of unpublished resources in your menus in the front-end.',
              'area' => '',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);