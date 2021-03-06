<?php
/**
 * The template for displaying all single posts.
 *
 * @package podium
 */
use Podium\Config\Settings as settings;
$settings = new settings();

get_header();
?>

<div class="main-content">
    <div class="up_img">
        <h1 class="text_in_up_img"><?php the_title();// TODO title
            $rating = get_field('rating'); ?>
            <div class="rating"><?php
                for($i=0; $i<$rating; $i++){ ?>
                    <i class="fa fa-star" aria-hidden="true"></i>
                <?php } ?>
            </div></h1>
        <img class="up_img_tail img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/Lametayel-Thailand-all-page-styles/img/corner-img.png">
    </div>
    <div class="content-body">
        <div class="right-text-body">
            <?php while ( have_posts() ) : the_post(); ?>

                <?php if( get_field('top_page_desc')){ ?>
                    <p>
                        <?php echo  get_field('top_page_desc'); // TODO description?>
<!--                        <a href="#about"><span>להרחבה על האטרקציה</span></a>-->
                        <a href="#about"><span><?php echo esc_html_e( 'For more details on the attraction', 'podium' )?></span></a>
                    </p>
                <?php }?>

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

            <?php endwhile; // End of the loop. ?>

            <?php if(get_field('desc')){ ?>
                <div id="about">
                    <?php the_field('desc'); //TODO description after slider?>
                </div>
            <?php } ?>

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












<?php //get connected destination

$term_list = wp_get_post_terms($post->ID, 'destinations');

foreach ($term_list as $term){
//    var_dump($term->parent);
    if($term->parent != 0){
        $current_cat = $term;
        break;//current cat name
    }
}
//var_dump($current_cat);
$parent_term = get_term( $current_cat->parent, 'destinations' );
//var_dump($parent_term);
$termchildren = get_term_children( $parent_term->term_id, 'destinations' );
foreach ( $termchildren as $child ) {
    $term = get_term_by( 'id', $child, 'destinations' );
    $type = get_field('type_destination', 'destinations_'.$term->term_id);

    if($type === 'attraction'){
        $all_attraction_lnk = get_term_link( $child, 'destinations' );
        break;
    }
    if($type === 'hotel'){
        $all_hotel_lnk = get_term_link( $child, 'destinations' );
    }
}
?>

<?php //recommended attrctions block
//$text_item = 'אטרקציות מומלצות ב';
$text_item = __( 'Recommended attractions at', 'podium' );

$section_var = array(
    'repeaterName' => 'recommended_attractions',
    'subFieldName' => 'attraction',
    'id' => get_the_ID(),
    'section_ttl' => $text_item. $parent_term->name,
    'section_ttl_lnk' => $all_attraction_lnk,
);
//include(locate_template('directives/posts_section.php')); // TODO get attractions bottom?>

<?php //print posts section
//var_dump($section_var);
if( have_rows($section_var['repeaterName'], $section_var['id']) ){ ?>
    <div class="main_low_box">
        <div class="content_wrapper">
            <span class="first_text_in_low_box"><?php echo $section_var['section_ttl']; ?></span>
<!--            <span class="first_text_in_low_box">אטרקציות מומלצות ב</span>-->
            <?php if($section_var['section_ttl_lnk']){ ?>
<!--                <div class="text_in_middle_img"><a href="--><?php //echo $section_var['section_ttl_lnk'];?><!--" class="blue_lnk">הכל</a></div>-->
                <div class="text_in_middle_img"><a href="<?php echo $section_var['section_ttl_lnk'];?>" class="blue_lnk"><?php echo esc_html_e( 'Everything', 'podium' )?></a></div>
            <?php }?>
            <div class="just_line_in_low_box"></div>

            <div class="content"  data-equalizer>
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
                                            <img class="img-responsive" src="<?php the_post_thumbnail_url();?>" alt="">
<!--                                            --><?php //get_thailand_featured_image('thailand-thumbnail');?>
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
    </div>
    <?php
} ?>


<?php //recommended hotel block
//$text_item2 = 'מלונות מומלצים ב';
$text_item2 = __( 'Featured hotels in', 'podium' );
$section_var = array(
    'repeaterName' => 'recommended_hotels',
    'subFieldName' => 'hotel',
    'id' => get_the_ID(),
    'section_ttl' => $text_item2. $parent_term->name,
    'section_ttl_lnk' => $all_hotel_lnk,
);
//include(locate_template('directives/posts_section.php')); ?>
<?php //print posts section
if( have_rows($section_var['repeaterName'], $section_var['id']) ){ ?>
    <div class="main_low_box">
        <div class="content_wrapper">
            <span class="first_text_in_low_box"><?php echo $section_var['section_ttl']; ?></span>
            <?php if($section_var['section_ttl_lnk']){ ?>
                <div class="text_in_middle_img"><a href="<?php echo $section_var['section_ttl_lnk'];?>" class="blue_lnk">הכל</a></div>
            <?php }?>
            <div class="just_line_in_low_box"></div>

            <div class="content"  data-equalizer>
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
                                    <img class="img-responsive" src="<?php the_post_thumbnail_url();?>" alt="">
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
    </div>
    <?php
} ?>


<?php get_footer(); ?>
