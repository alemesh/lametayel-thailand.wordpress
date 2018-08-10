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
<!--<div id="content" class="site-content row">-->
<!---->
<!--    --><?php //if( $settings->displaySidebar() ){ // has sidebar ?>
<!--        --><?php
//        $sidebar_ttl = 'רוצה לתכנן חופשה בתאילנד?';
//        include(locate_template( 'directives/sidebar.php' )); ?>
<!--    --><?php //} ?>
<!--</div>-->












<div class="content_wrapper">

    <div class="up_img">
        <h1 class="text_in_up_img"><?php the_title();?></h1>
        <img class="up_img_tail img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/Lametayel-Thailand-all-page-styles/img/corner-img.png">
    </div>

    <div class="up_box">
        <div class="main_text">


            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                <div class="location_and_phone_wrapper">
                    <?php if(get_field('address')){ ?>
                    <div class="location_border_in_up_box">
                        <div class="location_wrapper">
                            <i class="fas fa-map-marker-alt location_mark"></i>
                        </div>
                        <div class="text_in_location_border">
                            <?php echo get_field('address');?>
                        </div>
                    </div>
                    <?php }?>
                    <?php if(get_field('phone')){ ?>
                    <div class="location_border_in_up_box">
                        <div class="location_wrapper phone_wrapper">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="text_in_location_border phone_number">
                            <?php echo get_field('phone');?>
                        </div>
                    </div>
                    <?php }?>
                </div>

            <?php endwhile; // End of the loop. ?>

        </div>

        <div class="main_left_up_box">
            <div class="bredcrumbs hidden-xs">
                <?php if(function_exists('bcn_display')){ ?>
                    <p id="breadcrumbs"> <?php bcn_display(); ?></p>
                <?php }?>
            </div>
            <div class="left_text_box">
                    <?php if(get_field('txt_under_form', 'option')){ ?>
                            <?php echo get_field('txt_under_form', 'option'); ?>
                    <?php	}?>
            </div>
        </div>

    </div>

<!--    <div class="google_map_with_hotel">-->
<!--        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4802520.213301805!2d97.60204871369609!3d8.713234328799542!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30503abcc6dcfe73%3A0x34b475038b8c125b!2sThanon+Ratuthit+Songroipi+Rd%2C+Tambon+Patong%2C+Amphoe+Kathu%2C+Chang+Wat+Phuket+83150%2C+Thailand!5e0!3m2!1sen!2sua!4v1530882986061" width="100%" height="493" frameborder="0" style="border:0" allowfullscreen></iframe>-->
<!--    </div>-->
</div>
<?php get_footer(); ?>
