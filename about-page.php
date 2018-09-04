<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *Template Name: About page
 *
 * @package podium
 */
get_header();
?>
<div class="main-content">
    <div class="up_img">
        <h1 class="text_in_up_img"><?php the_title();?></h1>
        <img class="up_img_tail img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/Lametayel-Thailand-all-page-styles/img/corner-img.png">
    </div>
    <div class="content-body">
        <div class="right-text-body about-page-main-content">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content();?>
            <?php endwhile; // End of the loop. ?>

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
<?php get_footer(); ?>

























