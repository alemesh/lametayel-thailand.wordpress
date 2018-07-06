<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package podium
 */

?>

<?php if(!is_page_template( 'page-contact.php' )){ ?>
<!--    <img src="--><?php //echo get_template_directory_uri();?><!--/dist/images/shoes_footer.jpg" class="footer_shoes_img" />-->
<?php } ?>
<section class="footer_blue_section">
    <div class="image-holder-right"></div>
    <div class="row">
        <div class="small-12 medium-3 columns first_column">
            <?php dynamic_sidebar( 'footer-1' ); ?>
            <a href="<?php echo get_home_url();?>/%D7%A6%D7%95%D7%A8-%D7%A7%D7%A9%D7%A8/" class="contact">צור קשר</a>
        </div>
        <div class="small-12 medium-3 columns first-menu">
            <?php dynamic_sidebar( 'footer-2' ); ?>
        </div>
        <div class="small-12 medium-2 columns">
            <?php dynamic_sidebar( 'footer-3' ); ?>
        </div>
        <div class="small-12 medium-2 columns">
            <?php dynamic_sidebar( 'footer-4' ); ?>
        </div>
        <div class="small-12 medium-2 columns">
            <?php dynamic_sidebar( 'footer-5' ); ?>
        </div>
    </div>
</section>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="row">
        <div class="site-info small-12 medium-6 columns text-center medium-text-right">
<!--            <p>כל הזכויות שמורות למרכז למטייל תאילנד 2016</p>-->
            <p>כל הזכויות שמורות למרכז למטייל תאילנד 2018</p>
        </div>
        <div class="site-info small-12 medium-6 columns text-center medium-text-left">
<!--            <p><img src="--><?php //echo get_template_directory_uri(); ?><!--/dist/images/logo-footer.png" class="logo-footer" alt="למטייל תאילנד"/>-->
<!--                <a href="http://talisinay.com" target="_blank">עיצוב ובניית אתר: טלי סיני</a>-->
<!--                <a href=" https://www.idanbenor.co.il/" target="_blank" class="credit">קידום אתרים: עידן בן אור</a>-->
<!--            </p>-->

        </div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div> <!-- inner-wrap -->
</div><!-- #page -->

<!--contact form popup-->
<div class="reveal contact_popup" id="exampleModal1" data-reveal>
    <div class="text-center">
        <img src="<?php echo get_template_directory_uri();?>/dist/images/popup_envelope.svg" class="envelope"/>
    </div>
    <?php //echo do_shortcode('[contact-form-7 id="303" title="טופס פופאפ"]'); ?>
    <form action="" method="post">
        <div class="popup_padding">
            <div class="row">
                <div class="small-12 columns text-center">
                    <?php if ( get_field( 'lightbox_form_title', 'options' ) ) { ?>
                        <p class="contact" data-normal-size="30"><?php the_field( 'lightbox_form_title', 'options' ); ?></p>
                    <?php } ?>
                    <?php if ( get_field( 'lightbox_form_pretext', 'options' ) ) { ?>
                        <p data-normal-size="18"><?php the_field( 'lightbox_form_pretext', 'options' ); ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="small-12 medium-8 medium-centered columns">
                    <label>
                        שם
                        <input type="text"	name="user_name" required placeholder=""/>
                    </label>
                    <label>
                        טלפון
                        <input type="text"	name="user_phone" required placeholder=""/>
                    </label>
                    <label>
                        דואר אלקטרוני
                        <input type="email"	name="user_email" required placeholder=""/>
                    </label>
                    <label>מספר נוסעים
                        <input type="number" min="1" name="num_passengers" placeholder=""/>
                    </label>
                    <label>
                        פרטים נוספים
                        <textarea rows="10" name="user_comments" placeholder=""></textarea>
                    </label>
                    <label class="req">
                        <span class="show-for-sr"><?php _e( 'If you are human please skip this field', 'podium' ); ?></span>
                        <input name="address" type="text" placeholder="<?php _e( 'If you are human please skip this field', 'podium' ); ?>">
                    </label>
                    <input type="hidden" name="action" value="lightbox_form"/>
                    <?php if( is_archive() ){ ?>
                        <input type="hidden" name="ttl" value="<?php echo single_cat_title( '', false );?>"/>
                    <?php } else { ?>
                        <input type="hidden" name="ttl" value="<?php the_title();?>"/>
                    <?php } ?>
                    <input type="hidden" name="url" value="<?php the_permalink();?>"/>
                    <?php
                    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                        $ip = $_SERVER['HTTP_CLIENT_IP'];
                    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } else {
                        $ip = $_SERVER['REMOTE_ADDR'];
                    }?>
                    <input type="hidden" name="user_ip" value="<?php echo $ip; ?>"/>
                    <button type="submit" class="orange_btn">שלח</button>
                </div>
            </div>
        </div>
        <div class="row contact_bottom">
            <div class="small-12 medium-8 medium-centered columns text-center">
                <?php if ( get_field( 'lightbox_form_footer_title', 'options' ) ) { ?>
                    <p class="bold" data-normal-size="18"><?php the_field( 'lightbox_form_footer_title', 'options' ); ?></p>
                <?php } ?>
                <?php if ( get_field( 'lightbox_form_text_footer', 'options' ) ) { ?>
                    <p data-normal-size="18"><?php the_field( 'lightbox_form_text_footer', 'options' ); ?></p>
                <?php } ?>
            </div>
        </div>
    </form>

    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="reveal hide_prices" id="dont_display_price_model" data-reveal>
    <div class="text-center">
        <?php if( get_field( 'popup_dont_display_price', 'option' ) ){
            the_field( 'popup_dont_display_price', 'option' );
        }?>
    </div>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div id="back-top">
    <a href="#"  class="back-top"> <i class="fa fa-chevron-up"></i> </a>
</div>

<?php wp_footer();

the_field( 'codes_footer', 'option' );
the_field( 'codes_unique_footer' ); ?>

<?php if ( is_page_template('restaurants-page.php') ) { ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAW6GlD57glHFIOUZGbgUmqv06BJyW2q3o&callback=initMap" async defer></script>
<?php }?>
</body>
</html>
