$('.menu-icon').click(function(){
    $('.thailand_mobile_header_wrapper .title-bar').toggleClass('menu-active');
});

$( function() {

    $( window ).scroll( function() {
        // console.log($( this ).scrollTop());
        if ( $( this ).scrollTop() > 80 ) {
            $( '.thailand_mobile_header_wrapper .title-bar' ).addClass( "myClassBgColor" );
        } else {
            $( '.thailand_mobile_header_wrapper .title-bar' ).removeClass( "myClassBgColor" );
        }
    } );

} );