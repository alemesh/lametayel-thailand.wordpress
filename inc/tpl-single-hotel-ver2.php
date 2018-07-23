<?php
$current_ttl = get_the_title();
?>
<header class="entry-header">
    <?php get_template_part( 'directives/hotel', 'slider-banner' ); ?>
</header><!-- .entry-header -->
<div id="content" class="site-content row single_hotel_page">
    <div id="primary" class="content-area small-12 medium-12 <?php echo $settings->getContentClass('large-9', 'large-12'); ?> columns  wow fadeInUp" data-wow-delay="0.5s">
        <main id="main" class="site-main" role="main">
            <!--tabs-->
            <div id="about"></div>
            <ul class="tabs" data-tabs id="single_hotel_description_tabs">
                <?php if(get_field('desc')){ ?>
                    <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">תאור</a></li>
                <?php } ?>
                <?php if(get_field('hotel_amenities')){ ?>
                    <li class="tabs-title"><a href="#panel2">מאפייני המלון</a></li>
                <?php } ?>
                <?php if( have_rows('recomendations') && false ): ?>
                    <li class="tabs-title"><a href="#panel3">המלצות</a></li>
                <?php endif; ?>
                <?php if( have_rows('room_galleries') ): ?>
                    <li class="tabs-title"><a href="#panel4">חדרים</a></li>
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
                            <h3>מתקנים</h3>
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
                            <p class="free_intenet"><i class="fa fa-check" aria-hidden="true"></i> חיבור לאינטרנט אלחוטי חינם</p>
                        <?php } ?>
                        <h3>שימו לב</h3>
                        <p class="notice">מתקני המלון ותיאור המלון התקבלו מהמלון והינם באחריותו הבלעדית של המלון. חלק מהשירותים ניתנים בתשלום ע"י המלון ויכולים להשתנות ללא הודעה מוקדמת.</p>
                    </div>
                <?php } ?>
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
                                                <span class="overlay_txt">לגלריה המלאה</span>
                                            </div>
                                        </a>
                                        <div class="reveal single_hotel_gallery_reveal large" id="gallery_model<?php echo $y; ?>" data-reveal>
                                            <div class="row">
                                                <div class="small-12 columns">
                                                    <h3 class="room_ttl">תכולת החדר
                                                        <?php if(get_sub_field('room_name')){ ?>
                                                            <span class="name"><?php echo get_sub_field('room_name');?></span>
                                                        <?php }?>
                                                        <?php if(get_sub_field('room_size')){ ?>
                                                            <span class="size"><?php echo get_sub_field('room_size');?> מ"ר</span>
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
                <a class="contact_lnk_hotel_page hide-for-medium" href="#form_wrapper"><span class="button orange_btn">אני מתעניין במלון הזה!</span></a>
            </div>
            <div class="interest-form-mobile hide-for-medium"></div>
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
        </main><!-- #main -->
    </div><!-- #primary -->
    <?php if( $settings->displaySidebar() ): // has sidebar ?>
        <?php
        $sidebar_ttl = 'מתעניין במלון ' . $current_ttl . "?";
        include(locate_template( 'directives/sidebar.php' ));
        ?>
    <?php endif; ?>
    <div class="center-wrapper hide-for-small">
        <a href="#form_wrapper" class="orange_btn button">אני מתעניין במלון הזה!</a>
    </div>
    <?php get_template_part( 'directives/recomendations' ); ?>
    <?php get_template_part( 'directives/advantage' ); ?>
    <?php get_template_part( 'directives/recomendations-mobile' ); ?>


    <div class="center-wrapper">
        <a href="#form_wrapper" class="orange_btn button">אני מתעניין במלון הזה!</a>
    </div>
</div><!-- #content -->
