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
?>


<!--<div class="menu"></div>-->
<div class="wraper">
    <div class="hlt-header" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/restaurants-page-styles/img/background-header.png)">
        <div class="main-holder">
            <div class="htl-text">
                <div class="wrap-img">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/restaurants-page-styles/img/new-content/label-header.png" alt="label">
                </div>
            </div>
        </div>

    </div>
    <div class="htl-second-section" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/restaurants-page-styles/img/background-second-section.png)">
        <div class="main-holder">
            <div class="sec-head-text">
                <h3>וכשבא לכם משהו טעים ומוכר...</h3>
                <p class="desctop">רשת המסעדות של המרכז למטייל תאילנד,<br>
                    כבר מחכה לכם עם כל הטעמים המוכרים והביתיים, עם תפריט מגוון וחוויה מושלמת.<br>
                    במקום "לשבור את הראש" מה לאכול, כנסו לאחת מהמסעדות שלנו הפזורות ברחבי תאילנד<br>
                    ותיהנו מאוכל כמו שאתם אוהבים </p>
                <p class="mobile">רשת המסעדות של המרכז למטייל תאילנד,
                    כבר מחכה לכם עם כל הטעמים המוכרים והביתיים, עם תפריט מגוון וחוויה מושלמת.
                    במקום "לשבור את הראש" מה לאכול, כנסו לאחת מהמסעדות שלנו הפזורות ברחבי תאילנד
                    ותיהנו מאוכל כמו שאתם אוהבים </p>
            </div>
            <div class="sec-list">
                <ul>
                    <li><span class="item-list-img"></span><span class="item-list-text">המרכז למטייל<br> צ’אנג מאי</span></li>
                    <li><span class="item-list-img"></span><span class="item-list-text">המרכז למטייל<br> קוסמוי</span></li>
                    <li><span class="item-list-img"></span><span class="item-list-text">מסעדת אטיקה<br> מלון איסטין מקאסאן</span></li>
                    <li><span class="item-list-img"></span><span class="item-list-text">המרכז למטייל<br> קווסאן בנגקוק</span></li>
                </ul>
            </div>
            <div class="sec-footer-text">
                <h3>מחפשים את המסעדה הקרובה אליכם?<br>
                    דברו אתנו וקפצו לבקר!</h3>
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
                        <li class="active" data-lat="13.762134" data-lng="100.494070"><span>בנגקוק</span></li>
                        <li data-lat="13.753554" data-lng="100.546656"><span>איסטין מקאסאן </span></li>
                        <li data-lat="9.532535" data-lng="100.062560"><span>קוסמוי</span></li>
                        <li data-lat="18.782025" data-lng="99.003468"><span>צ’אנג מאי</span></li>
                    </ul>
                </div>


            </div>
            <div class="wrap-mobile">
                <div class="g-map-mobile">

                </div>
                <div class="address-item tabs__content active">
                    <h3>מסעדת המרכז למטייל בקווסאן</h3>
                    <p class="en">45 CHARKRAPONG RD. CHANASONGKRAM  PRANAKORN BANGKOK THAILAND 10200</p>
                    <p class="he">45 ถ. จักพงษ์ แขวงชนะสงคราม เขต พระนคร กทม 10200</p>
                    <div class="button-section">
                        <a class="button" href="tel:+6602-2822774"><span>חייג למסעדה</span></a>
<!--                        <a class="button" href="mailto:bkk@lametayel-thailand.com"><span>הזמנת מקום</span></a>-->
                    </div>
                </div>
                <div class="address-item tabs__content">
<!--                    <h3>מסעדת אטיקה במלון איסטין מקאסאן</h3>-->
                    <h3>מסעדת המרכז למטייל במלון איסטין מקאסאן</h3>
                    <p class="en">1091/343 NEW PETCHBURI RD. MAKKASAN RAJTHEVEE BANGKOK THAILAND 10400</p>
                    <p class="he">ชั้น 23 ร้านอาหาร แอทติกา  โรงแรม อิสตินมักกะสัน ถ.เพชรบุรี เขต ราชเทวี กทม 10400</p>
                    <div class="button-section">
                        <a class="button" href="tel:"><span>חייג למסעדה</span></a>
<!--                        <a class="button" href="mailto:"><span>הזמנת מקום</span></a>-->
                    </div>
                </div>
                <div class="address-item tabs__content">
                    <h3>מסעדת המרכז למטייל סניף קוסמוי </h3>
                    <p class="en">156/16 Moo 2 T. Buphot, Koh Samui, Suratthani 84320</p>
                    <p class="he">156/16 หมู่ 2 ต.บ่อผุด อ.เกาะสมุย จ.สุราษฎร์ธานี 84320</p>
                    <div class="button-section">
                        <a class="button" href="tel:077-256206"><span>חייג למסעדה</span></a>
<!--                        <a class="button" href="mailto:chaweng@lametayel-thailand.com"><span>הזמנת מקום</span></a>-->
                    </div>
                </div>
                <div class="address-item tabs__content">
                    <h3>המרכז למטייל צ’אנג מאי</h3>
                    <p class="en">ADDRESS 86/1 SRIDONCHAI ROAD CHANGKLAN MUANG  CHIANGMAI 50100</p>
                    <p class="he"> 86/1 ถนนศรีดอนไชย ตำบลช้างคลาน อำเภอเมือง เชียงใหม่ 50100 ( ตรงข้ามพันทิปพลาซ่าเชียงใหม่ )</p>
                    <div class="button-section">
                        <a class="button" href="tel:053-235615"><span>חייג למסעדה</span></a>
<!--                        <a class="button" href="mailto:cnx@lametayel-thailand.com"><span>הזמנת מקום</span></a>-->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="htl-menu-section" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/restaurants-page-styles/img/background-fourtch-section4.png)">
        <div class="left-image"></div>
        <div class="right-image"></div>
        <div class="right-2-image"></div>
        <div class="main-holder">
            <div class="wrap-section">
                <h3>ומה בתפריט?</h3>
                <div class="description">
                    <p>השף שלנו כבר חשב על הכל... מגוון רחב של מנות לכל המשפחה (גם לילדים שבינינו)
                        מחכות לכם במסעדות המרכז למטייל תאילנד.<br>
                        סקרנים? זה הזמן להציץ בתפריט</p>
                </div>
                <div class="buttons-menu">
                    <a class="button" href="<?php echo get_stylesheet_directory_uri();?>/restaurants-page-styles/img/Lametayel-Menu.pdf" download><span>תפריט ראשי</span></a>
                    <a class="button" href="<?php echo get_stylesheet_directory_uri();?>/restaurants-page-styles/img/Lametayel-Kids-Menu.pdf" download><span>תפריט ילדים</span></a>
                </div>
            </div>
            <!--<div class="footer-section">-->
            <!--<h3>תעיפו מבט</h3>-->
            <!--</div>-->

        </div>
    </div>
    <div class="htl-slider-section">
        <div class="footer-section">
            <h3>תעיפו מבט</h3>
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
                <div class="item">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/restaurants-page-styles/img/optimized_contents/_MG_9440-min.jpg"alt="#">
                </div>
                <div class="item">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/restaurants-page-styles/img/optimized_contents/IMG_0462-min.jpg"alt="#">
                </div>
                <div class="item">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/restaurants-page-styles/img/optimized_contents/_MG_9976-min.jpg"alt="#">
                </div>
                <div class="item">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/restaurants-page-styles/img/optimized_contents/_MG_9418-min.jpg"alt="#">
                </div>
                <div class="item">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/restaurants-page-styles/img/optimized_contents/_MG_9523-min.jpg"alt="#">
                </div>
            </div>
        </div>
    </div>
    <div class="htl-contactform-section">
        <div class="main-holder">
            <h3>אפשר להציע לכם חברות?</h3>
            <p>הצטרפו למועדון הלקוחות שלנו, ותוכלו להנות מ-10% הנחה בכל ארוחה ומגוון הטבות נוספות</p>
            <div class="succes-nsg" hidden>
                <h3 class="desc"><span>תודה!</span> פרטיך התקבלו בהצלחה.</h3>
                <h3 class="mob"><span>תודה!</span><br> פרטיך התקבלו בהצלחה.</h3>
            </div>
            <div class="contact-form">
                <form action="" id="ajax_form_restouran" class="form form-validation" method="post">
                    <div class="form-row-wrap">
                        <div class="form-row form-grow-1">
                            <input name="name" class="form-control" required data-required="true" type="text"  placeholder="*שם מלא" pattern="^[A-Zא-תa-z ]{1,50}$" title="Name">
                        </div>
                        <div class="form-row form-grow-3">
                            <input name="tel" class="form-control" required data-required="true" type="text" placeholder="*טלפון" pattern="(((02)|(03)|(04)|(08)|(09)){1}[\d]{7,8})|(((071)|(072)|(073)|(074)|(076)|(077)|(078)|(079)|(050)|(051)|(052)|(053)|(054)|(055)|(056)|(058)|(059)){1}[\d]{6,7})" title="International, state or local telephone number">
                        </div>
                        <div class="form-row form-grow-4">
                            <input name="email" required class="form-control" type="email" placeholder="*דוא”ל">
                        </div>
                        <div class="form-row button form-grow-5">
                            <!--<button type="submit" id="btn" class="btn"><span class="btn-txt">צרפו אותנו </span></button>-->
                            <input type="submit" id="btn" class="btn" value="צרפו אותנו "/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



</div>

<!--<div class="menu"></div>-->

<?php get_footer(); ?>
