let coords, map, view, modal;

let coordinates = {
	all: {
		coords: [38.6982232, 44.5958236],
		zoom: 9
	},
	krasnodar: {
		coords: [38.9657451, 45.0388714],
		zoom: 13.52
	},
	novorossiysk: {
		coords: [37.7751206, 44.7260735],
		zoom: 15.69
	},
	tuapse: {
		coords: [39.0668949, 44.0947969],
		zoom: 15.42
	},
}

$(() => {

	$(window).on('scroll', updateNavBar);
	$('body').on('click', '.select-field', toggleSelect);
	$('body').on('click', '.select-field ul a', selectListItem);
	$('body').on('click', closePopups);
	$('body').on('click', '.question-wrapper .header-wrapper', toggleAnswer);
	$('body').on('change', '[data-section-name]', updateModal);
	$('body').on('change', 'input[type="hidden"]', updateHInputLabel);
	$('body').on('click', '#send-request', sendRequest);
	$(window).on('resize, scroll', updatePopups );
	$('.overflow-wrapper').scroll( hideSelect );

	$('body').on('click', '.address', switchAddress);

	$('.lazy').lazy();
	$('.tooltipped').tooltip();
	
	modal = M.Modal.init(document.querySelectorAll('.modal'), {
		onOpenStart: initModal,
		onOpenEnd: focusModal
	})

	if($('#map').length){
		loadScript("https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/build/ol.js", () => {
			initMap();
		})
	}
});

function switchAddress(e){
	
	e.preventDefault();
	$('.address').removeClass('active');
	$('.address-content').removeClass('active');

	let anchor = $(this).data('anchor');

	$('[data-anchor="'+anchor+'"]').addClass('active');

	flyTo(anchor, null);

	if(anchor == 'all'){
		anchor = "krasnodar";
	}

	$('#' + anchor).addClass('active');

}

function updatePopups(){

	$('.popup ul').each((index, el) => {

		let parent = $(el).parents('.popup');
		let height = $(parent).innerHeight();
		let pWidth = parent.outerWidth();
		let pTop = parent.position().top + height;

		$(el).css({
			top: pTop,
			width: pWidth
		});
	});
}

function sendRequest(e){
	e.preventDefault();
	
	let data = $(this).parents('form').serialize();

	$.ajax({
		url: '/assets/classes/sender.php',
		data: data,
		dataType: 'json',
		type: 'POST',
		success: response => {
			M.toast({html: response.message, classes: "success"});
			document.querySelector('#request').reset();
			let instance = M.Modal.getInstance(document.querySelector('#request'));
			instance.close();
		},
		error: response => {
			if(response.status == 404){
				M.toast({html: "Ошибка отправки: " + response.status, classes: "error"});
			}
			if(response.status == 400){
				M.toast({html: "Ошибка отправки: " + response.responseJSON.message, classes: "error"});
			}
		}
	})
}

function focusModal(){
	$('[name="fio"]').focus();
}

function updateHInputLabel(){
	let val = this.value;
	$(this).next().text(val);
}

function updateModal(){
	let section = $(this).data('sectionName');
	let selected = $(this).data('val');

	$('[data-section="'+section+'"]').removeClass('active');

	if($(this).prop('checked')){
		$('#'+selected).addClass('active');
	}

}

function initModal(){

	let modalData = $(this._openingTrigger).data();

	// Инициализация секций
	let sectionVals = modalData['sections'].split('&&');
	let inputVals = modalData['inputs'].split('&&');

	sectionVals.forEach(section => {
		let sectionData = section.split('|');
		$('[data-section="'+sectionData[0]+'"]').removeClass('active');
		$('#'+sectionData[1]).addClass('active');
	});

	inputVals.forEach(input => {

		let inputData = input.split('|');
		let id = inputData[0];
		let type = inputData[1];
		let val = inputData[2];

		switch(type){
			case "radio" || "checkbox" : $('#'+id).prop('checked', val);break;
			case "hidden": $('#'+id).val(val).change();break;
			default: $('#'+id).val(val);break;
		}
	})
}

function toggleAnswer(e){
	e.preventDefault();
	$(this).parents('.question-wrapper').toggleClass('active');
	$(this).parents('.question-wrapper').find('.answer').slideToggle(200);
}

function closePopups(e){

	let path = composedPath( e.target );
	
	let testyPopup = path.filter(el => {
		return $(el).hasClass('select-field');
	});
	
	if(!testyPopup.length){
		hideSelect();
	}
}

function updateNavBar(){

	if ($('html, body').scrollTop() >= 80){
		$('header').addClass('fixed');
	}else{
		$('header').removeClass('fixed')
	}
}

function toggleSelect(){
	$(this).toggleClass('popup');
	updatePopups();
}

function selectListItem(e){

	e.preventDefault();

	let $parent = $(this).parents('.select-field');
	let $input = $parent.find('input');
	let text = $(this).text();
	$input.val(text).change();

}

function hideSelect(){

	$('.select-field').removeClass('popup');
}

function composedPath (el) {

	var path = [];

	while (el) {

		path.push(el);

		if (el.tagName === 'HTML') {

			path.push(document);
			path.push(window);

			return path;
	   }

	   el = el.parentElement;
	}
}

//= Асинхронная загрузка скриптов =========================================
function loadScript(url, callback){

	var script = document.createElement("script")
	script.type = "text/javascript";
	
	if (script.readyState){  //IE
		script.onreadystatechange = function(){
			if (script.readyState == "loaded" ||
					script.readyState == "complete"){
				script.onreadystatechange = null;
				callback();
			}
		};
	} else {  //Others
		script.onload = function(){
			callback();
		};
	}

	script.src = url;
	document.getElementsByTagName("head")[0].appendChild(script);
}

//= Инициализация карты ===================================================
function initMap(){

	coords = coordinates.all.coords;

	var style = new ol.style.Style({
		image: new ol.style.Icon({
			anchor: [.5, 1],
			src: '/img/map_marker.png'
		})
	});
	
	var krasMarker = new ol.Feature({
		type: 'icon',
		geometry: new ol.geom.Point(ol.proj.fromLonLat(coordinates.krasnodar.coords))
	});

	var novorosMarker = new ol.Feature({
		type: 'icon',
		geometry: new ol.geom.Point(ol.proj.fromLonLat(coordinates.novorossiysk.coords))
	});

	var tuapseMarker = new ol.Feature({
		type: 'icon',
		geometry: new ol.geom.Point(ol.proj.fromLonLat(coordinates.tuapse.coords))
	});
	
	var vectorSource = new ol.source.Vector({
		features: [krasMarker, novorosMarker, tuapseMarker]
	})
	
	var vectorLayer = new ol.layer.Vector({
		source: vectorSource,
		style: style
	});
	
	// Shift map center to provide place for overlay
	var center = [
		coords[0], 
		coords[1]
	]

	view = new ol.View({
		center: ol.proj.fromLonLat(center),
		zoom: coordinates.all.zoom
	});
	
	map = new ol.Map({
		target: 'map',  // The DOM element that will contains the map
		interactions: ol.interaction.defaults({mouseWheelZoom:false}), //Disable scroll event
		renderer: 'canvas', // Force the renderer to be used
		layers: [
			// Add a new Tile layer getting tiles from OpenStreetMap source
			new ol.layer.Tile({
				source: new ol.source.OSM({
					url: "https://basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png"
				})
			}),
			vectorLayer
		],
		// Create a view centered on the specified location and zoom level
	
		view: view
	});  
	
	// Эвент по клику на маркере
	map.on('click', function(evt) {
		var f = map.forEachFeatureAtPixel(
			evt.pixel,
			function(ft, layer){return ft;}
		);
		if (f && f.get('type') == 'icon') {
			var linkEl = $('<a href="https://goo.gl/maps/KQYmVFwvvH7FYZYZ6" target="_blank">Google</a>');
			$('#map').append(linkEl);
			linkEl[0].click();
			$(linkEl).remove();
		}        
	});
	
	map.on("pointermove", function (evt) {
		var hit = this.forEachFeatureAtPixel(evt.pixel, function(feature, layer) {
			return true;
		}); 
		if (hit) {
			this.getTargetElement().style.cursor = 'pointer';
		} else {
			this.getTargetElement().style.cursor = '';
		}
	});
}

function flyTo(city) {

	const duration = 2000;

	view.animate(
		{
			zoom: coordinates.all.zoom,
			duration: duration / 2
		},
		() => {
			view.animate(
				{
					zoom: coordinates[city].zoom,
					duration: duration / 2
				}
			)
		}
	)

	view.animate(
		{
			center: ol.proj.fromLonLat(coordinates[city].coords),
			duration: duration
		}
	);
	
	// let parts = 2;
	// let called = false;
	// function callback(complete) {
	//   --parts;
	//   if (called) {
	// 	return;
	//   }
	//   if (parts === 0 || !complete) {
	// 	called = true;
	// 	done(complete);
	//   }
	// }
	// view.animate(
	//   {
	// 	center: ol.proj.fromLonLat(location),
	// 	duration: duration,
	//   }
	// );
	// view.animate(
	//   {
	// 	zoom: zoom - 1,
	// 	duration: duration / 2,
	//   },
	//   {
	// 	zoom: zoom,
	// 	duration: duration / 2,
	//   }
	// );
  }