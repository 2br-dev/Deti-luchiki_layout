<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 8,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'СМИ пишут о нас',
    'longtitle' => 'Освещение нашей деятельности средствами массовой информации',
    'description' => '',
    'alias' => 'mass-media',
    'alias_visible' => 1,
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 2,
    'isfolder' => 1,
    'introtext' => '',
    'content' => ' <main id="mass-media">
    <section id="small-hero" class="news-hero">
        <div class="container">
        	<div class="row flex vcenter">
                <div class="col xl4 l6 m6 s12 offset-xl1 order-m1">
                	<h1>[[*pagetitle]]</h1>
                	<p>[[*longtitle]]</p>
                    <a href="https://www.youtube.com/channel/UCRyfXqNHNruF3fyiw287oiA/videos" class="btn" target="_blank" rel="nofollow">Наш канал <i class="mdi mdi-launch"></i></a>
                </div>
                <div class="col xl4 offset-xl2 l4 offset-l2 s12">
                    <div class="lazy h round" data-src="/img/youtube-cover.png"></div>
                </div>
        		<div class="circle-red large" id="red1"></div>
                <div class="circle-red small" id="red2"></div>
                <div class="circle-red small" id="red3"></div>
                <div class="circle-green large" id="green1"></div>
                <div class="circle-green small" id="green2"></div>
                <div class="circle-green large" id="green3"></div>
        	</div>
        </div>
    </section>
    <section id="content">
        <div class="container shadowed">
            <div class="row">
                <div class="col s12">
                    <h2>Последние события</h2>
                </div>
            </div>
            <div class="row flex">
                [[!pdoPage?
                    &limit=`24`
                    &includeTVs=`image`
                    &includeContent=`1`
                    &tpl=`mass-media-tpl`
                ]]
            </div>
        </div>
    </section>
</main>',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 5,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1647515340,
    'editedby' => 1,
    'editedon' => 1647875144,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1647515340,
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
    'uri' => 'about/mass-media/',
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
<title>Официальный сайт проекта Дети-лучики – СМИ пишут о нас</title>
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
     <main id="mass-media">
    <section id="small-hero" class="news-hero">
        <div class="container">
        	<div class="row flex vcenter">
                <div class="col xl4 l6 m6 s12 offset-xl1 order-m1">
                	<h1>СМИ пишут о нас</h1>
                	<p>Освещение нашей деятельности средствами массовой информации</p>
                    <a href="https://www.youtube.com/channel/UCRyfXqNHNruF3fyiw287oiA/videos" class="btn" target="_blank" rel="nofollow">Наш канал <i class="mdi mdi-launch"></i></a>
                </div>
                <div class="col xl4 offset-xl2 l4 offset-l2 s12">
                    <div class="lazy h round" data-src="/img/youtube-cover.png"></div>
                </div>
        		<div class="circle-red large" id="red1"></div>
                <div class="circle-red small" id="red2"></div>
                <div class="circle-red small" id="red3"></div>
                <div class="circle-green large" id="green1"></div>
                <div class="circle-green small" id="green2"></div>
                <div class="circle-green large" id="green3"></div>
        	</div>
        </div>
    </section>
    <section id="content">
        <div class="container shadowed">
            <div class="row">
                <div class="col s12">
                    <h2>Последние события</h2>
                </div>
            </div>
            <div class="row flex">
                [[!pdoPage?
                    &limit=`24`
                    &includeTVs=`image`
                    &includeContent=`1`
                    &tpl=`mass-media-tpl`
                ]]
            </div>
        </div>
    </section>
</main>
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
<title>Официальный сайт проекта Дети-лучики – СМИ пишут о нас</title>
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
    '[[pdoResources?tpl=`mass-media-tpl`&returnIds=``&showLog=``&fastMode=``&sortby=`publishedon`&sortbyTV=``&sortbyTVType=``&sortdir=`DESC`&sortdirTV=`ASC`&limit=`24`&offset=`0`&depth=`10`&outputSeparator=`
`&toPlaceholder=``&parents=``&includeContent=`1`&includeTVs=`image`&prepareTVs=`1`&processTVs=``&tvPrefix=`tv.`&tvFilters=``&tvFiltersAndDelimiter=`,`&tvFiltersOrDelimiter=`||`&where=``&showUnpublished=``&showDeleted=``&showHidden=`1`&hideContainers=``&context=``&idx=``&first=``&last=``&tplFirst=``&tplLast=``&tplOdd=``&tplWrapper=``&wrapIfEmpty=``&totalVar=`page.total`&resources=``&tplCondition=``&tplOperator=`==`&conditionalTpls=``&select=``&toSeparatePlaceholders=``&loadModels=``&scheme=``&useWeblinkUrl=``&plPrefix=``&maxLimit=`100`&page=`1`&pageVarKey=`page`&pageLimit=`5`&element=`pdoResources`&pageNavVar=`page.nav`&pageCountVar=`pageCount`&pageLinkScheme=``&tplPage=`@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">[[+pageNo]]</a></li>`&tplPageWrapper=`@INLINE <ul class="pagination">[[+first]][[+prev]][[+pages]][[+next]][[+last]]</ul>`&tplPageActive=`@INLINE <li class="page-item active"><a class="page-link" href="[[+href]]">[[+pageNo]]</a></li>`&tplPageFirst=`@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">[[%pdopage_first]]</a></li>`&tplPageLast=`@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">[[%pdopage_last]]</a></li>`&tplPagePrev=`@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">&laquo;</a></li>`&tplPageNext=`@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">&raquo;</a></li>`&tplPageSkip=`@INLINE <li class="page-item disabled"><a class="page-link" href="#">...</a></li>`&tplPageFirstEmpty=`@INLINE <li class="page-item disabled"><a class="page-link" href="#">[[%pdopage_first]]</a></li>`&tplPageLastEmpty=`@INLINE <li class="page-item disabled"><a class="page-link" href="#">[[%pdopage_last]]</a></li>`&tplPagePrevEmpty=`@INLINE <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>`&tplPageNextEmpty=`@INLINE <li class="page-item disabled"><a class="page-link" href="#">&raquo;</a></li>`&cache=``&cacheTime=`3600`&cacheAnonymous=``&ajax=``&ajaxMode=``&ajaxElemWrapper=`#pdopage`&ajaxElemRows=`#pdopage .rows`&ajaxElemPagination=`#pdopage .pagination`&ajaxElemLink=`#pdopage .pagination a`&ajaxElemMore=`#pdopage .btn-more`&ajaxTplMore=`@INLINE <button class="btn btn-primary btn-more">[[%pdopage_more]]</button>`&ajaxHistory=``&setMeta=`1`&strictMode=`1`&request=`f9b29ca346423caa92f725118023eb5a`&setTotal=`1`]]' => '<div class="col xl3 l4 m6 s12">
    <a href="https://www.asi.org.ru/report/2020/09/15/novorossijtsam/" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/asi.svg"></span>
        <span class="title" title="Профессионалы «третьего сектора» с заботой о «солнечных» детях">Проблема волонтеров</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="https://admnvrsk.ru/o-gorode/novosti/glavnye-novosti/news-11082020085323-72921/" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/novoros.png"></span>
        <span class="title" title="О нашем Новороссийском отделении">О нашем Новороссийском отделении</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="https://www.youtube.com/watch?v=Je8h4g8wono" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/tk_krasnodar.svg"></span>
        <span class="title" title="О нашем Центре">О нашем Центре</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="https://ki-news.ru/2019/10/07/v-krasnodare-otkrylsya-tsentr-podderzhki-semey-vospityvayushchikh-detey-s-osobennostyami-razvitiya/" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/ki_news.svg"></span>
        <span class="title" title="О проекте «Территория солнца»">О проекте «Территория солнца»</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="https://ki-news.ru/2019/06/07/vladimir-evlanov-prinyal-uchastie-v-zasedanii-deputatskogo-kluba/" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/ki_news.svg"></span>
        <span class="title" title="О протоколе оглашения диагноза">О протоколе оглашения диагноза</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="https://www.asi.org.ru/news/2019/01/17/krasnodar-sindrom-dauna-vystavka-muzej-masha/" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/asi.svg"></span>
        <span class="title" title="О второй персональной выставки Марии Мордвинцевой">Выставка Марии Мордвинцевой</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="http://nko.krasnodar.ru/?p=28709" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/civil_kuban_forum.svg"></span>
        <span class="title" title="Семинар «Основы логопедического массажа в домашних условиях»">Семинар «Логопедический массаж»</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="http://op-kk.ru/info/partner/" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/civil_chamber.png"></span>
        <span class="title" title="О реализации проекта «Мамина школа»">О реализации проекта «Мамина школа»</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="http://nko.krasnodar.ru/?p=27485" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/civil_kuban_forum.svg"></span>
        <span class="title" title="О проекте «День именинника»">О проекте «День именинника»</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="http://op-krd.ru/v-krasnodare-otmetili-mezhdunarodnyj-den-cheloveka-s-sindromom-dauna/" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/public-palate.svg"></span>
        <span class="title" title="Мероприятие, посвященное международному дню человека с синдромом Дауна в 2018 году">Международный день человека с синдромом Дауна</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="https://downsideup.org/ru/o-fonde/novosti/hudozhnica-s-sindromom-dauna-iz-krasnodara-otkryla-personalnuyu-vystavku" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/downside_up.svg"></span>
        <span class="title" title="О Маше Мордвинцевой">О Маше Мордвинцевой</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="https://www.asi.org.ru/news/2018/02/28/krasnodar-osobye-deti-mamy/" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/asi.svg"></span>
        <span class="title" title="Статья о «Танцующих лучиках»">Статья о «Танцующих лучиках»</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="https://www.asi.org.ru/news/2018/03/06/krasnodar-sindrom-dauna-roditeli/" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/asi.svg"></span>
        <span class="title" title="Статья о нашем проекте «Мамина школа»">«Мамина школа»</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="http://nko.krasnodar.ru/?p=25146" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/civil_kuban_forum.svg"></span>
        <span class="title" title="">Статья о "Маминой школе"</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="https://www.asi.org.ru/news/2018/02/19/krasnodar-vystavka-sindrom-dauna/" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/asi.svg"></span>
        <span class="title" title="Статья про персональную выставку Маши Мордвинцевой">Выставка Маши Мордвинцевой</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="https://www.youtube.com/watch?v=2sgzx9BfV-E" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/russia-kuban.svg"></span>
        <span class="title" title="Юная художница из Горячего Ключа открывает персональную выставку в Краснодаре">Персональная выставка в Краснодаре</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="https://www.youtube.com/watch?v=mTdcVTIyGZ0" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/tk_krasnodar.svg"></span>
        <span class="title" title="Для детей с синдромом Дауна в Краснодаре устроили новогодний праздник">Новогодний праздник</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="http://kuban24.tv/item/v-krasnodare-proshel-koncert-v-podderzhku-detej-s-sindromom-dauna-170283" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/kuban_24.svg"></span>
        <span class="title" title="Концерт 18 марта 2017 года, в поддержку ККОО ЦПСВДОР «Дети-лучики»">Концерт в поддержку «Дети-лучики»</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="http://kuban24.tv/item/v-krasnodare-projdet-fotovystavka-drugimi-glazami-inye-grani-krasoty-170155" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/kuban_24.svg"></span>
        <span class="title" title="21 марта 2017 состоялось мероприятие, посвященному международному дню человека с синдромом Дауна:">Международному дню человека с синдромом Дауна</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="http://www.livekuban.ru/news/obshchestvo/v-krasnodare-otmetili-vsemirnyy-den-cheloveka-s-sindromom-dauna/" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/live_kuban.svg"></span>
        <span class="title" title="В Краснодаре отметили Всемирный день человека с синдромом Дауна">Всемирный день человека с синдромом Дауна</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="http://kubnews.ru/article/37096/" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/kuban_news.svg"></span>
        <span class="title" title="Статья, посвященная детям с синдромом Дауна Краснодарского края.">Дети-лучики</span>
    </a>
</div>
<div class="col xl3 l4 m6 s12">
    <a href="http://kuban24.tv/item/evelina-bledans-vstretilas-v-krasnodare-s-detmi-s-sindromom-dauna" class="mass-media-link" target="_blank">
        <span class="lazy h link-image" data-src="img/logos/kuban_24.svg"></span>
        <span class="title" title="Эвелина Бледенс приехала с гастролями в Краснодар и встретилась с семьями, воспитывающих детей с синдромом Дауна.">Визит Эвелины Бледенс</span>
    </a>
</div>',
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
      'pdoPage' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoPage',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
/** @var modX $modx */
// Default variables
if (empty($pageVarKey)) {
    $pageVarKey = \'page\';
}
if (empty($pageNavVar)) {
    $pageNavVar = \'page.nav\';
}
if (empty($pageCountVar)) {
    $pageCountVar = \'pageCount\';
}
if (empty($totalVar)) {
    $totalVar = \'total\';
}
if (empty($page)) {
    $page = 1;
}
if (empty($pageLimit)) {
    $pageLimit = 5;
} else {
    $pageLimit = (integer)$pageLimit;
}
if (!isset($plPrefix)) {
    $plPrefix = \'\';
}
if (!empty($scriptProperties[\'ajaxMode\'])) {
    $scriptProperties[\'ajax\'] = 1;
}

// Convert parameters from getPage if exists
if (!empty($namespace)) {
    $plPrefix = $namespace;
}
if (!empty($pageNavTpl)) {
    $scriptProperties[\'tplPage\'] = $pageNavTpl;
}
if (!empty($pageNavOuterTpl)) {
    $scriptProperties[\'tplPageWrapper\'] = $pageNavOuterTpl;
}
if (!empty($pageActiveTpl)) {
    $scriptProperties[\'tplPageActive\'] = $pageActiveTpl;
}
if (!empty($pageFirstTpl)) {
    $scriptProperties[\'tplPageFirst\'] = $pageFirstTpl;
}
if (!empty($pagePrevTpl)) {
    $scriptProperties[\'tplPagePrev\'] = $pagePrevTpl;
}
if (!empty($pageNextTpl)) {
    $scriptProperties[\'tplPageNext\'] = $pageNextTpl;
}
if (!empty($pageLastTpl)) {
    $scriptProperties[\'tplPageLast\'] = $pageLastTpl;
}
if (!empty($pageSkipTpl)) {
    $scriptProperties[\'tplPageSkip\'] = $pageSkipTpl;
}
if (!empty($pageNavScheme)) {
    $scriptProperties[\'scheme\'] = $pageNavScheme;
}
if (!empty($cache_expires)) {
    $scriptProperties[\'cacheTime\'] = $cache_expires;
}
//---
$strictMode = !empty($strictMode);

$isAjax = !empty($scriptProperties[\'ajax\']) && !empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) && $_SERVER[\'HTTP_X_REQUESTED_WITH\'] == \'XMLHttpRequest\';
if ($isAjax && !isset($_REQUEST[$pageVarKey])) {
    return;
}

/** @var pdoPage $pdoPage */
$fqn = $modx->getOption(\'pdoPage.class\', null, \'pdotools.pdopage\', true);
$path = $modx->getOption(\'pdopage_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoPage = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoPage->pdoTools->addTime(\'pdoTools loaded\');

// Script and styles
if (!$isAjax && !empty($scriptProperties[\'ajaxMode\'])) {
    $pdoPage->loadJsCss();
}
// Removing of default scripts and styles so they do not overwrote nested snippet parameters
if ($snippet = $modx->getObject(\'modSnippet\', [\'name\' => \'pdoPage\'])) {
    $properties = $snippet->get(\'properties\');
    if ($scriptProperties[\'frontend_js\'] == $properties[\'frontend_js\'][\'value\']) {
        unset($scriptProperties[\'frontend_js\']);
    }
    if ($scriptProperties[\'frontend_css\'] == $properties[\'frontend_css\'][\'value\']) {
        unset($scriptProperties[\'frontend_css\']);
    }
}

// Page
if (isset($_REQUEST[$pageVarKey]) && $strictMode && (!is_numeric($_REQUEST[$pageVarKey]) || ($_REQUEST[$pageVarKey] <= 1 && !$isAjax))) {
    return $pdoPage->redirectToFirst($isAjax);
} elseif (!empty($_REQUEST[$pageVarKey])) {
    $page = (integer)$_REQUEST[$pageVarKey];
}
$scriptProperties[\'page\'] = $page;
$scriptProperties[\'request\'] = $_REQUEST;
$scriptProperties[\'setTotal\'] = true;

// Limit
if (isset($_REQUEST[\'limit\'])) {
    if (is_numeric($_REQUEST[\'limit\']) && abs($_REQUEST[\'limit\']) > 0) {
        $scriptProperties[\'limit\'] = abs($_REQUEST[\'limit\']);
    } elseif ($strictMode) {
        unset($_GET[\'limit\']);

        return $pdoPage->redirectToFirst($isAjax);
    }
}
if (!empty($maxLimit) && !empty($scriptProperties[\'limit\']) && $scriptProperties[\'limit\'] > $maxLimit) {
    $scriptProperties[\'limit\'] = $maxLimit;
}

// Offset
$offset = !empty($scriptProperties[\'offset\']) && $scriptProperties[\'offset\'] > 0
    ? (int)$scriptProperties[\'offset\']
    : 0;
$scriptProperties[\'offset\'] = $page > 1
    ? $scriptProperties[\'limit\'] * ($page - 1) + $offset
    : $offset;
if (!empty($scriptProperties[\'offset\']) && empty($scriptProperties[\'limit\'])) {
    $scriptProperties[\'limit\'] = 10000000;
}

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
$url = $pdoPage->getBaseUrl();
$output = $pagination = $total = $pageCount = \'\';

$data = $cache
    ? $pdoPage->pdoTools->getCache($scriptProperties)
    : [];

if (empty($data)) {
    $output = $pdoPage->pdoTools->runSnippet($scriptProperties[\'element\'], $scriptProperties);
    if ($output === false) {
        return \'\';
    } elseif (!empty($toPlaceholder)) {
        $output = $modx->getPlaceholder($toPlaceholder);
    }

    // Pagination
    $total = (int)$modx->getPlaceholder($totalVar);
    $pageCount = !empty($scriptProperties[\'limit\']) && $total > $offset
        ? ceil(($total - $offset) / $scriptProperties[\'limit\'])
        : 0;

    // Redirect to start if somebody specified incorrect page
    if ($page > 1 && $page > $pageCount && $strictMode) {
        return $pdoPage->redirectToFirst($isAjax);
    }
    if (!empty($pageCount) && $pageCount > 1) {
        $pagination = [
            \'first\' => $page > 1 && !empty($tplPageFirst)
                ? $pdoPage->makePageLink($url, 1, $tplPageFirst)
                : \'\',
            \'prev\' => $page > 1 && !empty($tplPagePrev)
                ? $pdoPage->makePageLink($url, $page - 1, $tplPagePrev)
                : \'\',
            \'pages\' => $pageLimit >= 7 && empty($disableModernPagination)
                ? $pdoPage->buildModernPagination($page, $pageCount, $url)
                : $pdoPage->buildClassicPagination($page, $pageCount, $url),
            \'next\' => $page < $pageCount && !empty($tplPageNext)
                ? $pdoPage->makePageLink($url, $page + 1, $tplPageNext)
                : \'\',
            \'last\' => $page < $pageCount && !empty($tplPageLast)
                ? $pdoPage->makePageLink($url, $pageCount, $tplPageLast)
                : \'\',
        ];

        if (!empty($pageCount)) {
            foreach ([\'first\', \'prev\', \'next\', \'last\'] as $v) {
                $tpl = \'tplPage\' . ucfirst($v) . \'Empty\';
                if (!empty(${$tpl}) && empty($pagination[$v])) {
                    $pagination[$v] = $pdoPage->pdoTools->getChunk(${$tpl});
                }
            }
        }
    } else {
        $pagination = [
            \'first\' => \'\',
            \'prev\' => \'\',
            \'pages\' => \'\',
            \'next\' => \'\',
            \'last\' => \'\'
        ];
    }

    $data = [
        \'output\' => $output,
        $pageVarKey => $page,
        $pageCountVar => $pageCount,
        $pageNavVar => !empty($tplPageWrapper)
            ? $pdoPage->pdoTools->getChunk($tplPageWrapper, $pagination)
            : $pdoPage->pdoTools->parseChunk(\'\', $pagination),
        $totalVar => $total,
    ];
    if ($cache) {
        $pdoPage->pdoTools->setCache($data, $scriptProperties);
    }
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $data[\'output\'] .= \'<pre class="pdoPageLog">\' . print_r($pdoPage->pdoTools->getTime(), 1) . \'</pre>\';
}

if ($isAjax) {
    if ($pageNavVar != \'pagination\') {
        $data[\'pagination\'] = $data[$pageNavVar];
        unset($data[$pageNavVar]);
    }
    if ($pageCountVar != \'pages\') {
        $data[\'pages\'] = (int)$data[$pageCountVar];
        unset($data[$pageCountVar]);
    }
    if ($pageVarKey != \'page\') {
        $data[\'page\'] = (int)$data[$pageVarKey];
        unset($data[$pageVarKey]);
    }
    if ($totalVar != \'total\') {
        $data[\'total\'] = (int)$data[$totalVar];
        unset($data[$totalVar]);
    }

    $maxIterations = (integer)$modx->getOption(\'parser_max_iterations\', null, 10);
    $modx->getParser()->processElementTags(\'\', $data[\'output\'], false, false, \'[[\', \']]\', [], $maxIterations);
    $modx->getParser()->processElementTags(\'\', $data[\'output\'], true, true, \'[[\', \']]\', [], $maxIterations);

    @session_write_close();
    exit(json_encode($data));
} else {
    if (!empty($setMeta)) {
        $charset = $modx->getOption(\'modx_charset\', null, \'UTF-8\');
        $canurl = $pdoPage->pdoTools->config[\'scheme\'] !== \'full\'
            ? rtrim($modx->getOption(\'site_url\'), \'/\') . \'/\' . ltrim($url, \'/\')
            : $url;
        $modx->regClientStartupHTMLBlock(\'<link rel="canonical" href="\' . htmlentities($canurl, ENT_QUOTES, $charset) . \'"/>\');
        if ($data[$pageVarKey] > 1) {
            $prevUrl = $pdoPage->makePageLink($canurl, $data[$pageVarKey] - 1);
            $modx->regClientStartupHTMLBlock(
                \'<link rel="prev" href="\' . htmlentities($prevUrl, ENT_QUOTES, $charset) . \'"/>\'
            );
        }
        if ($data[$pageVarKey] < $data[$pageCountVar]) {
            $nextUrl = $pdoPage->makePageLink($canurl, $data[$pageVarKey] + 1);
            $modx->regClientStartupHTMLBlock(
                \'<link rel="next" href="\' . htmlentities($nextUrl, ENT_QUOTES, $charset) . \'"/>\'
            );
        }
    }

    $modx->setPlaceholders($data, $plPrefix);
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $data[\'output\']);
    } else {
        return $data[\'output\'];
    }
}',
          'locked' => false,
          'properties' => 
          array (
            'plPrefix' => 
            array (
              'name' => 'plPrefix',
              'desc' => 'pdotools_prop_plPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для выставляемых плейсхолдеров, по умолчанию "wf.".',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'maxLimit' => 
            array (
              'name' => 'maxLimit',
              'desc' => 'pdotools_prop_maxLimit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 100,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Максимально возможный лимит выборки. Перекрывает лимит, указанный пользователем через url.',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'page' => 
            array (
              'name' => 'page',
              'desc' => 'pdotools_prop_page',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Номер страницы для вывода. Перекрывается номером, указанным пользователем через url.',
              'area_trans' => '',
            ),
            'pageVarKey' => 
            array (
              'name' => 'pageVarKey',
              'desc' => 'pdotools_prop_pageVarKey',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'page',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя переменной для поиска номера страницы в url.',
              'area_trans' => '',
            ),
            'totalVar' => 
            array (
              'name' => 'totalVar',
              'desc' => 'pdotools_prop_totalVar',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'page.total',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера для сохранения общего количества результатов.',
              'area_trans' => '',
            ),
            'pageLimit' => 
            array (
              'name' => 'pageLimit',
              'desc' => 'pdotools_prop_pageLimit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 5,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Количество ссылок на страницы. Если больше или равно 7 - включается продвинутый режим отображения.',
              'area_trans' => '',
            ),
            'element' => 
            array (
              'name' => 'element',
              'desc' => 'pdotools_prop_element',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'pdoResources',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя сниппета для запуска.',
              'area_trans' => '',
            ),
            'pageNavVar' => 
            array (
              'name' => 'pageNavVar',
              'desc' => 'pdotools_prop_pageNavVar',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'page.nav',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера для вывода пагинации.',
              'area_trans' => '',
            ),
            'pageCountVar' => 
            array (
              'name' => 'pageCountVar',
              'desc' => 'pdotools_prop_pageCountVar',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'pageCount',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера для вывода количества страниц.',
              'area_trans' => '',
            ),
            'pageLinkScheme' => 
            array (
              'name' => 'pageLinkScheme',
              'desc' => 'pdotools_prop_pageLinkScheme',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема генерации ссылки на страницу. Можно использовать плейсхолдеры [[+pageVarKey]] и [[+page]]',
              'area_trans' => '',
            ),
            'tplPage' => 
            array (
              'name' => 'tplPage',
              'desc' => 'pdotools_prop_tplPage',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">[[+pageNo]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления обычной ссылки на страницу.',
              'area_trans' => '',
            ),
            'tplPageWrapper' => 
            array (
              'name' => 'tplPageWrapper',
              'desc' => 'pdotools_prop_tplPageWrapper',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul class="pagination">[[+first]][[+prev]][[+pages]][[+next]][[+last]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления всего блока пагинации, содержит плейсхолдеры страниц.',
              'area_trans' => '',
            ),
            'tplPageActive' => 
            array (
              'name' => 'tplPageActive',
              'desc' => 'pdotools_prop_tplPageActive',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item active"><a class="page-link" href="[[+href]]">[[+pageNo]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на текущую страницу.',
              'area_trans' => '',
            ),
            'tplPageFirst' => 
            array (
              'name' => 'tplPageFirst',
              'desc' => 'pdotools_prop_tplPageFirst',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">[[%pdopage_first]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на первую страницу.',
              'area_trans' => '',
            ),
            'tplPageLast' => 
            array (
              'name' => 'tplPageLast',
              'desc' => 'pdotools_prop_tplPageLast',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">[[%pdopage_last]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на последнюю страницу.',
              'area_trans' => '',
            ),
            'tplPagePrev' => 
            array (
              'name' => 'tplPagePrev',
              'desc' => 'pdotools_prop_tplPagePrev',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">&laquo;</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на предыдущую страницу.',
              'area_trans' => '',
            ),
            'tplPageNext' => 
            array (
              'name' => 'tplPageNext',
              'desc' => 'pdotools_prop_tplPageNext',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item"><a class="page-link" href="[[+href]]">&raquo;</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на следующую страницу.',
              'area_trans' => '',
            ),
            'tplPageSkip' => 
            array (
              'name' => 'tplPageSkip',
              'desc' => 'pdotools_prop_tplPageSkip',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item disabled"><a class="page-link" href="#">...</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления пропущенных страниц при продвинутом режиме отображения (&pageLimit >= 7).',
              'area_trans' => '',
            ),
            'tplPageFirstEmpty' => 
            array (
              'name' => 'tplPageFirstEmpty',
              'desc' => 'pdotools_prop_tplPageFirstEmpty',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item disabled"><a class="page-link" href="#">[[%pdopage_first]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк, выводящийся при отсутствии ссылки на первую страницу.',
              'area_trans' => '',
            ),
            'tplPageLastEmpty' => 
            array (
              'name' => 'tplPageLastEmpty',
              'desc' => 'pdotools_prop_tplPageLastEmpty',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item disabled"><a class="page-link" href="#">[[%pdopage_last]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк, выводящийся при отсутствии ссылки на последнюю страницу.',
              'area_trans' => '',
            ),
            'tplPagePrevEmpty' => 
            array (
              'name' => 'tplPagePrevEmpty',
              'desc' => 'pdotools_prop_tplPagePrevEmpty',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк, выводящийся при отсутствии ссылки на предыдущую страницу.',
              'area_trans' => '',
            ),
            'tplPageNextEmpty' => 
            array (
              'name' => 'tplPageNextEmpty',
              'desc' => 'pdotools_prop_tplPageNextEmpty',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="page-item disabled"><a class="page-link" href="#">&raquo;</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк, выводящийся при отсутствии ссылки на следующую страницу.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_cache',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Кэширование результатов работы сниппета.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Время актуальности кэша в секундах.',
              'area_trans' => '',
            ),
            'cacheAnonymous' => 
            array (
              'name' => 'cacheAnonymous',
              'desc' => 'pdotools_prop_cacheAnonymous',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить кэширование только для неавторизованных посетителей.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'ajax' => 
            array (
              'name' => 'ajax',
              'desc' => 'pdotools_prop_ajax',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить поддержку ajax запросов.',
              'area_trans' => '',
            ),
            'ajaxMode' => 
            array (
              'name' => 'ajaxMode',
              'desc' => 'pdotools_prop_ajaxMode',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'None',
                  'value' => '',
                  'name' => 'None',
                ),
                1 => 
                array (
                  'text' => 'Default',
                  'value' => 'default',
                  'name' => 'Default',
                ),
                2 => 
                array (
                  'text' => 'Scroll',
                  'value' => 'scroll',
                  'name' => 'Scroll',
                ),
                3 => 
                array (
                  'text' => 'Button',
                  'value' => 'button',
                  'name' => 'Button',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ajax пагинация "из коробки". Доступны 3 режима: "default", "button" и "scroll".',
              'area_trans' => '',
            ),
            'ajaxElemWrapper' => 
            array (
              'name' => 'ajaxElemWrapper',
              'desc' => 'pdotools_prop_ajaxElemWrapper',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '#pdopage',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'jQuery селектор элемента-обёртки с результатами и пагинацией.',
              'area_trans' => '',
            ),
            'ajaxElemRows' => 
            array (
              'name' => 'ajaxElemRows',
              'desc' => 'pdotools_prop_ajaxElemRows',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '#pdopage .rows',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'jQuery селектор элемента с результатами.',
              'area_trans' => '',
            ),
            'ajaxElemPagination' => 
            array (
              'name' => 'ajaxElemPagination',
              'desc' => 'pdotools_prop_ajaxElemPagination',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '#pdopage .pagination',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'jQuery селектор элемента с пагинацией.',
              'area_trans' => '',
            ),
            'ajaxElemLink' => 
            array (
              'name' => 'ajaxElemLink',
              'desc' => 'pdotools_prop_ajaxElemLink',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '#pdopage .pagination a',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'jQuery селектор ссылки на страницу.',
              'area_trans' => '',
            ),
            'ajaxElemMore' => 
            array (
              'name' => 'ajaxElemMore',
              'desc' => 'pdotools_prop_ajaxElemMore',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '#pdopage .btn-more',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'jQuery селектор кнопки загрузки результатов при ajaxMode = button.',
              'area_trans' => '',
            ),
            'ajaxTplMore' => 
            array (
              'name' => 'ajaxTplMore',
              'desc' => 'pdotools_prop_ajaxTplMore',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <button class="btn btn-primary btn-more">[[%pdopage_more]]</button>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Шаблон кнопки для загрузки новых результатов при ajaxMode = button. Должен включать селектор, указанный в "ajaxElemMore".',
              'area_trans' => '',
            ),
            'ajaxHistory' => 
            array (
              'name' => 'ajaxHistory',
              'desc' => 'pdotools_prop_ajaxHistory',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'Auto',
                  'value' => '',
                  'name' => 'Auto',
                ),
                1 => 
                array (
                  'text' => 'Enabled',
                  'value' => 1,
                  'name' => 'Enabled',
                ),
                2 => 
                array (
                  'text' => 'Disabled',
                  'value' => 0,
                  'name' => 'Disabled',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Сохранять номер страницы в url при работе в режиме ajax.',
              'area_trans' => '',
            ),
            'frontend_js' => 
            array (
              'name' => 'frontend_js',
              'desc' => 'pdotools_prop_frontend_js',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '[[+assetsUrl]]js/pdopage.min.js',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ссылка на javascript для подключения сниппетом.',
              'area_trans' => '',
            ),
            'frontend_css' => 
            array (
              'name' => 'frontend_css',
              'desc' => 'pdotools_prop_frontend_css',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '[[+assetsUrl]]css/pdopage.min.css',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ссылка на css стили оформления для подключения сниппетом.',
              'area_trans' => '',
            ),
            'setMeta' => 
            array (
              'name' => 'setMeta',
              'desc' => 'pdotools_prop_setMeta',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Регистрация мета-тегов со ссылками на предыдущую и следующую страницу.',
              'area_trans' => '',
            ),
            'strictMode' => 
            array (
              'name' => 'strictMode',
              'desc' => 'pdotools_prop_strictMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Строгий режим работы. pdoPage делает редиректы при загрузке несуществующих страниц.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdopage.php',
          'content' => '/** @var array $scriptProperties */
/** @var modX $modx */
// Default variables
if (empty($pageVarKey)) {
    $pageVarKey = \'page\';
}
if (empty($pageNavVar)) {
    $pageNavVar = \'page.nav\';
}
if (empty($pageCountVar)) {
    $pageCountVar = \'pageCount\';
}
if (empty($totalVar)) {
    $totalVar = \'total\';
}
if (empty($page)) {
    $page = 1;
}
if (empty($pageLimit)) {
    $pageLimit = 5;
} else {
    $pageLimit = (integer)$pageLimit;
}
if (!isset($plPrefix)) {
    $plPrefix = \'\';
}
if (!empty($scriptProperties[\'ajaxMode\'])) {
    $scriptProperties[\'ajax\'] = 1;
}

// Convert parameters from getPage if exists
if (!empty($namespace)) {
    $plPrefix = $namespace;
}
if (!empty($pageNavTpl)) {
    $scriptProperties[\'tplPage\'] = $pageNavTpl;
}
if (!empty($pageNavOuterTpl)) {
    $scriptProperties[\'tplPageWrapper\'] = $pageNavOuterTpl;
}
if (!empty($pageActiveTpl)) {
    $scriptProperties[\'tplPageActive\'] = $pageActiveTpl;
}
if (!empty($pageFirstTpl)) {
    $scriptProperties[\'tplPageFirst\'] = $pageFirstTpl;
}
if (!empty($pagePrevTpl)) {
    $scriptProperties[\'tplPagePrev\'] = $pagePrevTpl;
}
if (!empty($pageNextTpl)) {
    $scriptProperties[\'tplPageNext\'] = $pageNextTpl;
}
if (!empty($pageLastTpl)) {
    $scriptProperties[\'tplPageLast\'] = $pageLastTpl;
}
if (!empty($pageSkipTpl)) {
    $scriptProperties[\'tplPageSkip\'] = $pageSkipTpl;
}
if (!empty($pageNavScheme)) {
    $scriptProperties[\'scheme\'] = $pageNavScheme;
}
if (!empty($cache_expires)) {
    $scriptProperties[\'cacheTime\'] = $cache_expires;
}
//---
$strictMode = !empty($strictMode);

$isAjax = !empty($scriptProperties[\'ajax\']) && !empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) && $_SERVER[\'HTTP_X_REQUESTED_WITH\'] == \'XMLHttpRequest\';
if ($isAjax && !isset($_REQUEST[$pageVarKey])) {
    return;
}

/** @var pdoPage $pdoPage */
$fqn = $modx->getOption(\'pdoPage.class\', null, \'pdotools.pdopage\', true);
$path = $modx->getOption(\'pdopage_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoPage = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoPage->pdoTools->addTime(\'pdoTools loaded\');

// Script and styles
if (!$isAjax && !empty($scriptProperties[\'ajaxMode\'])) {
    $pdoPage->loadJsCss();
}
// Removing of default scripts and styles so they do not overwrote nested snippet parameters
if ($snippet = $modx->getObject(\'modSnippet\', [\'name\' => \'pdoPage\'])) {
    $properties = $snippet->get(\'properties\');
    if ($scriptProperties[\'frontend_js\'] == $properties[\'frontend_js\'][\'value\']) {
        unset($scriptProperties[\'frontend_js\']);
    }
    if ($scriptProperties[\'frontend_css\'] == $properties[\'frontend_css\'][\'value\']) {
        unset($scriptProperties[\'frontend_css\']);
    }
}

// Page
if (isset($_REQUEST[$pageVarKey]) && $strictMode && (!is_numeric($_REQUEST[$pageVarKey]) || ($_REQUEST[$pageVarKey] <= 1 && !$isAjax))) {
    return $pdoPage->redirectToFirst($isAjax);
} elseif (!empty($_REQUEST[$pageVarKey])) {
    $page = (integer)$_REQUEST[$pageVarKey];
}
$scriptProperties[\'page\'] = $page;
$scriptProperties[\'request\'] = $_REQUEST;
$scriptProperties[\'setTotal\'] = true;

// Limit
if (isset($_REQUEST[\'limit\'])) {
    if (is_numeric($_REQUEST[\'limit\']) && abs($_REQUEST[\'limit\']) > 0) {
        $scriptProperties[\'limit\'] = abs($_REQUEST[\'limit\']);
    } elseif ($strictMode) {
        unset($_GET[\'limit\']);

        return $pdoPage->redirectToFirst($isAjax);
    }
}
if (!empty($maxLimit) && !empty($scriptProperties[\'limit\']) && $scriptProperties[\'limit\'] > $maxLimit) {
    $scriptProperties[\'limit\'] = $maxLimit;
}

// Offset
$offset = !empty($scriptProperties[\'offset\']) && $scriptProperties[\'offset\'] > 0
    ? (int)$scriptProperties[\'offset\']
    : 0;
$scriptProperties[\'offset\'] = $page > 1
    ? $scriptProperties[\'limit\'] * ($page - 1) + $offset
    : $offset;
if (!empty($scriptProperties[\'offset\']) && empty($scriptProperties[\'limit\'])) {
    $scriptProperties[\'limit\'] = 10000000;
}

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
$url = $pdoPage->getBaseUrl();
$output = $pagination = $total = $pageCount = \'\';

$data = $cache
    ? $pdoPage->pdoTools->getCache($scriptProperties)
    : [];

if (empty($data)) {
    $output = $pdoPage->pdoTools->runSnippet($scriptProperties[\'element\'], $scriptProperties);
    if ($output === false) {
        return \'\';
    } elseif (!empty($toPlaceholder)) {
        $output = $modx->getPlaceholder($toPlaceholder);
    }

    // Pagination
    $total = (int)$modx->getPlaceholder($totalVar);
    $pageCount = !empty($scriptProperties[\'limit\']) && $total > $offset
        ? ceil(($total - $offset) / $scriptProperties[\'limit\'])
        : 0;

    // Redirect to start if somebody specified incorrect page
    if ($page > 1 && $page > $pageCount && $strictMode) {
        return $pdoPage->redirectToFirst($isAjax);
    }
    if (!empty($pageCount) && $pageCount > 1) {
        $pagination = [
            \'first\' => $page > 1 && !empty($tplPageFirst)
                ? $pdoPage->makePageLink($url, 1, $tplPageFirst)
                : \'\',
            \'prev\' => $page > 1 && !empty($tplPagePrev)
                ? $pdoPage->makePageLink($url, $page - 1, $tplPagePrev)
                : \'\',
            \'pages\' => $pageLimit >= 7 && empty($disableModernPagination)
                ? $pdoPage->buildModernPagination($page, $pageCount, $url)
                : $pdoPage->buildClassicPagination($page, $pageCount, $url),
            \'next\' => $page < $pageCount && !empty($tplPageNext)
                ? $pdoPage->makePageLink($url, $page + 1, $tplPageNext)
                : \'\',
            \'last\' => $page < $pageCount && !empty($tplPageLast)
                ? $pdoPage->makePageLink($url, $pageCount, $tplPageLast)
                : \'\',
        ];

        if (!empty($pageCount)) {
            foreach ([\'first\', \'prev\', \'next\', \'last\'] as $v) {
                $tpl = \'tplPage\' . ucfirst($v) . \'Empty\';
                if (!empty(${$tpl}) && empty($pagination[$v])) {
                    $pagination[$v] = $pdoPage->pdoTools->getChunk(${$tpl});
                }
            }
        }
    } else {
        $pagination = [
            \'first\' => \'\',
            \'prev\' => \'\',
            \'pages\' => \'\',
            \'next\' => \'\',
            \'last\' => \'\'
        ];
    }

    $data = [
        \'output\' => $output,
        $pageVarKey => $page,
        $pageCountVar => $pageCount,
        $pageNavVar => !empty($tplPageWrapper)
            ? $pdoPage->pdoTools->getChunk($tplPageWrapper, $pagination)
            : $pdoPage->pdoTools->parseChunk(\'\', $pagination),
        $totalVar => $total,
    ];
    if ($cache) {
        $pdoPage->pdoTools->setCache($data, $scriptProperties);
    }
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $data[\'output\'] .= \'<pre class="pdoPageLog">\' . print_r($pdoPage->pdoTools->getTime(), 1) . \'</pre>\';
}

if ($isAjax) {
    if ($pageNavVar != \'pagination\') {
        $data[\'pagination\'] = $data[$pageNavVar];
        unset($data[$pageNavVar]);
    }
    if ($pageCountVar != \'pages\') {
        $data[\'pages\'] = (int)$data[$pageCountVar];
        unset($data[$pageCountVar]);
    }
    if ($pageVarKey != \'page\') {
        $data[\'page\'] = (int)$data[$pageVarKey];
        unset($data[$pageVarKey]);
    }
    if ($totalVar != \'total\') {
        $data[\'total\'] = (int)$data[$totalVar];
        unset($data[$totalVar]);
    }

    $maxIterations = (integer)$modx->getOption(\'parser_max_iterations\', null, 10);
    $modx->getParser()->processElementTags(\'\', $data[\'output\'], false, false, \'[[\', \']]\', [], $maxIterations);
    $modx->getParser()->processElementTags(\'\', $data[\'output\'], true, true, \'[[\', \']]\', [], $maxIterations);

    @session_write_close();
    exit(json_encode($data));
} else {
    if (!empty($setMeta)) {
        $charset = $modx->getOption(\'modx_charset\', null, \'UTF-8\');
        $canurl = $pdoPage->pdoTools->config[\'scheme\'] !== \'full\'
            ? rtrim($modx->getOption(\'site_url\'), \'/\') . \'/\' . ltrim($url, \'/\')
            : $url;
        $modx->regClientStartupHTMLBlock(\'<link rel="canonical" href="\' . htmlentities($canurl, ENT_QUOTES, $charset) . \'"/>\');
        if ($data[$pageVarKey] > 1) {
            $prevUrl = $pdoPage->makePageLink($canurl, $data[$pageVarKey] - 1);
            $modx->regClientStartupHTMLBlock(
                \'<link rel="prev" href="\' . htmlentities($prevUrl, ENT_QUOTES, $charset) . \'"/>\'
            );
        }
        if ($data[$pageVarKey] < $data[$pageCountVar]) {
            $nextUrl = $pdoPage->makePageLink($canurl, $data[$pageVarKey] + 1);
            $modx->regClientStartupHTMLBlock(
                \'<link rel="next" href="\' . htmlentities($nextUrl, ENT_QUOTES, $charset) . \'"/>\'
            );
        }
    }

    $modx->setPlaceholders($data, $plPrefix);
    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $data[\'output\']);
    } else {
        return $data[\'output\'];
    }
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
    'modTemplateVar' => 
    array (
    ),
  ),
);