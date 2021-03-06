<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Template Name: Jobs
 *
 *
 * @package podium
 */
use Podium\Config\Settings as settings;
$settings = new settings();

get_header();
?>

<div class="main-holder">
    <div class="cloud">
<!--        <span>--><?php //the_title();?><!--</span>-->
        <h1 class="text_in_up_img"><?php the_title();?></h1>
    </div>
    <div class="content wrap-align">
        <div class="content-half-block">
            <div class="text_in_right_box">
                <?php get_template_part( 'directives/content', 'page' ); ?>
            </div>
            <div class="wrap-for-left-form small_form">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="wrap-two-col-form">
                        <div class="form-half-block">
<!--                            <input type="text"	name="user_name" placeholder="שם*" id="user_name" required/>-->
                            <input type="text"	name="user_name" placeholder="<?php echo esc_html_e( '*Name', 'podium' )?>" id="user_name" required/>
<!--                            <input type="text" name="user_phone" placeholder="טלפון*" id="user_phone" required/>-->
                            <input type="text" name="user_phone" placeholder="<?php echo esc_html_e( '*phone', 'podium' )?>" id="user_phone" required/>
                        </div>
                        <div class="form-half-block">
<!--                            <input type="email"	name="user_email" placeholder="דואר אלקטרוני" id="user_email" required/>-->
                            <input type="email"	name="user_email" placeholder="<?php echo esc_html_e( '*Email', 'podium' )?>" id="user_email" required/>
                            <div class="file_loader">
                                <label>
                                    <input type="file" class="imgs_input" name="fileToUpload" id="fileToUpload" value="">
<!--                                    <span>+ צרף קורות חיים</span>-->
                                    <span><?php echo esc_html_e( '+ Attach resume', 'podium' )?></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <label class="req">
                        <span class="show-for-sr"><?php _e( 'If you are human please skip this field', 'podium' ); ?></span>
                        <input name="address" id="user_address" type="text" placeholder="<?php _e( 'If you are human please skip this field', 'podium' ); ?>">
                    </label>
                    <input type="hidden" name="action" value="jobs_form"/>
                    <input type="hidden" name="ttl" id="ttl" value="<?php the_title();?>"/>
                    <input type="hidden" name="url" value="<?php the_permalink();?>"/>
                    <?php
                    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                        $ip = $_SERVER['HTTP_CLIENT_IP'];
                    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } else {
                        $ip = $_SERVER['REMOTE_ADDR'];
                    }?>
                    <input type="hidden" name="user_ip" id="user_ip" value="<?php echo $ip; ?>"/>
<!--                    <button class="button-for-left-form" type="submit">שלח<i class="fas fa-chevron-left"></i></button>-->
                    <button class="button-for-left-form" type="submit"><?php echo esc_html_e( 'Send', 'podium' )?><i class="fas fa-chevron-left"></i></button>
                </form>
            </div>
        </div>
        <div class="content-half-block wrap_for_img">
            <div class="image_left_box" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/contact-page-styles/img/hiring_img.png)"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
