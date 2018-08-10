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



$(document).on('submit', '#ajax_form_restouran', function (e) {
    e.preventDefault();
    var ajaxserialize = $(this).serialize();
    var action = 'sendermail';

    $.ajax({
        url: '/wp-admin/admin-ajax.php',
        method: 'post',
        data: {
            action: action,
            search: {
                formserialize: ajaxserialize,
            }
        },
        success: function (response) {
            console.log(response);
            window.location.href = '/';
        },
        error: function ($e) {
            console.log($e);
        }
    });
});