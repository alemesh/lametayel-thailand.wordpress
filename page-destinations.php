<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *Template Name: Destination page
 *
 * @package podium
 */
use Podium\Config\Settings as settings;
$settings = new settings();

$categories = get_terms( array('taxonomy' => 'destinations', 'parent' => 0) );
foreach ($categories as $cat){

    $geoLocation = '';

    if (get_field( 'map_coordinates', 'destinations_'.$cat->term_id )){
        $geoLocation = get_field( 'map_coordinates', 'destinations_'.$cat->term_id );
    }

    if ( $geoLocation ) {
        $arr = explode(",", $geoLocation, 2);
        $first = $arr[0];
        $second = $arr[1];

        $image = get_field('featured_img', 'destinations_'.$cat->term_id);

        $businessList[] = array(
            //'icon'    => get_template_directory_uri().'/dist/images/map_icon.png',
            'lat'     => $first,
            'lng'     => $second,
            'img'			=> $image['url'],
            'title'   => $cat->name,
            'bizLink' => get_term_link( $cat->term_id, 'destinations'),
            'desc'    =>  $cat->description,
        );
    }
}

get_header();
?>
<div id="content" class="site-content row">
    <div class="small-12 medium-8 columns">
        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->
    </div>
    <div class="small-12 medium-4 columns text-left">
        <?php if(function_exists('bcn_display')){ ?>
            <p id="breadcrumbs"> <?php bcn_display(); ?></p>
        <?php }?>
    </div>
    <div id="primary" class="content-area small-12 medium-12 <?php echo $settings->getContentClass('large-9', ''); ?> columns">
        <main id="main" class="site-main page_destinations" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <div class="main_content">
                    <?php the_content();?>
                    <?php if(get_field('txt_read_more')){ ?>
                        <a class="change_view" data-toggle="txt_read_more">קרא עוד <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <?php }?>
                </div>

                <?php if(get_field('txt_read_more')){ ?>
                    <div id="txt_read_more" data-toggler=".hide" class="hide" >
                        <?php echo get_field('txt_read_more'); ?>
                    </div>
                <?php }?>

                <?php
                if($_GET['map']==1){ ?>
                    <div class="text-left">
                        <a href="<?php echo get_home_url();?>/יעדים/" class="change_view"><i class="fa fa-list" aria-hidden="true"></i>תצוגת רשימה</a>
                    </div>
                    <div id="map-all-biz"></div>
                <?php }else{?>
                    <div class="text-left">
                        <?php if(get_field('map')){ ?>
                            <a href="?map=1" class="change_view"><i class="fa fa-map-marker" aria-hidden="true"></i>תצוגת מפה</a>
                        <?php } ?>
                    </div>
                    <div class="row" data-equalizer>
                        <?php
                        $categories = get_terms( array( 'taxonomy' => 'destinations', 'parent' => 0, 'hide_empty' => false ) );
                        foreach ($categories as $cat){
                            if ($cat->slug == 'attractions' || $cat->slug == 'people'){  //exclude category - people and attractions
                                continue;
                            }
                            ?>
                            <div class="small-12 medium-4 columns end  wow fadeInUp" data-wow-delay="0.5s">
                                <a href="<?php echo get_home_url();?>/destinations/<?php echo $cat->slug;?>">
                                    <div class="thailand_blue_box_hover_desc item" data-equalizer-watch>
                                        <?php
                                        $image = get_field('featured_img', 'destinations_'.$cat->term_id);
                                        if(($image) ): ?>
                                            <img src="<?php echo $image['sizes']['thailand-square']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        <?php endif; ?>
                                        <div class="txt">
                                            <?php if( $cat->name ){ ?>
                                                <p class="ttl"><?php echo  $cat->name;?></p>
                                            <?php }?>
                                        </div>
                                        <div class="hover_txt">
                                            <?php if( $cat->name){ ?>
                                                <p class="ttl"><?php echo  $cat->name;?></p>
                                            <?php }?>
                                            <?php if( $cat->description){ ?>
                                                <div class="desc"><?php echo  $cat->description;?></div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php  }   ?>
                    </div>
                <?php }
            endwhile; // End of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->
    <?php if( $settings->displaySidebar() ){ // has sidebar ?>
        <?php
        $sidebar_ttl = 'רוצה לתכנן חופשה בתאילנד?';
        include(locate_template( 'directives/sidebar.php' )); ?>
    <?php } ?>
</div><!-- #content -->

<?php
if($_GET['map']==1){

    wp_register_script( 'podium_js', get_template_directory_uri().'/dist/scripts/main.js' );

    wp_localize_script(
        'podium_js',
        'businessList',
        array( 'arr' => $businessList )
    );
    wp_enqueue_script( 'podium_js' );

}

get_footer(); ?>
