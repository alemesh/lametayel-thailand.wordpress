$( document ).ready(function () {
    $('#ajax_form').submit(function (event) {
        localStorage.removeItem('searchResult')
        var formData = {
            'action'      : 'search_attractions',
            'people'      : $('.people .custom-option.selection').data('value'),
            'attractions' : $('.attractions .custom-option.selection').data('value')
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