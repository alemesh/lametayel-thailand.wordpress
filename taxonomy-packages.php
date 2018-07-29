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
<?php
$current_id = get_queried_object_id();
$type = get_field('type_package', 'packages_'.$current_id);
if ($type == 'main'){
?>


    <div class="main-content packeges-page">
        <div class="up_img">
            <div class="text_in_up_img"><?php echo single_cat_title( '', false ); ?></div>
            <img class="up_img_tail img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/Lametayel-Thailand-all-page-styles/img/corner-img.png">
        </div>
        <div class="content-body">
            <div class="right-text-body">
                <div class="contents">
                    <?php
                    if( get_field( 'page_content', 'packages_'.$current_id )){
                        the_field( 'page_content', 'packages_'.$current_id );
                    }
                    ?>
                </div>
            </div>
            <div class="left-form-body">
                <?php include(locate_template( 'directives/left-sidebar-form.php' )); ?>
                <div class="left-sidebar-text">
                        <?php if(get_field('txt_under_form', 'option')){ ?>
                                <?php echo get_field('txt_under_form', 'option'); ?>
                        <?php	}?>
                </div>
            </div>
        </div>

    </div>




    <div class="main_low_box packeges-page">
        <div class="content_wrapper">





            <?php //hotels block
            $section_var = array(
                'repeaterName' => 'related_hotels',
                'subFieldName' => 'hotel_post',
                'id' => 'packages_'.$current_id,
                'section_ttl' => get_field( 'hotels_section_ttl', 'packages_'.$current_id ),
                'section_ttl_lnk' => '',
            );
            //    include(locate_template('directives/posts_section.php')); ?>

            <?php
            if( have_rows($section_var['repeaterName'], $section_var['id']) ){
                ?>

            <span class="first_text_in_low_box"><?php echo $section_var['section_ttl']; //TODO title?></span>
            <div class="just_line_in_low_box"></div>
            <div class="content">
                <?php while ( have_rows($section_var['repeaterName'], $section_var['id']) ) : the_row();
                    $post_object1 = get_sub_field($section_var['subFieldName']);
                    if( $post_object1 ){
                        $post = $post_object1;
                        setup_postdata( $post );
                        ?>


                        <a href="<?php echo get_the_permalink();?>" class="content-card">
                            <div class="card-wrapper">
                                <div class="img_in_low_box">
                                    <?php if(get_post_type()==='hotel'){
                                    $rating = get_field('rating');?>
                                    <div class="star_icons">
                                        <?php
                                        for($i=0; $i<$rating; $i++){
                                            if ( $rating == '3.5' && $i == $rating - 0.5 || $rating == '4.5' && $i == $rating - 0.5){ ?>
                                                <i class="fas fa-star-half star_icon" aria-hidden="true"></i>
                                            <?php }else{?>
                                                <i class="fas fa-star star_icon" aria-hidden="true"></i>
                                            <?php }
                                        } ?>
                                    </div>
                                    <?php }?>
                                    <img class="img-responsive" src="<?php the_post_thumbnail_url('thailand-thumbnail') ?>" alt="">
                                </div>
                                <div class="body-card hotel_bangkok">
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
            <?php } ?>





            <?php //attractions block
            $section_var = array(
                'repeaterName' => 'related_attractions',
                'subFieldName' => 'attraction_post',
                'id' => 'packages_'.$current_id,
                'section_ttl' => get_field( 'attractions_section_ttl', 'packages_'.$current_id ),
                'section_ttl_lnk' => '',
            );
            //    include(locate_template('directives/posts_section.php')); ?>
            <?php
            if( have_rows($section_var['repeaterName'], $section_var['id']) ){
                ?>

                <span class="first_text_in_low_box"><?php echo $section_var['section_ttl']; //TODO title?></span>
                <div class="just_line_in_low_box"></div>
                <div class="content">
                    <?php while ( have_rows($section_var['repeaterName'], $section_var['id']) ) : the_row();
                        $post_object1 = get_sub_field($section_var['subFieldName']);
                        if( $post_object1 ){
                            $post = $post_object1;
                            setup_postdata( $post );
                            ?>


                            <a href="<?php echo get_the_permalink();?>" class="content-card">
                                <div class="card-wrapper">
                                    <div class="img_in_low_box">
                                        <?php if(get_post_type()==='hotel'){
                                            $rating = get_field('rating');?>
                                            <div class="star_icons">
                                                <?php
                                                for($i=0; $i<$rating; $i++){
                                                    if ( $rating == '3.5' && $i == $rating - 0.5 || $rating == '4.5' && $i == $rating - 0.5){ ?>
                                                        <i class="fas fa-star-half star_icon" aria-hidden="true"></i>
                                                    <?php }else{?>
                                                        <i class="fas fa-star star_icon" aria-hidden="true"></i>
                                                    <?php }
                                                } ?>
                                            </div>
                                        <?php }?>
                                        <img class="img-responsive" src="<?php the_post_thumbnail_url('thailand-thumbnail') ?>" alt="">
                                    </div>
                                    <div class="body-card hotel_bangkok">
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
            <?php } ?>





        </div>
    </div>



<?php }else{?>



<div id="content" class="site-content row">
    <div class="small-12 medium-8 columns">
        <header class="entry-header">
            <h1><?php echo single_cat_title( '', false ); ?></h1>
        </header><!-- .entry-header -->
    </div>
    <div class="small-12 medium-4 columns text-left">
        <?php if(function_exists('bcn_display')){ ?>
            <p id="breadcrumbs"> <?php bcn_display(); ?></p>
        <?php }?>
    </div>
    <div id="primary" class="content-area small-12 medium-12 <?php echo $settings->getContentClass('large-9', 'large-12'); ?> columns">
        <main id="main" class="site-main" role="main">


            <?php //check which type of destination and send to template accordingly
            $current_id = get_queried_object_id();
            $type = get_field('type_package', 'packages_'.$current_id);
            switch ($type) {
                case 'main':
                    get_template_part( 'directives/content', 'single_main_packages' );
                    break;
                case 'article':
                    if ( have_posts() ) : ?>
                        <div class="row posts_section" data-equalizer>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <div class="small-12 medium-4 end columns text-center">
                                    <?php get_template_part( 'directives/content', 'post_block' ); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <?php if (function_exists("emm_paginate")) {
                            emm_paginate();
                        } ?>
                    <?php else : ?>
                        <?php get_template_part( 'directives/content', 'none' ); ?>
                    <?php endif;
                    break;
                default:
            } ?>

        </main><!-- #main -->
    </div><!-- #primary -->
    <?php if( $settings->displaySidebar() ){ // has sidebar ?>
        <?php
        $sidebar_ttl = 'רוצה לתכנן חופשה בתאילנד?';
        include(locate_template( 'directives/sidebar.php' )); ?>
    <?php } ?>
</div><!-- #content -->

<?php }?>

<?php get_footer(); ?>
