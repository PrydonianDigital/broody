jQuery(document).foundation()
jQuery(function() {
	jQuery('[data-menu-underline-from-center] li').addClass('underline-from-center');
	jQuery('.sub-menu').attr('data-submenu');
	jQuery('#ourStory p').addClass('small-12 columns');
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
});

function initMap() {
	var mother = {lat: 51.5240886, lng: -0.0782075};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 16,
		center: mother
	});
	var marker = new google.maps.Marker({
		position: mother,
		map: map
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