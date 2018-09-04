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
<div class="hlt-wraper attractions-main-page">

    <div class="main-conten-section">
        <div class="background-holder"></div>
        <div class="main-holder">
            <div class="button-block">
                <h1 class="button"><span><?php the_title();//TODO title ?></span></h1>
            </div>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="wrap-text-sections">
                    <div class="left-block">
                        <div class="bredcrumbs hidden-xs">
                            <?php if(function_exists('bcn_display')){ ?>
                                <p id="breadcrumbs" vocab="https://schema.org/" typeof="BreadcrumbList"> <?php bcn_display(); ?></p>
                            <?php }?>
                        </div>
                        <?php if(get_field('txt_under_form', 'option')){ ?>
                            <?php echo get_field('txt_under_form', 'option'); ?>
                        <?php	}?>
                    </div>
                    <div class="right-block">
                        <?php the_content(); //TODO the content?>



                        <?php if(get_field('txt_read_more')){ ?>
                            <p><a class="change_view" data-toggle="txt_read_more"><?php echo esc_html_e( 'Read More', 'podium' )?> </a></p>

                        <?php }?>

                        <?php if(get_field('txt_read_more')){ ?>
                            <div id="txt_read_more" data-toggler=".hide" class="hide" >
                                <?php echo get_field('txt_read_more'); ?>
                            </div>
                        <?php }?>

                    </div>
                </div>

                <div class="wrap-img-section">
                    <ul class="items">
                        <?php
                        $categories = get_terms( array( 'taxonomy' => 'destinations', 'parent' => 0, 'hide_empty' => false ) );
                        foreach ($categories as $cat){
                            if ($cat->slug == 'attractions' || $cat->slug == 'people'){  //exclude category - people and attractions
                                continue;
                            }
                            $image = get_field('featured_img', 'destinations_'.$cat->term_id);
                            ?>
                            <li class="item">
                                <a href="<?php echo get_home_url();?>/destinations/<?php echo $cat->slug;?>" class="image" style="background-image: url(<?php echo $image['sizes']['thailand-square-2']; ?>)">
                                    <span class="text-item"></span>
                                    <span class="text"><?php echo  $cat->name;?></span>
                                </a>
                            </li>
                        <?php  }   ?>
                    </ul>
                </div>


            <?php endwhile; // End of the loop. ?>
        </div>
    </div>
</div>




<?php
get_footer(); ?>
