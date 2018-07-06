$( document ).ready(function () {
    var result = JSON.parse(localStorage.getItem('searchResult'))
    if(!result.attractions){
        for(var key in result.posts) {
            var item_template = ' <ul class="items city-' + key + '"><h3 class="color-red">'+ result.attraction +'</h3></ul>'
            $('.search-conten-section .main-holder .items-wraper').prepend('<div class="button-block"><a href="" class="button"><span>' + result.posts[key][0] + '</span></a></div>' + item_template )
            for (var i = 0; i < result.posts[key][1].length; i++) {
                $('.search-conten-section .main-holder .items-wraper ul.items.city-' + key ).append(' <li class="item">\n' +
                    '                        <div class="wrap-item color-border-red">\n' +
                    '                            <a href="#" class="wrap-image">\n' +
                    '                                <span class="image" style="background-image: url('+ result.posts[key][1][i][1] +')"></span>\n' +
                    '                            </a>\n' +
                    '                            <div class="text-block">\n' +
                    '                                <h4>'+ result.posts[key][1][i][0].post_title +'</h4>\n' +
                    '                                <p>'+ result.posts[key][1][i][0].post_excerpt +'</p>\n' +
                    '                                <a href="'+ result.posts[key][1][i][0].guid +'">קרא עוד</a>\n' +
                    '                            </div>\n' +
                    '                        </div>\n' +
                    '                    </li>')
            }
        }
    } else {
        for(var k in result.posts) {
            $('.search-conten-section .main-holder .items-wraper').append('<div class="button-block"><a href="" class="button"><span>' + result.posts[k][0] + '</span></a></div>')
            for(var attr in result.posts[k][1]) {

                var item_template = ' <ul class="items city-'+ k +' attr-' + attr + '"><h3 class="color-red">'+ result.posts[k][1][attr][0] +'</h3></ul>'
                $('.search-conten-section .main-holder .items-wraper ').append(item_template)
                for(var i = 0; i < result.posts[k][1][attr][1].length; i++) {
                    console.log(result.posts[k][1][attr][1][i])
                    $('.search-conten-section .main-holder .items-wraper ul.items.city-'+ k +'.attr-' + attr ).append(' <li class="item">\n' +
                        '                        <div class="wrap-item color-border-red">\n' +
                        '                            <a href="#" class="wrap-image">\n' +
                        '                                <span class="image" style="background-image: url('+ result.posts[k][1][attr][1][i][1] +')"></span>\n' +
                        '                            </a>\n' +
                        '                            <div class="text-block">\n' +
                        '                                <h4>'+ result.posts[k][1][attr][1][i][0].post_title +'</h4>\n' +
                        '                                <p>'+ result.posts[k][1][attr][1][i][0].post_excerpt +'</p>\n' +
                        '                                <a href="'+ result.posts[k][1][attr][1][i][0].guid +'">קרא עוד</a>\n' +
                        '                            </div>\n' +
                        '                        </div>\n' +
                        '                    </li>')
                }
            }
            }
        }
});