<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *Template Name: Restaurants page
 *
 * @package podium
 */
use Podium\Config\Settings as settings;
$settings = new settings();

get_header();

$restaurant_page = get_fields();
$post_id = get_the_ID();
$list_of_the_restaurants = get_field('list_of_the_restaurants', $post_id);
$map_section_tabs = get_field('map_section_tabs', $post_id);
$map_section = get_field('map_section', $post_id);
$slides = get_field('slides', $post_id);
?>


<!--<div class="menu"></div>-->
<div class="wraper">



    <div class="hlt-header" <?php if($restaurant_page['background_header'] != null){ ?>style="background-image: url(<?php echo $restaurant_page['background_header'];?>)"<?php }?>>
        <div class="main-holder">
            <div class="htl-text">
                <?php if($restaurant_page['lodo_header'] != null){ ?>
                <div class="wrap-img">
                    <img src="<?php echo $restaurant_page['lodo_header'];?>" alt="label">
                </div>
                <?php }?>
            </div>
        </div>

    </div>
    <div class="htl-second-section" <?php if($restaurant_page['background_second_section'] != null){ ?>style="background-image: url(<?php echo $restaurant_page['background_second_section'];?>)"<?php }?>>
        <div class="main-holder">
            <div class="sec-head-text">
                <?php if($restaurant_page['title_of_the_second_section'] != null){ ?>
                <h3><?php echo $restaurant_page['title_of_the_second_section'];?></h3>
                <?php }?>
                <?php if($restaurant_page['description_of_the_second_section_desctop'] != null){ ?>
                    <?php echo $restaurant_page['description_of_the_second_section_desctop'];?>
                <?php }?>
                <?php if($restaurant_page['description_of_the_second_section_mobile'] != null){ ?>
                    <?php echo $restaurant_page['description_of_the_second_section_mobile'];?>
                <?php }?>
            </div>
            <div class="sec-list">
                <ul>
                    <?php if (isset($list_of_the_restaurants) && !empty($list_of_the_restaurants)): ?>
                        <?php foreach ($list_of_the_restaurants as $block): ?>
                            <?php if($block['text'] != null){ ?>
                                <li><span class="item-list-img"></span><span class="item-list-text"><?php echo $block['text'];?></span></li>
                            <?php }?>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="sec-footer-text">
                <?php if($restaurant_page['title_of_the_map_section'] != null){ ?>
                    <h3><?php echo $restaurant_page['title_of_the_map_section'];?></h3>
                <?php }?>
            </div>
        </div>
    </div>

    <div class="htl-map-section">
        <div class="g-map">
            <!--<div id="map"></div>-->
        </div>
        <div class="address-block tabs">
            <div class="menu-lisy">
                <a class="toggle-mnu"><span></span></a>
                <div class="togle-title"></div>
                <div class="wrqap-menu">
                    <ul class="tabs__caption">
                        <?php if (isset($map_section_tabs) && !empty($map_section_tabs)): ?>
                        <?php $counter = 0; ?>
                        <?php foreach ($map_section_tabs as $block): ?>
                        <li class="<?php echo ($counter == 0)?'active':'';?>" data-lat="<?php echo $block['lat'];?>" data-lng="<?php echo $block['lng'];?>"><span><?php echo $block['text'];?></span></li>
                                <?php $counter ++; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>


            </div>
            <div class="wrap-mobile">
                <div class="g-map-mobile">

                </div>
                <?php if (isset($map_section) && !empty($map_section)): ?>
                <?php $counter = 0; ?>
                <?php foreach ($map_section as $block): ?>
                <div class="address-item tabs__content <?php echo ($counter == 0)?'active':'';?>">
                    <h3><?php echo $block['text'];?></h3>
                    <p class="en"><?php echo $block['text_en'];?></p>
                    <p class="he"><?php echo $block['text_he'];?></p>
                    <div class="button-section">
                        <a class="button" href="<?php echo $block['button_link'];?>"><span><?php echo $block['button_text'];?></span></a>
<!--                        <a class="button" href="mailto:bkk@lametayel-thailand.com"><span>הזמנת מקום</span></a>-->
                    </div>
                </div>
                        <?php $counter ++; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
    <div class="htl-menu-section" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/restaurants-page-styles/img/background-fourtch-section4.png)">
        <div class="left-image"></div>
        <div class="right-image"></div>
        <div class="right-2-image"></div>
        <div class="main-holder">
            <div class="wrap-section">
                <?php if($restaurant_page['title_of_the_menu_section'] != null){ ?>
                    <h3><?php echo $restaurant_page['title_of_the_menu_section'];?></h3>
                <?php }?>
                <div class="description">
                    <?php if($restaurant_page['description_of_the_menu_section'] != null){ ?>
                        <h3><?php echo $restaurant_page['description_of_the_menu_section'];?></h3>
                    <?php }?>
                </div>
                <div class="buttons-menu">
                    <?php if($restaurant_page['button_of_the_main_menu'] != null){ ?>
                        <a class="button" href="<?php echo $restaurant_page['link_of_the_button'];?>" download><span><?php echo $restaurant_page['button_of_the_main_menu'];?></span></a>
                    <?php }?>
                    <?php if($restaurant_page['button_of_the_childrens_menu'] != null){ ?>
                        <a class="button" href="<?php echo $restaurant_page['link_of_the_button_children'];?>" download><span><?php echo $restaurant_page['button_of_the_childrens_menu'];?></span></a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <div class="htl-slider-section">
        <div class="footer-section">
            <?php if($restaurant_page['title_of_the_slider_section'] != null){ ?>
                <h3><?php echo $restaurant_page['title_of_the_slider_section'];?></h3>
            <?php }?>
        </div>
        <div class="wrap-section">
            <div class="variable-width">
<!--                <div class="item">-->
<!--                    <a data-fancybox="gallery" href="--><?php //echo get_stylesheet_directory_uri();?><!--/restaurants-page-styles/img/_MG_9440-min.jpg">-->
<!--                        <img src="--><?php //echo get_stylesheet_directory_uri();?><!--/restaurants-page-styles/img/optimized_contents/_MG_9440-min.jpg"alt="#">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="item">-->
<!--                    <a data-fancybox="gallery" href="--><?php //echo get_stylesheet_directory_uri();?><!--/restaurants-page-styles/img/IMG_0462-min.jpg">-->
<!--                        <img src="--><?php //echo get_stylesheet_directory_uri();?><!--/restaurants-page-styles/img/optimized_contents/IMG_0462-min.jpg"alt="#">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="item">-->
<!--                    <a data-fancybox="gallery" href="--><?php //echo get_stylesheet_directory_uri();?><!--/restaurants-page-styles/img/_MG_9976-min.jpg">-->
<!--                        <img src="--><?php //echo get_stylesheet_directory_uri();?><!--/restaurants-page-styles/img/optimized_contents/_MG_9976-min.jpg"alt="#">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="item">-->
<!--                    <a data-fancybox="gallery" href="--><?php //echo get_stylesheet_directory_uri();?><!--/restaurants-page-styles/img/_MG_9418-min.jpg">-->
<!--                        <img src="--><?php //echo get_stylesheet_directory_uri();?><!--/restaurants-page-styles/img/optimized_contents/_MG_9418-min.jpg"alt="#">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="item">-->
<!--                    <a data-fancybox="gallery" href="--><?php //echo get_stylesheet_directory_uri();?><!--/restaurants-page-styles/img/_MG_9523-min.jpg">-->
<!--                        <img src="--><?php //echo get_stylesheet_directory_uri();?><!--/restaurants-page-styles/img/optimized_contents/_MG_9523-min.jpg"alt="#">-->
<!--                    </a>-->
<!--                </div>-->
                <?php if (isset($slides) && !empty($slides)): ?>
                <?php foreach ($slides as $block): ?>
                <div class="item">
                    <img src="<?php echo $block['image'];?>" alt="#">
                </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="htl-contactform-section">
        <div class="main-holder">
            <?php if($restaurant_page['title_of_the_contact_form_section'] != null){ ?>
                <h3><?php echo $restaurant_page['title_of_the_contact_form_section'];?></h3>
            <?php }?>
            <?php if($restaurant_page['description_of_the_contact_form_section'] != null){ ?>
                <p><?php echo $restaurant_page['description_of_the_contact_form_section'];?></p>
            <?php }?>

            <div class="succes-nsg" hidden>
                <h3 class="desc"><span>תודה!</span> פרטיך התקבלו בהצלחה.</h3>
                <h3 class="mob"><span>תודה!</span><br> פרטיך התקבלו בהצלחה.</h3>
            </div>
            <div class="contact-form">
                <form action="" id="ajax_form_restouran" class="form form-validation" method="post">
                    <div class="form-row-wrap">
                        <div class="form-row form-grow-1">
<!--                            <input name="name" class="form-control" required data-required="true" type="text"  placeholder="*שם מלא" pattern="^[A-Zא-תa-z ]{1,50}$" title="Name">-->
                            <input name="name" class="form-control" required data-required="true" type="text"  placeholder="<?php esc_html_e( '*full name', 'podium' ); ?>" pattern="^[A-Zא-תa-z ]{1,50}$" title="Name">
                        </div>
                        <div class="form-row form-grow-3">
<!--                            <input name="tel" class="form-control" required data-required="true" type="text" placeholder="*טלפון" pattern="(((02)|(03)|(04)|(08)|(09)){1}[\d]{7,8})|(((071)|(072)|(073)|(074)|(076)|(077)|(078)|(079)|(050)|(051)|(052)|(053)|(054)|(055)|(056)|(058)|(059)){1}[\d]{6,7})" title="International, state or local telephone number">-->
                            <input name="tel" class="form-control" required data-required="true" type="text" placeholder="<?php esc_html_e( '*phone', 'podium' ); ?>" pattern="(((02)|(03)|(04)|(08)|(09)){1}[\d]{7,8})|(((071)|(072)|(073)|(074)|(076)|(077)|(078)|(079)|(050)|(051)|(052)|(053)|(054)|(055)|(056)|(058)|(059)){1}[\d]{6,7})" title="International, state or local telephone number">
                        </div>
                        <div class="form-row form-grow-4">
<!--                            <input name="email" required class="form-control" type="email" placeholder="*דוא”ל">-->
                            <input name="email" required class="form-control" type="email" placeholder="<?php esc_html_e( '*Email', 'podium' ); ?>">
                        </div>
                        <div class="form-row button form-grow-5">
                            <!--<button type="submit" id="btn" class="btn"><span class="btn-txt">צרפו אותנו </span></button>-->
<!--                            <input type="submit" id="btn" class="btn" value="צרפו אותנו "/>-->
                            <input type="submit" id="btn" class="btn" value="<?php esc_html_e( 'Bring us together', 'podium' ); ?>"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--<div class="menu"></div>-->

<?php get_footer(); ?>
