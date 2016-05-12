/* global screenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

( function( $ ) {
	var $body, $window, $sidebar, adminbarOffset, top = false,
	    bottom = false, windowWidth, windowHeight, lastWindowPos = 0,
	    topOffset = 0, bodyHeight, sidebarHeight, resizeTimer;

	// Add dropdown toggle that display child menu items.
	$( '.secondary-navigation .page_item_has_children > a, .secondary-navigation .menu-item-has-children > a' ).after( '<button class="dropdown-toggle" aria-expanded="false">' + screenReaderText.expand + '</button>' );
	// Add dropdown toggle that display child menu items.
	$( '.main-navigation .page_item_has_children > a, .main-navigation .menu-item-has-children > a' ).after( '<button class="dropdown-toggle" aria-expanded="false">' + screenReaderText.expand + '</button>' );

	$( '.dropdown-toggle' ).click( function( e ) {
		var _this = $( this );
		e.preventDefault();
		_this.toggleClass( 'toggle-on' );
		_this.next( '.children, .sub-menu' ).toggleClass( 'toggled-on' );
		_this.attr( 'aria-expanded', _this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
		_this.html( _this.html() === screenReaderText.expand ? screenReaderText.collapse : screenReaderText.expand );
	} );
	
	var vh = $(window).height();
	
	var fhh = $('.featured-post-info').height();

	var wwidth = $(window).width();

	var lswx = $('.left-sidebar-wrapper').outerWidth(); 
	
	var cwx = $('.site-content').outerWidth(); 
	
	var rswx = $('.right-sidebar-wrapper').outerWidth();

	var swxxx = $('.site').width();
	
	var cta_width = $('.so-widget-quidus-cta').outerWidth();
	
	$('.CTA-wrapper').css('left', cta_width / 2);
	
	var ttlw = swxxx - (lswx + cwx + rswx);
	
	if ((wwidth >= 1088)) {
	
		$('.2_column_lor').css('transform', 'translateX(' + ttlw / 2 + 'px)');
	
	}
	 
	$('.parallax-wrapper').css('height', vh);
	
	$('.quidus-featured-post, .featured-post-inner, .quidus-featured-post .featured-post-image-wrapper').css('min-height', fhh * 1.75);
	
	var waypoints = $('.entry-content .panel-grid:nth-child(2), .home.blog .site').waypoint(function(direction) {
	  $('.menu-holder').toggleClass('menu-offset');
	});
	

	// Enable menu toggle for small screens.
	( function() {
		var secondary = $( '#secondary, .float-right' ), button, menu, widgets, social, search, cart;
		if ( ! secondary ) {
			return;
		}

		button = $( '.site-branding' ).find( '.secondary-toggle' );
		if ( ! button ) {
			return;
		}

		// Hide button if there are no widgets and the menus are missing or empty.
		menu    = secondary.find( '.nav-menu' );
		widgets = secondary.find( '#widget-area' );
		social  = secondary.find( '.my-social' );
		search  = secondary.find( '.search-expand-inner' );
		cart  = secondary.find( '.menu-cart-wrapper' );
		if ( ! widgets.length && ! search.length && ! cart.length && ! social.length && ( ! menu || ! menu.children().length ) ) {
			button.hide();
			return;
		}

		button.on( 'click.quidus', function() {
			secondary.toggleClass( 'toggled-on' );
			secondary.trigger( 'resize' );
			$( this ).toggleClass( 'toggled-on' );
		} );
	} )();

} )( jQuery );
