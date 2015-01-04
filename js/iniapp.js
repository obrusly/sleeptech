//Page Preloader
$(window).load(function() { 
	$("#loader").delay(100).fadeOut(); 
	$(".mask").delay(1000).fadeOut("slow");
});

$(document).ready(function() {
	var form = $('#form'),
		submit = $('#submit'),
		alert = $('.alert'),
		defaulttext = $('.defualt-text').text(),
		contentString = '<div id="content">'+
		'<div id="siteNotice">'+
		'</div>'+
		'<h3 id="firstHeading" class="firstHeading" style="font-size:24px;">DIVINO</h3>'+
		'<div id="bodyContent">'+
		'<p style="font-size:12px;">Por cualquier consulta puede contactarnos por el 25061262 int.793.<br> Dirección: Irlanda 2014 esq. Av. Italia.</p>'+
		'</div>'+
		'</div>',
		latlng = new google.maps.LatLng(-34.88580074187473,-56.136121442114245),
		settings = {
			zoom: 16,
			center: new google.maps.LatLng(-34.88580074187473,-56.136121442114245), mapTypeId: google.maps.MapTypeId.ROADMAP,
			mapTypeControl: false,
			scrollwheel: false,
			draggable: true,
			mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
			navigationControl: false,
			navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
			mapTypeId: google.maps.MapTypeId.ROADMAP
		},
		map = new google.maps.Map(document.getElementById("map_canvas"), settings),
		infowindow = new google.maps.InfoWindow({
			content: contentString
		}),
		companyImage = new google.maps.MarkerImage('images/marker.png',
			new google.maps.Size(53,63),
			new google.maps.Point(0,0),
			new google.maps.Point(35,20)
		),
		companyPos = new google.maps.LatLng(-34.88580074187473,-56.136121442114245),
		companyMarker = new google.maps.Marker({
			position: companyPos,
			map: map,
			icon: companyImage,
			title:"DIVINO SleepTECH",
			zIndex: 3
		}),
		leBootstrap = leMediaQueries();

	leResize(leBootstrap);
	$(window).on('resize', function() {
		leBootstrap = leMediaQueries();
		leResize(leBootstrap);
	});

	$("ul#tabs li").on('click', function(){
		var $leThis = $(this);

		if (!$leThis.hasClass("active")) {
			var tabNum = $leThis.index();
			var nthChild = tabNum+1;
			$("ul#tabs li.active").removeClass("active");
			$leThis.addClass("active");
			$("ul#tab li.active").removeClass("active");
			$("ul#tab li:nth-child("+nthChild+")").addClass("active");
		}
	});
	// navigation click actions	
	$('.nextBtn').on('click', function(e){
		e.preventDefault();

		var $leThis = $(this),
			sectionID = $leThis.find('.scroll-link').attr("data-id");
		scrollToID('#' + sectionID, 750);	

		$('.scroll-link').removeClass('activar');
		$leThis.addClass('activar');
	});
	
	// scroll to top action
	$('.scroll-top').on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({scrollTop:0}, 'slow'); 
		$('.scroll-link').removeClass('activar');
	});
	// mobile nav toggle
	$('#nav-toggle').on('click', function (e) {
		e.preventDefault();
		$('#main-nav').toggleClass("open");
	});

	$('.nav a').on('click', function(){
		if ($(document).width() <= 767){
			$(".navbar-toggle").click();
		}
	});

	form.on('submit', function(e) {
		e.preventDefault();

		$.ajax({
			url: 'contact.php',
			type: 'POST',
			dataType: 'html',
			data: form.serialize(),
			beforeSend: function() {
				alert.fadeOut();
				submit.html('Enviando....');
			},
			success: function(e) {
				alert.html(e).fadeIn();
				form.trigger('reset'); // reset form
				submit.html('ENVIAR');
			},
			error: function(e) {
				console.log(e)
			}
		});
	});

	$('.selectDefault').text(defaulttext);

	$('.selectBox').on('change',function(){
	   var defaulttext2 = $('.selectBox').find(":selected").text(); 
	    $('.selectDefault').text(defaulttext2);
	});

	//Google Map
	google.maps.event.addDomListener(window, "resize", function() {
		var center = map.getCenter();
		google.maps.event.trigger(map, "resize");
		map.setCenter(center);
	});
	
	google.maps.event.addListener(companyMarker, 'click', function() {
		infowindow.open(map,companyMarker);
	});
});

// scroll function
function scrollToID(id, speed){
	var offSet = 50;
	var targetOffset = $(id).offset().top - offSet;
	var mainNav = $('#main-nav');
	$('html,body').animate({scrollTop:targetOffset}, speed);
	if (mainNav.hasClass("open")) {
		mainNav.css("height", "1px").removeClass("in").addClass("collapse");
		mainNav.removeClass("open");
	}
}
function leMediaQueries() {
	var leWindow = $(window).width(),
		leBootstrap = '';
	
	if (leWindow >= 1600) {
		leBootstrap = 'xl';
	} else if (leWindow >= 1200) {
		leBootstrap = 'lg';
	} else if (leWindow >= 992) {
		leBootstrap = 'md';
	} else if (leWindow >= 768) {
		leBootstrap = 'sm';
	} else {
		leBootstrap = 'xs';
	}

	return leBootstrap;
}
function leResize(leBootstrap) {
	var $ultimoLogoSleepTech = $('.logosSleepTech').find('img:last');

	if (leBootstrap === 'xs') {
		$('.logosSleepTech').find('img:not(:last)').height($ultimoLogoSleepTech.height());
	} else {
		$('.logosSleepTech').find('img:not(:last)').attr('style', '');
	}
}