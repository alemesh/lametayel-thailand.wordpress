<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package podium
 */
use Podium\Config\Settings as settings;
$settings = new settings();

get_header();
?>







                <div class="content_wrapper">

                    <div class="up_img">
<!--                        <div class="text_in_up_img">--><?php //the_title();?><!--</div>-->
                        <h1 class="text_in_up_img"><?php the_title();?></h1>
                        <img class="up_img_tail img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/Lametayel-Thailand-all-page-styles/img/corner-img.png">
                    </div>
                    <?php while ( have_posts() ) : the_post(); ?>


                    <div class="up_box">
                        <?php get_template_part( 'directives/content', 'page' ); ?>

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
                </div>












                <?php //articles block
                $category_id = get_field('package_category');
                $cat_lnk = get_term_link( $category_id );
                $section_var = array(
                    'repeaterName' => 'articles',
                    'subFieldName' => 'article',
                    'id' => get_the_ID(),
                    'section_ttl' => 'מאמרים',
                    'section_ttl_lnk' => $cat_lnk,
                );
                include(locate_template('directives/posts_section.php')); ?>

                <?php //hotels block
                $section_var = array(
                    'repeaterName' => 'hotels',
                    'subFieldName' => 'hotel',
                    'id' => get_the_ID(),
                    'section_ttl' => get_field('hotels_section_ttl'),
                    'section_ttl_lnk' => '',
                );
                include(locate_template('directives/posts_section.php')); ?>

                <?php //attractions block
                $section_var = array(
                    'repeaterName' => 'attractions',
                    'subFieldName' => 'attraction',
                    'id' => get_the_ID(),
                    'section_ttl' => get_field('attractions_section_ttl'),
                    'section_ttl_lnk' => '',
                );
                include(locate_template('directives/posts_section.php')); ?>

            <?php endwhile; // End of the loop. ?>




<!--    --><?php //if( $settings->displaySidebar() ){ // has sidebar ?>
<!--        --><?php
//        if(get_field('txt_ttl_sidebar')){
//            $sidebar_ttl = get_field('txt_ttl_sidebar');
//        }else{
//            $sidebar_ttl = 'רוצה לתכנן חופשה בתאילנד?';
//        }
//        include(locate_template( 'directives/sidebar.php' )); ?>
<!--    --><?php //} ?>








<?php get_footer(); ?>
