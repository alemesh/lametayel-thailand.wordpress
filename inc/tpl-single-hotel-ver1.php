<?php
$current_ttl = get_the_title();

?>
<div id="content" class="site-content row single_hotel_page old-design">







    <div class="main-content">
        <div class="up_img up_img-for-hotelPage">
            <div class="text_in_up_img"><?php the_title();?></div>
            <img class="up_img_tail img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/Lametayel-Thailand-all-page-styles/img/corner-img.png">
            <?php $rating = get_field('rating'); ?>
            <div class="rating-hotels-main">
                <?php
                for($i=0; $i<$rating; $i++){
                    if ( $rating == '3.5' && $i == $rating - 0.5 || $rating == '4.5' && $i == $rating - 0.5){ ?>
                        <i class="fas fa-star-half" aria-hidden="true"></i>
                    <?php }else{?>
                        <i class="fas fa-star" aria-hidden="true"></i>
                    <?php }
                } ?>
            </div>
        </div>

        <div class="content-body">
            <div class="right-text-body">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php if( get_field('top_page_desc')){ ?>
                            <?php echo  get_field('top_page_desc'); //TODO about description?>
<!--                            <span><a href="#about">להרחבה על המלון</a></span>-->
                            <span><a href="#about"><?php echo esc_html_e( 'For more information about the hotel', 'podium' )?></a></span>
                    <?php }?>


<!--                    --><?php //get_template_part( 'directives/content', 'top_section_tabs' ); //TODO get slider?>
                    <?php

                    if ( !isset( $id_to_send ) ) {
                        $id_to_send = '';
                    }
                    if (get_field('img_slider', $id_to_send) || get_field('map', $id_to_send) || get_field('video', $id_to_send)){?>
                        <div class="row collapse destination_top_tabs">
                            <ul class="nav-under-slider tabs" id="thailand_top_tabs" data-tabs>
                                <?php if(get_field('img_slider', $id_to_send)){?>
                                    <li class="tabs-title is-active"><a href="#panel1v" aria-selected="true"><?php echo esc_html_e( 'Photos', 'podium' )?></a></li><!--TODO tabs-->
                                <?php } ?>
                                <?php if(get_field('map', $id_to_send)){?>
                                    <li class="tabs-title"><a href="#panel2v"><?php echo esc_html_e( 'a map', 'podium' )?></a></li><!--TODO tabs-->
                                <?php } ?>
                                <?php if(get_field('video', $id_to_send)){?>
                                    <li class="tabs-title"><a href="#panel3v"><?php echo esc_html_e( 'video', 'podium' )?></a></li><!--TODO tabs-->
                                <?php } ?>
                            </ul>

                            <div class="tabs-content" data-tabs-content="thailand_top_tabs">
                                <?php $images = get_field('img_slider' ,$id_to_send);
                                if( $images ){ ?>
                                    <div class="tabs-panel is-active" id="panel1v">
                                        <div class="pages_slider_wrapper">
                                            <div class="pages_slider">
                                                <?php foreach( $images as $image ): ?>
                                                    <div>
                                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><!--TODO slider-->
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <div class="pages_slider_nav_wrapper">
                                            <div class="pages_slider_nav">
                                                <?php foreach( $images as $image ): ?>
                                                    <div>
                                                        <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" /><!--TODO slider-->
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <div class="slider_btns">
                                                <a class="prev"><i class="fa fa-angle-right"></i></a>
                                                <a class="next"><i class="fa fa-angle-left"></i></a>
                                            </div>
                                        </div>

                                    </div>
                                <?php } ?>
                                <?php if(get_field('map', $id_to_send)){?>
                                    <div class="tabs-panel" id="panel2v">
                                        <?php $address =get_field('map', $id_to_send);?>
                                        <iframe style="height: 640px;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo urlencode($address); ?>&key=AIzaSyC1qYU6lasflVRRHQOFdkLgv0WvkAfJvn0"></iframe><!--TODO google map-->
                                    </div>
                                <?php } ?>
                                <?php if(get_field('video', $id_to_send)){?>
                                    <div class="tabs-panel" id="panel3v">
                                        <div class="video_outer_wrapper">
                                            <div class="inner">
                                                <?php the_field('video', $id_to_send);?><!--TODO youtube video-->
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>

<!--                    <a class="contact_lnk_hotel_page hide-for-medium" href="#sidebar">צרו קשר</a>-->
                    <a class="contact_lnk_hotel_page hide-for-medium" href="#sidebar"><?php echo esc_html_e( 'Contact', 'podium' )?></a>

                <?php endwhile; // End of the loop. ?>


                <div class="tabs-for-main-text-hotels-single">
                    <ul class="tabs nav nav-tabs tabs-for-text" data-tabs id="single_hotel_description_tabs">
                        <?php if(get_field('desc')){ ?>
<!--                            <li class="tabs-title is-active nav-item"><a href="#panel1" aria-selected="true">תאור</a></li>-->
                            <li class="tabs-title is-active nav-item"><a href="#panel1" aria-selected="true"><?php echo esc_html_e( 'description', 'podium' )?></a></li>
                        <?php } ?>
                        <?php if(get_field('hotel_amenities')){ ?>
<!--                            <li class="tabs-title"><a href="#panel2">מאפייני המלון</a></li>-->
                            <li class="tabs-title"><a href="#panel2"><?php echo esc_html_e( 'Hotel Features', 'podium' )?></a></li>
                        <?php } ?>
                        <?php if( have_rows('recomendations') ): ?>
<!--                            <li class="tabs-title"><a href="#panel3">המלצות</a></li>-->
                            <li class="tabs-title"><a href="#panel3"><?php echo esc_html_e( 'Recommendations', 'podium' )?></a></li>
                        <?php endif; ?>
                        <?php if( have_rows('room_galleries') ): ?>
<!--                            <li class="tabs-title"><a href="#panel4">חדרים</a></li>-->
                            <li class="tabs-title"><a href="#panel4"><?php echo esc_html_e( 'Rooms', 'podium' )?></a></li>
                        <?php endif; ?>
                    </ul>
                    <div class="tabs-content tabs_single_hotel_description" data-tabs-content="single_hotel_description_tabs">
                        <?php if(get_field('desc')){ ?>
                            <div class="tabs-panel is-active" id="panel1">
                                <?php the_field('desc'); ?>
                            </div>
                        <?php } ?>
                        <?php if(get_field('hotel_amenities')){ ?>
                            <div class="tabs-panel amenities" id="panel2">
                                <?php
                                $field = get_field_object('hotel_amenities');
                                $value = $field['value'];
                                $choices = $field['choices'];
                                if( $value ): ?>
<!--                                    <h3>מתקנים</h3>-->
                                    <h3><?php echo esc_html_e( 'Facilities', 'podium' )?></h3>
                                    <ul class="list">
                                        <?php foreach( $value as $v ): ?>
                                            <li>
                                                <i class="fa fa-check" aria-hidden="true"></i>
                                                <?php echo $choices[ $v ]; ?>
                                            </li>
                                        <?php endforeach; ?>
                                        <?php
                                        if( have_rows('additional_hotel_amenities') ): ?>
                                            <?php while ( have_rows('additional_hotel_amenities') ) : the_row(); ?>
                                                <?php if(get_sub_field('amenity')){ ?>
                                                    <li><i class="fa fa-check" aria-hidden="true"></i> <?php echo get_sub_field('amenity');?></li>
                                                <?php }?>
                                            <?php endwhile; ?>
                                        <?php endif;?>
                                    </ul>
                                <?php endif; ?>
                                <?php if(get_field('free_internet')){ ?>
<!--                                    <p class="free_intenet"><i class="fa fa-check" aria-hidden="true"></i> חיבור לאינטרנט אלחוטי חינם</p>-->
                                    <p class="free_intenet"><i class="fa fa-check" aria-hidden="true"></i> <?php echo esc_html_e( 'Free wireless internet connection', 'podium' )?></p>
                                <?php } ?>
<!--                                <h3>שימו לב</h3>-->
                                <h3><?php echo esc_html_e( 'Pay attention', 'podium' )?></h3>
<!--                                <p class="notice">מתקני המלון ותיאור המלון התקבלו מהמלון והינם באחריותו הבלעדית של המלון. חלק מהשירותים ניתנים בתשלום ע"י המלון ויכולים להשתנות ללא הודעה מוקדמת.</p>-->
                                <p class="notice"><?php echo esc_html_e( 'Information about this property has been sent to us by the property itself. Some of the services the property has to offer are provided at a fee and can change with no notice.', 'podium' )?></p>
                            </div>
                        <?php } ?>
                        <?php if( have_rows('recomendations') ): ?>
                            <div class="tabs-panel recommendations" id="panel3">
                                <?php while ( have_rows('recomendations') ) : the_row(); ?>
                                    <div class="recommendation_block">
                                        <?php if(get_sub_field('recommendation')){ ?>
                                            <p><?php echo get_sub_field('recommendation');?></p>
                                        <?php }?>
                                        <?php if(get_sub_field('name')){ ?>
                                            <p class="name"><?php echo get_sub_field('name');?></p>
                                        <?php }?>
                                        <div class="divider"></div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif;?>
                        <?php if( have_rows('room_galleries') ): $y = 0; $room_count = 0; ?>
                            <div class="tabs-panel room_galleries" id="panel4">
                                <div class="row">
                                    <?php while ( have_rows('room_galleries') ) : the_row(); $y++; ?>
                                    <div class="small-12 medium-4 columns end">
                                        <div class="gallery_box">
                                            <?php
                                            $images = get_sub_field('gallery');
                                            if( $images ):
                                                $i = 0; ?>
                                                <a data-open="gallery_model<?php echo $y; ?>">
                                                    <div class="image">
                                                        <img src="<?php echo $images[0]['sizes']['thailand-thumbnail']; ?>" alt="<?php echo $images[0]['alt']; ?>" />
<!--                                                        <span class="overlay_txt">לגלריה המלאה</span>-->
                                                        <span class="overlay_txt"><?php echo esc_html_e( 'To the full gallery', 'podium' )?></span>
                                                    </div>
                                                </a>
                                                <div class="reveal single_hotel_gallery_reveal large" id="gallery_model<?php echo $y; ?>" data-reveal>
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <h3 class="room_ttl"><?php echo esc_html_e( 'Room contents', 'podium' )?>
                                                                <?php if(get_sub_field('room_name')){ ?>
                                                                    <span class="name"><?php echo get_sub_field('room_name');?></span>
                                                                <?php }?>
                                                                <?php if(get_sub_field('room_size')){ ?>
                                                                    <span class="size"><?php echo get_sub_field('room_size');?> <?php echo esc_html_e( 'Mr', 'podium' )?></span>
                                                                <?php }?>
                                                            </h3>
                                                        </div>
                                                        <div class="small-12 medium-12 large-6 columns">
                                                            <?php
                                                            $field = get_sub_field_object('room_amenities');
                                                            $value = $field['value'];
                                                            $choices = $field['choices'];
                                                            if( $value ){ ?>
                                                                <div class="amenities">
                                                                    <ul class="list">
                                                                        <?php foreach( $value as $v ): ?>
                                                                            <li>
                                                                                <i class="fa fa-check" aria-hidden="true"></i>
                                                                                <?php echo $choices[ $v ]; ?>
                                                                            </li>
                                                                        <?php endforeach; ?>
                                                                        <?php
                                                                        if( have_rows('additional_room_amenities') ): ?>
                                                                            <?php while ( have_rows('additional_room_amenities') ) : the_row(); ?>
                                                                                <?php if(get_sub_field('amenity')){ ?>
                                                                                    <li><i class="fa fa-check" aria-hidden="true"></i> <?php echo get_sub_field('amenity');?></li>
                                                                                <?php }?>
                                                                            <?php endwhile; ?>
                                                                        <?php endif;?>
                                                                    </ul>
                                                                </div>
                                                            <?php }?>
                                                        </div>
                                                        <div class="small-12 medium-12 large-6 columns text-left">
                                                            <div class="single_hotel_gallery_imgs_wrapper">
                                                                <div class="single_hotel_gallery_imgs" id="gallery_slider<?php echo $y; ?>">
                                                                    <?php foreach( $images as $image ): ?>
                                                                        <div class="image">
                                                                            <img src="<?php echo $image['sizes']['thailand-thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                                                                        </div>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                                <div class="slider_btns">
                                                                    <a class="prev_hotel" id="prev_hotel<?php echo $y; ?>"><i class="fa fa-angle-right"></i></a>
                                                                    <a class="next_hotel" id="next_hotel<?php echo $y; ?>"><i class="fa fa-angle-left"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="close-button" data-close aria-label="Close modal" type="button">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if(get_sub_field('room_name')){ ?>
                                                <p class="name"><?php echo get_sub_field('room_name');?></p>
                                            <?php }?>
                                            <?php if(get_sub_field('room_size')){ ?>
                                                <p class="size"> // <?php echo get_sub_field('room_size');?> מ"ר</p>
                                            <?php }?>
                                        </div>
                                    </div>
                                    <?php

                                    if ( $room_count++ === 2 ) {
                                    ?>
                                </div>
                                <div class="row">
                                    <?php
                                    $room_count = 0;
                                    }

                                    endwhile; ?>
                                </div>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>


            <div class="left-form-body">
                <div class="bredcrumbs hidden-xs">
                    <?php if(function_exists('bcn_display')){ ?>
                        <p id="breadcrumbs" vocab="https://schema.org/" typeof="BreadcrumbList"> <?php bcn_display(); ?></p>
                    <?php }?>
                </div>
                <?php include(locate_template( 'directives/left-sidebar-form.php' )); ?>
                <div class="left-sidebar-text">
                    <?php if(get_field('txt_under_form', 'option')){ ?>
                        <?php echo get_field('txt_under_form', 'option'); ?>
                    <?php	}?>
                </div>
            </div>

        </div>
    </div>


</div>


    <div class="main_low_box">
        <?php //get connected destination

        $term_list = wp_get_post_terms($post->ID, 'destinations');
        foreach ($term_list as $term){
            if($term->parent != 0){
                $current_cat = $term;
            }
        }
        $parent_term = get_term( $current_cat->parent, 'destinations' );
        $termchildren = get_term_children( $parent_term->term_id, 'destinations' );
        foreach ( $termchildren as $child ) {
            $term = get_term_by( 'id', $child, 'destinations' );
            $type = get_field('type_destination', 'destinations_'.$term->term_id);
            if($type === 'attraction'){
                $all_attraction_lnk = get_term_link( $child, 'destinations' );
            }
            if($type === 'hotel'){
                $all_hotels_lnk = get_term_link( $child, 'destinations' );
            }
        }
        ?>
        <?php //recommended hotel block
        $text_item2 = __( 'More recommended hotels in ', 'podium' );
        $section_var = array(
            'repeaterName' => 'recommended_hotels',
            'subFieldName' => 'hotel',
            'id' => get_the_ID(),
            'section_ttl' => $text_item2. $parent_term->name,
            'section_ttl_lnk' => $all_hotels_lnk,
        );
//        include(locate_template('directives/posts_section.php')); ?>
        <?php //print posts section
        if( have_rows($section_var['repeaterName'], $section_var['id']) ){ ?>
        <div class="content_wrapper">
            <span class="first_text_in_low_box"><?php echo $section_var['section_ttl']; ?></span>
            <?php if($section_var['section_ttl_lnk']){ ?>
            <div class="text_in_middle_img"><a href="<?php echo $section_var['section_ttl_lnk'];?>" class="blue_lnk"><?php echo esc_html_e( 'Everything', 'podium' )?></a></div>
            <div class="just_line_in_low_box"></div>
            <?php }?>



            <div class="content mb0-for-page-hotels-single" data-equalizer>
                        <?php
                        while ( have_rows($section_var['repeaterName'], $section_var['id']) ) : the_row();
                            $post_object1 = get_sub_field($section_var['subFieldName']);
                            if( $post_object1 ){
                                $post = $post_object1;
                                setup_postdata( $post );
                                ?>

                                <a href="<?php echo get_the_permalink();?>" class="content-card">
                                    <div class="card-wrapper">
                                        <div class="img_in_low_box">
                                            <div class="star_icons">
                                                <div class="wrapper-star-icons">
                                                    <?php
                                                    for($i=0; $i<$rating; $i++){
                                                        if ( $rating == '3.5' && $i == $rating - 0.5 || $rating == '4.5' && $i == $rating - 0.5){ ?>
                                                            <i class="fas fa-star-half star_icon" aria-hidden="true"></i>
                                                        <?php }else{?>
                                                            <i class="fas fa-star star_icon" aria-hidden="true"></i>
                                                        <?php }
                                                    } ?>
                                                </div>
                                            </div>
                                            <img class="img-responsive" src="<?php the_post_thumbnail_url('thailand-thumbnail') ?>" alt="">
                                        </div>
                                        <div class="body-card">
                                            <h3><?php echo get_the_title();?></h3>
                                            <div class="p-and-btn-to-bottom">
                                                <p><?php echo excerpt(20);?></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                            <?php }
                        endwhile;?>

            </div>

        </div>
            <?php
        } ?>

        <?php //recommended attrctions block
        $recomended_at = __( 'Recommended attractions at', 'podium' );
        $section_var = array(
            'repeaterName' => 'recommended_attractions',
            'subFieldName' => 'attraction',
            'id' => get_the_ID(),
            'section_ttl' => $recomended_at. $parent_term->name,
            'section_ttl_lnk' => $all_attraction_lnk,
        );
//        include(locate_template('directives/posts_section.php')); ?>
        <?php //print posts section
        if( have_rows($section_var['repeaterName'], $section_var['id']) ){ ?>
            <div class="content_wrapper">
                <span class="first_text_in_low_box"><?php echo $section_var['section_ttl']; ?></span>
                <?php if($section_var['section_ttl_lnk']){ ?>
                    <div class="text_in_middle_img"><a href="<?php echo $section_var['section_ttl_lnk'];?>" class="blue_lnk"><?php echo esc_html_e( 'Everything', 'podium' )?></a></div>
                    <div class="just_line_in_low_box"></div>
                <?php }?>



                <div class="content" data-equalizer>
                    <?php
                    while ( have_rows($section_var['repeaterName'], $section_var['id']) ) : the_row();
                        $post_object1 = get_sub_field($section_var['subFieldName']);
                        if( $post_object1 ){
                            $post = $post_object1;
                            setup_postdata( $post );
                            ?>
                            <a href="<?php echo get_the_permalink();?>" class="content-card">
                                <div class="card-wrapper">
                                    <div class="img_in_low_box">
                                        <img class="img-responsive" src="<?php the_post_thumbnail_url('thailand-thumbnail') ?>" alt="">
                                    </div>
                                    <div class="body-card">
                                        <h3><?php echo get_the_title();?></h3>
                                        <div class="p-and-btn-to-bottom">
                                            <p><?php echo excerpt(20);?></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        <?php }
                    endwhile;?>

                </div>

            </div>
            <?php
        } ?>

    </div>
















<!--<div id="content" class="site-content row single_hotel_page old-design">-->

<!--    --><?php //if( $settings->displaySidebar() ){ // has sidebar ?>
<!--        --><?php
//        $sidebar_ttl = 'מתעניין במלון ' . $current_ttl . "?";
//        include(locate_template( 'directives/sidebar-old.php' )); ?>
<!--    --><?php //} ?>



<!--</div>-->





