<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package podium
 */
use Podium\Config\Settings as settings;
$settings = new settings();

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script> -->
    <?php wp_head(); ?>



    <?php
    if( is_front_page() ) {
        ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/home-page-styles/css/home-main.css">
    <?php
    }elseif ( is_page_template('restaurants-page.php') ) {?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/restaurants-page-styles/css/restaurants-main.css">
    <?php }
    ?>




    <!-- Please create favicon files with http://iconogen.com/
    and put them in assets/images/favicon directory -->

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/android-chrome-192x192.png" sizes="192x192">
    <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/smalltile.png" />
    <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/mediumtile.png" />
    <meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/widetile.png" />
    <meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri(); ?>/dist/images/favicon/largetile.png" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src='http://maps.googleapis.com/maps/api/js?key=AIzaSyBoFN1a1k30Vb30t1UBVlpC2iDEwLAISZw&language=iw' type='text/javascript'></script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-52W7V6V');</script>


    <?php
    the_field( 'codes_header', 'option' );
    the_field( 'codes_unique_header' );
    ?>

</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-52W7V6V"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php //if(function_exists('acp_toolbar') ) { acp_toolbar(); }?>

<div id="page" class="hfeed site off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <a class="skip-link screen-reader-text hide" href="#content"><?php esc_html_e( 'Skip to content', 'podium' ); ?></a>

        <header id="masthead" class="site-header" role="banner">
            <div data-sticky-container>
                <div class="thailand_header_wrapper sticky" data-sticky data-options="marginTop:0;">
                    <div class="top_bar_header">
                        <div class="row">
                            <div class="small-12 medium-6 columns show-for-large">

                                <a data-open="dont_display_price_model" class="dont_display_prices"><?php _e('Why do not we advertise prices?' , 'podium' );?></a>


                                <?php if(get_field('fb_lnk', 'option')){ ?>
                                    <a class="fb" href="<?php echo get_field('fb_lnk', 'option'); ?>" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i> <?php _e('Our Facebook' , 'podium'); // הפייסבוק שלנו ?></a>
                                <?php } ?>

                                <?php if( $instagram_lnk = get_field('instagram_lnk', 'option') ){ ?>
                                    <a class="fb" href="<?php echo $instagram_lnk; ?>" target="_blank">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                <?php } ?>

                                <?php if( get_field( 'arabic_lnk', 'option') ){ ?>
                                    <a href="<?php the_field( 'arabic_lnk', 'option' ); ?>" class="fb" target="_blank" rel="nofollow">العربية</a>
                                <?php } ?>

                            </div>

                            <div class="small-12 medium-6 columns text-right medium-text-left">
                                <?php
                                if( isset($_COOKIE['phone_gclid']) ) {
                                    if(get_field('international_with_cookie', 'option')){ ?>
                                        <a href="tel:<?php echo get_field('international_with_cookie', 'option'); ?>"><?php _e('To call from Israel' , 'podium'); //לשיחה מישראל?> <?php echo get_field('international_with_cookie', 'option');?></a>
                                    <?php }
                                }else{
                                    if(get_field('international', 'option')){ ?>
                                        <a href="tel:<?php echo get_field('international', 'option'); ?>"><?php _e('To call from Israel' , 'podium');?> <?php echo get_field('international', 'option');?></a>
                                    <?php }
                                }?>
                                <?php if( get_field( 'arabic_lnk', 'option') ){ ?>
                                    <a href="<?php the_field( 'arabic_lnk', 'option' ); ?>" class="fb hide-for-medium" target="_blank">العربية</a>
                                <?php } ?>
                                <?php if( get_field( 'contact_lnk', 'option' ) ){ ?>
                                    <a class="contact" href="<?php  the_field( 'contact_lnk', 'option' ); ?>"><?php _e('Contact us' , 'podium'); // צרו קשר?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="show-for-large top-bar">
                        <div class="row">
                            <div class="small-12 columns">
                                <div class="top-bar-right">
                                    <?php
                                    if( is_front_page() ) {
                                    ?>
                                    <a href="<?php echo get_home_url();?>"><img src="<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/logo-header.png" class="logo"/></a>
                                <?php }else{?>
                                        <a href="<?php echo get_home_url();?>"><img src="<?php echo get_stylesheet_directory_uri();?>/dist/images/logo-top-menu.png" class="logo"/></a>
                                    <?php }?>
                                </div>
                                <div class="top-bar-left">
                                    <?php $settings->getMenu( new Top_Bar_Walker(), 'onCanvass' ); // print menu (source config.php) ?>
                                    <div class="search">
                                        <input type="checkbox" class="open_form" id="open" value="search"><label for="open"><i class="fa fa-search search_icon" aria-hidden="true"></i></label>
                                        <form method="get" action="<?php echo get_home_url(); ?>">
                                            <div class="row collapse">
                                                <div class="small-10 columns">
                                                    <input type="text" name="s" placeholder="<?php _e('Search...' ,'podium'); //חפש... ?>">
                                                </div>
                                                <div class="small-2 columns">
                                                    <button type="submit" name="submit" class="button" id="searchsubmit"><i class="fa fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="thailand_mobile_header_wrapper">
                <div class="hide-for-large">
                    <div class="title-bar">
                        <div class="title-bar-right">
                            <a href="<?php echo get_home_url();?>"><img src="<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/logo-header.png" class="logo" alt="למטייל תאילנד"/></a>
                        </div>
                        <div class="title-bar-left">
                            <?php if(get_field('fb_lnk', 'option')){ ?>
                                <a class="fb" href="<?php echo get_field('fb_lnk', 'option'); ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                            <?php } ?>
                            <button class="menu-icon" type="button" data-toggle="overlap-menu"></button>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- #masthead -->

        <div class="overlap-menu hide-for-medium" id="overlap-menu" data-toggler=".is-active">
            <div class="search">
                <form method="get" action="<?php echo get_home_url(); ?>">
                    <div class="row collapse">
                        <div class="small-10 columns">
                            <input type="text" name="s" placeholder="חפש...">
                        </div>
                        <div class="small-2 columns">
                            <button type="submit" name="submit" class="button" id="searchsubmit"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <?php $settings->getMenu( new Top_Bar_Walker(), 'offCanvas' ); // print menu (source config.php) ?>

            <?php if( get_field( 'contact_lnk', 'option' ) ){ ?>
                <a class="contact" href="<?php  the_field( 'contact_lnk', 'option' ); ?>"><?php _e('Contact us' , ''); //צרו קשר ?></a>
            <?php } ?>

        </div>
        <div class="off-canvas-content" data-off-canvas-content>
        </div>

        <a class="exit-off-canvas"></a>
