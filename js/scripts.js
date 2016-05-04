/* Modules */

var go = (function ($, root, undefined) {
  
	'use strict';

	// vars
	var a,b,c,


	/* 
	* Initialize Skrollr.js only if on desktop 
	*/
	initSkrollr = function () {
		if (!window.matchMedia('(max-width: 991px)').matches) {
			skrollr.init({forceHeight: false});
		}
	},

	/* 
	* Affix Side Nav 
	*/
	affixSideNav = function () {
		if (!window.matchMedia('(max-width: 991px)').matches) {
			$('.custom-nav-stacked').affix({
	      		offset: {
	        		top: $('#navbar').height() + $('#pagehead').height() - 50,
	        		bottom: $('footer').height() + 100,
	      		}
			});	
		}
	},

	/* 
	* Initialize Isotope for press and donedeals
	*/
	initIsotope = function (){
	    $('.pressFilters li').each(function(){
	    	var searchVal = $(this).children().text().replace(/\s+/, "").toLowerCase();
	    	$(this).children().addClass(searchVal);
	    });
	    $('.pressFilters li').first().removeClass().addClass('all');
	    // Create the dropdown base
	    $("<select id='filter-select' class='form-control'/>").appendTo(".pressFilters"); 
	    // Create default option "Go to..."
	    $("<option />", {
	        "selected": "selected",
	        "value"   : "*",
	        "text" : "-- Show All --"
	    }).appendTo(".pressFilters select");
	      
	    // Populate dropdown with menu items
	    $(".pressFilters a").each(function() {
	    	var el = $(this);
	    	$("<option />", {
	    		"value"   :"."+el.attr("class"),
	        	"text"    : el.text()
	    	}).appendTo(".pressFilters select");
	    });
	  

		var $isotopeContainerPress = $('#isotopeContainerPress');

		$isotopeContainerPress.isotope({
			itemSelector: '.item',
			sortBy: 'original-order'
		});

		$('#filter-select').change( function() {
			$isotopeContainerPress.isotope({
		    	filter: this.value
			});
		});

		var $isotopeContainerDeals = $('#isotopeContainerDeals');
			$isotopeContainerDeals.isotope({
				itemSelector: '.item',
	    			masonry: {
	      			columnWidth: '.item'
					},
				sortBy: 'original-order'	
			});
			$isotopeContainerDeals.imagesLoaded().progress(function(){
				$isotopeContainerDeals.isotope('layout');
			});
		
	},


	/* 
	* Initialize Video — plays long video then loops
	*/
	initVideo = function () {
		$( "#video2" ).hide();
		$('video').on('ended',function(){
      		$( "#video1" ).hide();
	    	$( "#video2" ).show();
	    	document.getElementById('video2').play();
    	});
   	},

	
	/* 
	* Hides Video on mobile and ensures the video isn't downloaded
	*/
	initResponsiveVideo = function () {
		if (window.matchMedia('(max-width: 768px)').matches) {
		    $('#video1').remove();
		    $('#video2').remove();
		} else {
		}
	},

	/* 
	* Pin the Header on scroll
	*/
	pinHeader = function () {

       var $header = $('header'),
          $body = $('body'),
          $window = $(window),
          headerOffsetTop = $header.offset().top;

        function init() {
          $window.on('scroll', onScroll)
          $window.on('resize', resize)
        }
 
       function onScroll() {
          console.log(headerOffsetTop);
          if(headerOffsetTop < $window.scrollTop() && !$body.hasClass('has-docked-nav')) {
            $body.addClass('has-docked-nav')
          }
          if(headerOffsetTop > $window.scrollTop() && $body.hasClass('has-docked-nav')) {
            $body.removeClass('has-docked-nav')
          }
        }
        
       function resize() {
          $body.removeClass('has-docked-nav')
          headerOffsetTop = $header.offset().top
          onScroll()
        }
        
        init();    
    },


    /* 
	* Toggle for the hero menu
	*/
	heroMenuToggle = function () {
		$('.hero-toggle, .hero-nav').click(function(){
	        $('.hero-toggle, .hero-nav, .hero-logo').toggleClass('hero-nav-on');
	        $('body').toggleClass('no-scroll');
	    });
    },


    /* 
	* Toggle for the Search
	*/
    showSearch = function () {
		$('.buttonsearch').click(function(event){
			event.preventDefault();
  			$('#formsearch').slideToggle( "fast",function(){});
			$('#searchbox').focus();
			$('.openclosesearch').toggle();
		});
	},	


	/* 
	* scroll to top arrow shows after 100VH
	*/
	scrollToTopArrow = function() {
		var $win = $(window);
		var winH = $win.height();
		var $backToTop = $('#backToTop');

		if ($(this).scrollTop() > winH ) {
			$('#backToTop').addClass('show');
		} else {
			$('#backToTop').removeClass('show');
		}
	},

	/* 
	* Text Rotator in hero
	*/	
	setupRotator = function()
	{        
		if($('.textItem').length > 1)
		{
			$('.textItem:first').addClass('current').fadeIn(1000);
			setInterval(function(){textRotate();}, 3000);
		}
	},

	textRotate = function()
	{
		var current = $('#headlines > .current');
		if(current.next().length == 0)
		{
  			/* disabled looping */
			// current.removeClass('current').fadeOut(1000);
			// $('.textItem:first').addClass('current').fadeIn(1000);
		}
		else
		{
			current.removeClass('current').fadeOut(1000);
			current.next().addClass('current').fadeIn(1000);
		}
	},


	/* 
	* Fixes the height of the flickity cell — to be the height of the flickity viewport
	*/
	fixHeight = function ()
	{
		var newHeight = $('.main-gallery .flickity-viewport').height();
		$('.main-gallery .gallery-cell').height(newHeight);
		$( window ).resize(function() {
			var newHeight = $('.main-gallery .flickity-viewport').height();
			$('.main-gallery .gallery-cell').height(newHeight);
		});	
	},

	/* 
	* Smooth Scroll Links
	*/
	initSmoothScroll = function()
	{
		smoothScroll.init({
		    selector: '[data-scroll]', // Selector for links (must be a valid CSS selector)
		    selectorHeader: '[data-scroll-header]', // Selector for fixed headers (must be a valid CSS selector)
		    speed: 400, // Integer. How fast to complete the scroll in milliseconds
		    easing: 'easeInOutCubic', // Easing pattern to use
		    offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
		    updateURL: true, // Boolean. If true, update the URL hash on scroll
		    callback: function ( anchor, toggle ) {} // Function to run after scrolling
		});
	},


	/* 
	* Initialize Flickity Instances
	*/
	initFlickity = function()
	{
		var flky = new Flickity( '.references-gallery', {
			// options, defaults listed
			accessibility: true,
			// enable keyboard navigation, pressing left & right keys 
			// autoPlay: 3000,
			// advances to the next cell
			// if true, default is 3 seconds
			// or set time between advances in milliseconds
			// i.e. `autoPlay: 1000` will advance every 1 second
			cellAlign: 'center',
			// alignment of cells, 'center', 'left', or 'right'
			// or a decimal 0-1, 0 is beginning (left) of container, 1 is end (right)
			cellSelector: undefined,
			// specify selector for cell elements
			contain: false,
			// will contain cells to container
			// so no excess scroll at beginning or end
			// has no effect if wrapAround is enabled
			draggable: true,
			// enables dragging & flicking
			freeScroll: false,
			// enables content to be freely scrolled and flicked
			// without aligning cells
			friction: 0.25,
			// smaller number = easier to flick farther
			initialIndex: 0,
			// zero-based index of the initial selected cell
			percentPosition: true,
			// sets positioning in percent values, rather than pixels
			// Enable if items have percent widths
			// Disable if items have pixel widths, like images
			prevNextButtons: true,
			// creates and enables buttons to click to previous & next cells
			pageDots: true,
			// create and enable page dots
			resize: true,
			// listens to window resize events to adjust size & positions
			rightToLeft: false,
			// enables right-to-left layout
			setGallerySize: true,
			// sets the height of gallery
			// disable if gallery already has height set with CSS
			watchCSS: false,
			// watches the content of :after of the element
			// activates if #element:after { content: 'flickity' }
			// IE8 and Android 2.3 do not support watching :after
			// set watch: 'fallbackOn' to enable for these browsers
			wrapAround: true,
			// at end of cells, wraps-around to first for infinite scrolling
			imagesLoaded: true
			});

		var flky = new Flickity( '.main-gallery', {
			// options, defaults listed
			accessibility: true,
			// enable keyboard navigation, pressing left & right keys 
			// autoPlay: 3000,
			// advances to the next cell
			// if true, default is 3 seconds
			// or set time between advances in milliseconds
			// i.e. `autoPlay: 1000` will advance every 1 second
			cellAlign: 'center',
			// alignment of cells, 'center', 'left', or 'right'
			// or a decimal 0-1, 0 is beginning (left) of container, 1 is end (right)
			cellSelector: undefined,
			// specify selector for cell elements
			contain: false,
			// will contain cells to container
			// so no excess scroll at beginning or end
			// has no effect if wrapAround is enabled
			draggable: true,
			// enables dragging & flicking
			freeScroll: false,
			// enables content to be freely scrolled and flicked
			// without aligning cells
			friction: 0.25,
			// smaller number = easier to flick farther
			initialIndex: 0,
			// zero-based index of the initial selected cell
			percentPosition: true,
			// sets positioning in percent values, rather than pixels
			// Enable if items have percent widths
			// Disable if items have pixel widths, like images
			prevNextButtons: true,
			// creates and enables buttons to click to previous & next cells
			pageDots: true,
			// create and enable page dots
			resize: true,
			// listens to window resize events to adjust size & positions
			rightToLeft: false,
			// enables right-to-left layout
			setGallerySize: true,
			// sets the height of gallery
			// disable if gallery already has height set with CSS
			watchCSS: false,
			// watches the content of :after of the element
			// activates if #element:after { content: 'flickity' }
			// IE8 and Android 2.3 do not support watching :after
			// set watch: 'fallbackOn' to enable for these browsers
			wrapAround: true,
			// at end of cells, wraps-around to first for infinite scrolling
			imagesLoaded: true
			});
	},

	/* 
	* For Tabs, linking into the tab/hash
	*/
	linkToTabHash = function()
	{		
		// Javascript to enable link to tab
		var url = document.location.toString();
		if (url.match('#')) {
		    $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
		    window.scrollTo(0, 0);
		} 

		// Change hash for page-reload
		$('.nav-tabs a').on('shown.bs.tab', function (e) {
		    window.location.hash = e.target.hash;
		    window.scrollTo(0, 0);
		})
		
	},

	svgAsImg = function () 
	{
  		return document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1");
	},

	ready = function() {
		pinHeader();
		scrollToTopArrow();
		setupRotator();
		heroMenuToggle();
		showSearch();
		initSkrollr();
		initVideo();
		initResponsiveVideo();
		initSmoothScroll();
		initFlickity();
		fixHeight();
		initIsotope();
		affixSideNav();

		$( window ).on( 'resize.go', initResponsiveVideo );
		$( window ).on( 'scroll.go', scrollToTopArrow );
	};
	
	return {
		ready: ready,
	};

})( jQuery, this );

jQuery( go.ready );

