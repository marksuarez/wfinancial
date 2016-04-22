(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		var flky = new Flickity( '.main-gallery', {
			// options, defaults listed
			accessibility: true,
			// enable keyboard navigation, pressing left & right keys 
			autoPlay: 3000,
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
	});

	$(function () {
		
		'use strict';

		var flky = new Flickity( '.references-gallery', {
			// options, defaults listed
			accessibility: true,
			// enable keyboard navigation, pressing left & right keys 
			autoPlay: 3000,
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
	});
	
	$( function () {
		smoothScroll.init({
		    selector: '[data-scroll]', // Selector for links (must be a valid CSS selector)
		    selectorHeader: '[data-scroll-header]', // Selector for fixed headers (must be a valid CSS selector)
		    speed: 400, // Integer. How fast to complete the scroll in milliseconds
		    easing: 'easeInOutCubic', // Easing pattern to use
		    offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
		    updateURL: true, // Boolean. If true, update the URL hash on scroll
		    callback: function ( anchor, toggle ) {} // Function to run after scrolling
		});
	});


	$( function () {
	    $('.pressFilters li').each(function(){
	        var searchVal = $(this).children().text().replace(/\s+/, "").toLowerCase();
	        $(this).children().addClass(searchVal);
	    });
	     $('.pressFilters li').first().removeClass().addClass('all');
	     // Create the dropdown base
	      $("<select id='filter-select' />").appendTo(".pressFilters");
	      
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

	});
	



	$( function (){
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
	});


	$( function (){
		
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
		

	});

	$( function (){
		$('.buttonsearch').click(function(event){
			event.preventDefault();
  			$('#formsearch').slideToggle( "fast",function(){});
			$('#searchbox').focus();
			$('.openclosesearch').toggle();
		});
	});

	function svgasimg() {
  		return document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1");
	}


})(jQuery, this);
