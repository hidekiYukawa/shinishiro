/**
 * Created by shinishirotomonaga on 07/08/2017.
 */



/*

 function ( $ ) {
 var keys = {tab: 9, enter: 13, esc: 27, left: 37, up: 38, right: 39, down: 40}
 var defaults = {
 throttle: 1,
 renderItem: defaultRenderItem,
 noResults: defaultNoResults,
 regexpMatcher: defaultRegexpMatcher
 }

 $.fn.zelect = function ( opts ) {
 opts = $.extend( {}, defaults, opts )

 return this.each( function () {

 if ( $( this ).parent().length === 0 ) throw new Error( '<select> element must have a parent' )
 var $select = $( this ).hide().data( 'zelectItem', selectItem ).data( 'refreshItem', refreshItem ).data( 'reset', reset )

 var $zelect = $( '<div>' ).addClass( 'zelect' )
 var $selected = $( '<div>' ).addClass( 'zelected' )
 var $dropdown = $( '<div>' ).addClass( 'dropdown' ).hide()
 var $noResults = $( '<div>' ).addClass( 'no-results' )
 var $search = $( '<input>' ).addClass( 'zearch' )
 var $list = $( '<ol>' )
 var listNavigator = navigable( $list )

 var itemHandler = opts.loader
 ? infiniteScroll( $list, opts.loader, appendItem )
 : selectBased( $select, $list, opts.regexpMatcher, appendItem )

 var filter = throttled( opts.throttle, function () {
 var term = searchTerm()
 itemHandler.load( term, function () {
 checkResults( term )
 } )
 } )

 $search.keyup( function ( e ) {

 switch ( e.which ) {
 case keys.esc:
 hide();
 return;
 case keys.up:
 return;
 case keys.down:
 return;
 case keys.enter:
 var curr = listNavigator.current().data( 'zelect-item' )
 if ( curr ) selectItem( curr )
 return
 default:
 filter()
 }
 } )
 $search.keydown( function ( e ) {
 switch ( e.which ) {
 case keys.tab:
 e.preventDefault();
 hide();
 return;
 case keys.up:
 e.preventDefault();
 listNavigator.prev();
 return;
 case keys.down:
 e.preventDefault();
 listNavigator.next();
 return;
 }
 } )

 $list.on( 'click', 'li', function () {
 selectItem( $( this ).data( 'zelect-item' ) )
 // console.log("selectItem: " + $(this).data('zelect-item').value)
 } )
 $zelect.mouseenter( function () {
 $zelect.addClass( 'hover' )
 console.log("HOVER ON SELECT :: current section level: " + getSectionLevel());
 // if (getSectionLevel() == 1) {
 //     $('#clientInfo_next')
 //         .animate({
 //             marginTop: "21em"
 //         }, 600, "linear");
 // }
 } )
 $zelect.mouseleave( function () {
 $zelect.removeClass( 'hover' )
 // if (getSectionLevel() == 1) {
 //     $('#clientInfo_next')
 //         .animate({
 //             marginTop: "14em"
 //         }, 600, "linear");
 // }
 // hide()
 } )
 $zelect.attr( "tabindex", $select.attr( "tabindex" ) )
 $zelect.blur( function () {
 if ( !$zelect.hasClass( 'hover' ) ) hide()
 } )
 $search.blur( function () {
 if ( !$zelect.hasClass( 'hover' ) ) hide()
 } )

 $selected.click( toggle )

 $zelect.insertAfter( $select )
 .append( $selected )
 .append( $dropdown.append( $list ) )


 itemHandler.load( $search.val(), function () {
 initialSelection( true )
 $select.trigger( 'ready' )
 } )

 function selectItem( item, triggerChange ) {

 console.log( "$dropdownID: " + $zelect.parent( 'div' ).attr( "id" ) )
 if ( $zelect.parent( 'div' ).attr( "id" ) == 'omvormerOptions' ) {
 if ( opts.renderItem( item ).indexOf( "Solar Edge" ) == -1 ) {
 if ( solarEdgePanel ) {
 showMSGwarning( "<i>Alleen Solar Edge omvormers mogelijk bij huidig paneeltype</i>" );

 return false;
 }
 }
 }
 console.log( "opts.renderitem: " + opts.renderItem( item ) );
 renderContent( $selected, opts.renderItem( item ) ).removeClass( 'placeholder' )
 hide()
 if ( item && item.value !== undefined ) $select.val( item.value )
 $select.data( 'zelected', item )
 if ( triggerChange == null || triggerChange === true ) $select.trigger( 'change', item )
 }
 */