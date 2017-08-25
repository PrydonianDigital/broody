jQuery(document).foundation();

jQuery(document).ready(function() {

	jQuery('[data-menu-underline-from-center] li').addClass('underline-from-center');

	jQuery('.sub-menu').attr('data-submenu');

	jQuery('#ourStory p').wrap('<div class="column animated fadeInUp">').addClass('foo');

	jQuery(window).scroll(function() {
		var winTop = jQuery(window).scrollTop();
		if (winTop >= 80) {
			jQuery('body').addClass('closed');
		} else{
			jQuery('body').removeClass('closed');
		}
	});

	var map;

	if(element_exists(jQuery('#map'))) {
		initMap();
	}

	jQuery('.faq').on('click', 'h3', function(){
		jQuery('.answer').slideUp();
		jQuery('h3').removeClass('open')
		jQuery(this).addClass('open').next().slideToggle();
	});

});

function initMap() {
	var mother = {lat: 51.5240886, lng: -0.0782075};
	var iconBase = '/wp-content/themes/broody/img/';
	var icons = {
		broody: {
			icon: iconBase + 'marker.png'
		}
	}
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 16,
		center: mother,
		scrollwheel: false,
		styles: [
            {elementType: 'geometry', stylers: [{color: '#505153'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#000000'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#fbaa3a'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#fbaa3a'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#fbaa3a'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#fbaa3a'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#fbaa3a'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#fbaa3a'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#000000'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#fbaa3a'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#fbaa3a'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#000000'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#fbaa3a'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#000000'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#fbaa3a'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#fbaa3a'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#fbaa3a'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#505153'}]
            }
          ]
	});
	var image = '/wp-content/themes/broody/img/marker.png';
	var broodyMarker = new google.maps.Marker({
		position: {lat: 51.5240886, lng: -0.0782075},
		map: map,
		icon: image,
		title: "Broody"
	});
}

function exists(data) {
	if(!data || data==null || data=='undefined' || typeof(data)=='undefined') return false;
	else return true;
}

function element_exists(id){
	if(jQuery(id).length > 0){
		return true;
	}
	return false;
}