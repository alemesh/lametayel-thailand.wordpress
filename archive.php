<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package podium
 */
use Podium\Config\Settings as settings;
$settings = new settings();

get_header();
?>
<div class="content_wrapper">

    <div class="up_img">
        <div class="text_in_up_img"><?php echo post_type_archive_title(); ?></div>
        <img class="up_img_tail img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/Lametayel-Thailand-all-page-styles/img/corner-img.png">
    </div>

    <div class="content content_branches" data-equalizer>

        <?php if ( have_posts() ) : ?>


            <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <a href="<?php echo get_the_permalink();?>" class="content-card">
                    <div class="card-wrapper">
                        <div class="img_in_low_box">
                            <img class="img-responsive" src="<?php the_post_thumbnail_url('thailand-thumbnail') ?>" alt="">
<!--                            --><?php //get_thailand_featured_image('thailand-thumbnail');?>
                        </div>
                        <div class="body-card body_card_branches">
                            <h3><?php echo get_the_title();?></h3>
                            <div class="p-and-btn-to-bottom">
                                <p><?php echo excerpt(20);?></p>
                            </div>
                        </div>
                    </div>
                </a>

                <?php endwhile; ?>

            <?php //the_posts_navigation(); ?>
            <?php if (function_exists("emm_paginate")) {
                emm_paginate();
            } ?>

        <?php else : ?>

            <?php get_template_part( 'directives/content', 'none' ); ?>

        <?php endif; ?>


    </div>
</div>
<?php get_footer(); ?>
