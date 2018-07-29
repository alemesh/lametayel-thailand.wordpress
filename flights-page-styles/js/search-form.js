$( document ).ready(function () {
    $('#ajax_form').submit(function (event) {
        localStorage.removeItem('searchResult')
        var options = document.querySelectorAll('.attractions .custom-option.selection');
        var optionArray = [];
        for(var i = 0; i < options.length; i++) {
            var tmp = options[i].getAttribute('data-value')
            optionArray.push(tmp)
        }
        console.log(optionArray)
        var formData = {
            'action'      : 'search_attractions',
            'people'      : $('.people .custom-option.selection').data('value'),
            // 'attractions' : $('.attractions .custom-option.selection').data('value')
            'attractions' : optionArray
        }

        $.ajax({
            type      : 'POST',
            url       : settings.ajaxurl,
            data      : formData,
            dataType  : 'json',
            encode    : true,
        })
            .done( function( response ) { // response from the PHP action
                console.log(response)
                localStorage.setItem('searchResult', JSON.stringify(response.data))
                // window.location = '/search'
               window.location = '/?page_id=662439'

            })

            // something went wrong
            .fail( function() {
                console.log(settings.error )
            })

            // after all this time?
            .always( function() {
                event.target.reset();
            })

        event.preventDefault()
    })

})



//========== custom select =================
$(".custom-select").each(function() {
    var classes = $(this).attr("class"),
        id      = $(this).attr("id"),
        name    = $(this).attr("name");
    var template =  '<div class="' + classes + '">';
    template += '<span class="custom-select-trigger">' + $(this).attr("placeholder") + '</span>';
    template += '<div class="custom-options">';
    $(this).find("option").each(function() {
        template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
    });
    template += '</div></div>';

    $(this).wrap('<div class="custom-select-wrapper"></div>');
    $(this).hide();
    $(this).after(template);
});
$(".custom-option:first-of-type").hover(function() {
    $(this).parents(".custom-options").addClass("option-hover");
}, function() {
    $(this).parents(".custom-options").removeClass("option-hover");
});
$(".custom-select-trigger").on("click", function() {
    $('html').one('click',function() {
        // $(".custom-select").removeClass("opened");
        $(".custom-select-1").removeClass("opened");
        $(".custom-select-2").removeClass("opened");
        // $(".custom-select-3").removeClass("opened");
    });
    // $('.header').one('click',function() {
    //     $(".custom-select-3").removeClass("opened");
    // });



    $(this).parents(".custom-select").toggleClass("opened");
    event.stopPropagation();
});
$(".custom-option").on("click", function() {
    $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
    // $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
    $(this).parents(".custom-select-1 .custom-options").find(".custom-option").removeClass("selection");
    $(this).parents(".custom-select-2 .custom-options").find(".custom-option").removeClass("selection");
    $(this).toggleClass("selection");
    // $(this).parents(".custom-select").removeClass("opened");
    $(this).parents(".custom-select-1").removeClass("opened");
    $(this).parents(".custom-select-2").removeClass("opened");
    // $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());

    var SelectText = $(this).parents(".custom-select").find(".custom-select-trigger").text();
    var SelectText3 = $(this).parents(".custom-select-3").find(".custom-select-trigger").text();
    var SelectText2 = $(this).parents(".custom-select-2").find(".custom-select-trigger").text();
    var SelectText1 = $(this).parents(".custom-select-1").find(".custom-select-trigger").text();
    console.log(SelectText3);
    console.log(SelectText2);
    console.log(SelectText1);
    console.log(SelectText);

        $(this).parents(".custom-select-2").find(".custom-select-trigger").text($(this).text());
        $(this).parents(".custom-select-1").find(".custom-select-trigger").text($(this).text());

    if (SelectText3 === 'מעוניינים לשמוע על...'){
        $(this).parents(".custom-select-3").find(".custom-select-trigger").text($(this).text());
    }else{
        $(this).parents(".custom-select-3").find(".custom-select-trigger").text(SelectText + ',' + $(this).text());
    }


    // console.log($(this).parents(".custom-select").find(".custom-select-trigger").text())


});


//==========================================



//custome js
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