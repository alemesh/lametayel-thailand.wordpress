<?php


add_action( 'wp_enqueue_scripts', 'craftsandarts_child_enqueue_styles', 100);
function craftsandarts_child_enqueue_styles() {
    wp_enqueue_style( 'craftsandarts-parent', get_theme_file_uri('/style.css') );
}

//var_dump(get_stylesheet_directory()); die();
//var_dump(get_stylesheet_directory_uri()); die;
function lametayel_home_page_scripts_init(){

    if ( is_page_template('page-front-page.php') ) {
        wp_enqueue_style('lametayel_home-page_style_css', get_stylesheet_directory_uri() . '/home-page-styles/css/main.min.css');
    }
    if ( is_page_template('restaurants-page.php') ) {
        wp_enqueue_style('lametayel_restaurants-page_style_css', get_stylesheet_directory_uri() . '/restaurants-page-styles/css/main.min.css');
//        wp_enqueue_style('lametayel_restaurants-page_style_css', get_stylesheet_directory_uri() . '/restaurants-page-styles/css/restaurants-main.css');
    }

    if ( is_page_template('page-flights.php') || is_page_template('page-attractions.php') ||  is_page_template('search-attractions.php') || is_tax( 'destinations') || is_page_template('page-hotels.php') ) {
        wp_enqueue_style('lametayel_flights-page_style_css', get_stylesheet_directory_uri() . '/flights-page-styles/css/main.min.css');
    }

    if ( is_page_template('about-page.php') || is_tax( 'destinations') || is_singular('attraction') || is_singular('hotel') || is_archive() || is_singular('branch')) {
        wp_enqueue_style('lametayel_Thailand_all_page_styles_a_css', get_stylesheet_directory_uri() . '/Lametayel-Thailand-all-page-styles/css/main.min.a.css');
        wp_enqueue_style('lametayel_Thailand_all_page_styles_css', get_stylesheet_directory_uri() . '/Lametayel-Thailand-all-page-styles/css/main.min.css');
        wp_enqueue_style('lametayel_Thailand_all_page_custome_styles_css', get_stylesheet_directory_uri() . '/Lametayel-Thailand-all-page-styles/css/main-all.css');
    }









//    wp_enqueue_style('lametayel_home-main-page_style_css', get_stylesheet_directory_uri() . '/home-page-styles/css/home-main.css');
    wp_enqueue_style('lametayel_home-page_fontawesome_css', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css');
//<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
//
//    wp_enqueue_script('ronson_html5shiv_js', get_template_directory_uri() . '/js/html5shiv.js', array(), false, false);
//
    wp_deregister_script( 'jquery' );
//    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-2.1.1.min.js', array(), false, true);
//    wp_enqueue_script( 'jquery' );
//
//    wp_enqueue_script('ronson_main_js', get_template_directory_uri() . '/js/main.js', array(), false, true);
//
//    wp_register_script('ronson_maps_parameters_js', get_template_directory_uri() . '/js/maps_parameters.js', array(), false, true);
//    wp_enqueue_script('ronson_maps_parameters_js');
//
    if ( is_page_template('page-front-page.php') ) {
        wp_register_script('lametayel_home-page_scripts', get_stylesheet_directory_uri() . '/home-page-styles/js/scripts.min.js', array(), false, true);
        wp_enqueue_script('lametayel_home-page_scripts');
        wp_register_script('lametayel_home-page_form_script', get_stylesheet_directory_uri() . '/flights-page-styles/js/search-form.js', array(), false, true);
        wp_enqueue_script('lametayel_home-page_form_script');
        wp_localize_script( 'lametayel_home-page_form_script', 'settings', array(
            'ajaxurl'    => admin_url( 'admin-ajax.php' ),
            'error'      => __( 'Sorry, something went wrong. Please try again'),
        ) );
    }

    if ( is_page_template('search-attractions.php') ) {
        wp_register_script('lametayel_search-attractions_script', get_stylesheet_directory_uri() . '/flights-page-styles/js/search-result.js', array(), false, true);
        wp_enqueue_script('lametayel_search-attractions_script');
    }



    if ( is_page_template('restaurants-page.php') ) {
        wp_register_script('lametayel_restaurants-page_scripts', get_stylesheet_directory_uri() . '/restaurants-page-styles/js/scripts.min.js', array(), false, true);
        wp_enqueue_script('lametayel_restaurants-page_scripts');
//        wp_register_script('lametayel_restaurants-page_googlemaps_css', get_stylesheet_directory_uri() . 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAW6GlD57glHFIOUZGbgUmqv06BJyW2q3o&callback=initMap', array(), false, true);
//        wp_enqueue_script('lametayel_restaurants-page_googlemaps_css');
    }
    if ( is_page_template('page-flights.php') || is_page_template('page-attractions.php') || is_tax( 'destinations') || is_page_template('page-hotels.php') ) {
        wp_register_script('lametayel_flights-page_scripts', get_stylesheet_directory_uri() . '/flights-page-styles/js/scripts.min.js', array(), false, true);
        wp_enqueue_script('lametayel_flights-page_scripts');
    }

    if ( is_page_template('about-page.php')|| is_tax( 'destinations') || is_singular('attraction') || is_singular('hotel') || is_archive() || is_singular('branch')) {
        wp_register_script('lametayel_Thailand_all_page_scripts', get_stylesheet_directory_uri() . '/Lametayel-Thailand-all-page-styles/js/scripts.min.js', array(), false, true);
        wp_enqueue_script('lametayel_Thailand_all_page_scripts');
    }
//    wp_register_script('themajax_scripts', get_template_directory_uri() . '/js/themajax.js', array(), false, true);
//    wp_enqueue_script('themajax_scripts');


}
add_action('wp_enqueue_scripts', 'lametayel_home_page_scripts_init');

function podium_child_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Instagram', 'podium' ),
        'id'            => 'instagram-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action( 'widgets_init', 'podium_child_widgets_init' );

add_image_size( 'thailand-square-2', 437, 246, true );
add_image_size( 'thailand-square-3', 302, 172, true );



add_action( 'wp_ajax_nopriv_search_attractions',  'search_attractions');
add_action( 'wp_ajax_search_attractions', 'search_attractions'  );

function search_attractions() {
    $errors = array();
    $data = array();
    $categories = array();
    $parents = array();

    $taxonomy_name = 'destinations';
    $people = get_term_by('name', 'People', $taxonomy_name)->term_id;
    $attractions = get_term_by('name', 'Attractions', $taxonomy_name)->term_id;
    array_push($parents,  $people, $attractions, 0);

    if(empty($_POST['attractions']))
        $errors['attractions'] = 'Attractions is required';

    if(!empty($errors)) {
        $data['success'] = false;
        $data['errors'] = $errors;
    } else {
        $terms = array();
        array_push($terms, intval($_POST['attractions']));
        if(!empty($_POST['people']))
            array_push($terms, intval($_POST['people']));
        $args = array(
            'post_type' => 'attraction',
            'tax_query' => array(
                array(
                    'taxonomy' => 'destinations',
                    'field' => 'term_id',
                    'terms' => $terms,
                    'operator' => 'AND',
                )
            )
        );

        $query = new WP_Query($args);
        $posts = $query->posts;

        if(!empty($_POST['attractions'])) {
            if (!empty($posts)) {
                foreach ($posts as $post) {
                    $cat = wp_get_post_terms($post->ID, $taxonomy_name);
                    foreach ($cat as $c) {
                        if(!in_array(intval($c->parent), $parents)&& !in_array(intval($c->term_id), $parents)) {
                            $city = get_term_by('id', $c->parent, $taxonomy_name);
                            $categories[$city->term_id] = $city->name;
                        }
                    }
                }

                $finale = array();
                foreach ($categories as $key => $val) {
                    $posts_content = array();
                    foreach ($posts as $post) {
                        $cat = wp_get_post_terms($post->ID, $taxonomy_name);
                        foreach ($cat as $c) {
                            if (!in_array(intval($c->parent), $parents) && !in_array(intval($c->term_id), $parents)) {
                                if($key == $c->parent) {
                                    $single_post = array();
                                    $post_image = get_the_post_thumbnail_url($post->ID);
                                    array_push($single_post, $post, $post_image);
                                    array_push($posts_content, $single_post);
                                }
                            }
                        }
                    }
                    $finale[$key] = [$val, $posts_content];
                }
                $data['attraction'] = get_term_by('id', intval($_POST['attractions']), $taxonomy_name)->name;
                $data['categories'] = $categories;
                $data['success'] = true;
                $data['posts'] = $finale;
                wp_send_json_success(__($data));
            }
        } elseif (empty($_POST['attractions'])) {
            if (!empty($posts)) {
                $cities = array();
                $attractions_array = array();
                foreach ($posts as $post) {
                    $cat = wp_get_post_terms($post->ID, $taxonomy_name);
                    foreach ($cat as $c) {
                        if (!in_array(intval($c->parent), $parents) && !in_array(intval($c->term_id), $parents)) {
                            $city = get_term_by('id', $c->parent, $taxonomy_name);
                            $cities[$city->term_id] = $city->name;
                        }
                        if($c->parent == $attractions) {
                            $attractions_array[$c->term_id] = $c->name;
                        }
                    }
                }

                $finale_attr = array();
                $finale = array();
                foreach ($cities as $key => $city) {
                    $city_content = array();
                    foreach ($posts as $post) {
                        $post_image = get_the_post_thumbnail_url($post->ID);
                        $post_content = array();
                        array_push($post_content, $post, $post_image);
                        $cats = wp_get_post_terms($post->ID, $taxonomy_name);
                        foreach ($cats as $ct) {
                            if ($ct->parent == $key) {
                                foreach ($attractions_array as $k => $attr) {
                                    $attr_cont = array();
                                    foreach ($cats as $c) {
                                        if ($c->term_id == $k) {
                                            $single_post = array();
                                            array_push($single_post, $post_content);
                                            array_push($attr_cont, $attr, $single_post);
                                        }
                                    }
                                    if(!empty($attr_cont))
                                        $finale_attr[$k] = $attr_cont;
                                }
                            }
                        }
                    }
                    array_push($city_content, $city, $finale_attr);
                    $finale[$key] = $city_content;
                }

                $data['cities'] = array_unique($cities);
                $data['attractions'] = array_unique($attractions_array);
                $data['success'] = true;
                $data['posts'] = $finale;
                wp_send_json_success(__($data));
            }
        } else {
            wp_send_json_error();
        }
    }
    wp_reset_postdata();
    wp_die();
}
