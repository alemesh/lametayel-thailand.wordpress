<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *Template Name: Front Page
 *
 * @package podium
 */
use Podium\Config\Settings as settings;
$settings = new settings();

get_header();
?>





    <div class="hlt-wraper">
<!--        <div class="massange"><span>דברו איתנו </span></div>-->
        <div class="header" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/background-header.png)">
            <div class="htl-contactform-section">
                <div class="main-holder-form">
                    <h3>קשת של אפשרויות לחופשה קסומה בתאילנד</h3>
                    <div class="succes-nsg" hidden>
                        <h3 class="desc"><span>תודה!</span> פרטיך התקבלו בהצלחה.</h3>
                        <h3 class="mob"><span>תודה!</span><br> פרטיך התקבלו בהצלחה.</h3>
                    </div>
                    <div class="contact-form">
                        <form action="" name="search-attractions" id="ajax_form" class="form form-validation" method="post" novalidate>
                            <div class="form-row-wrap">
                                <div class="form-row center">
                                    <select required name="people" id="sources" class="form-control custom-select custom-select-1 people" placeholder="מי אתם?">
                                        <?php
                                        $taxonomy_name = 'destinations';
                                        $category = get_term_by('name', 'People', $taxonomy_name);
                                        $children = get_term_children($category->term_id, 'destinations');
                                        foreach ($children as $child) {
                                            $term = get_term_by('id', $child, $taxonomy_name)
                                            ?>
                                            <option value="<?=$child ?>"><?= $term->name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-row center">
                                    <select required name="sources-2" id="sources-2" class="form-control custom-select custom-select-2 sources" placeholder="לכמה זמן?">
                                        <option value="בחר 1">עד עשרה ימים</option>
                                        <option value="בחר 2">מעל עשרה ימים</option>
                                    </select>
                                </div>
                                <div class="form-row center">
                                    <select required name="attractions" id="sources-3" class="form-control custom-select custom-select-3 attractions" multiple="multiple" placeholder="מעוניינים לשמוע על...">
                                        <?php
                                        $taxonomy_name = 'destinations';
                                        $category = get_term_by('name', 'Attractions', $taxonomy_name);
                                        $children = get_term_children($category->term_id, 'destinations');
                                        foreach ($children as $child) {
                                            $term = get_term_by('id', $child, $taxonomy_name)
                                            ?>
                                            <option value="<?=$child ?>"><?= $term->name ?></option>
                                        <?php } ?>
                                    </select>
                                    <span class="multi-choese">(ניתן לבחור מספר אפשרויות)</span>
                                </div>
                                <div class="form-row button form-grow-5">
                                    <span><i class="fas fa-search"></i></span>
                                    <!--<button type="submit" id="btn" class="btn"><span class="btn-txt">צרפו אותנו </span></button>-->
                                    <input type="submit" id="btn" class="btn" value="מצא לי חופשה"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="second-section">
            <div class="background-holder"></div>
            <div class="main-holder">
                <ul class="items slick-slider">
                    <li class="item">
                        <a href="<?php echo get_home_url();?>/packages/טיולי-משפחות/" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/banner_4.jpg)">
<!--                            <span>מקדימים להזמין</span>-->
<!--                            <span>חופשה בחגים ונהנים</span>-->
<!--                            <span>ממחיר אטרקטיבי </span>-->
                        </a>
                    </li>
                    <li class="item">
                        <a href="http://landing.lametayel-thailand.com/lp2/" target="_blank"  rel="nofollow" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/banner_2.jpg)">
<!--                            <span>קיץ חם</span>-->
<!--                            <span>ברשת המסעדות שלנו</span>-->
                        </a>
                    </li>
                    <li class="item">
                        <a href="<?php echo get_home_url();?>/restaurants/" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/banner_3.jpg)">
<!--                            <span>חבילות ירח דבש</span>-->
<!--                            <span>קסומות</span>-->
                        </a>
                    </li>
                </ul>
                <h3>יעדים נבחרים</h3>
            </div>
        </div>


        <div class="third-section">
            <ul class="items">
                <li class="item">
                    <a href="<?php echo get_home_url();?>/destinations/%D7%A7%D7%95%D7%A1%D7%9E%D7%95%D7%99/" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/third-section-item-1.png);">
                        <span class="text-item"></span>
                        <span class="text">קוסמוי</span>
                    </a>
                </li>
                <li class="item">
                    <a href="<?php echo get_home_url();?>/destinations/%D7%A6%D7%90%D7%A0%D7%92-%D7%9E%D7%90%D7%99/" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/third-section-item-3.png);">
                        <span class="text-item"></span>
                        <span class="text">צ’אנג מאי</span>
                    </a>
                </li>
                <li class="item">
                    <a href="<?php echo get_home_url();?>/destinations/%D7%A7%D7%95%D7%A4%D7%A0%D7%92%D7%9F/" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/third-section-item-2.png);">
                        <span class="text-item"></span>
                        <span class="text">קופנגן</span>
                    </a>
                </li>
                <li class="item">
                    <a href="<?php echo get_home_url();?>/destinations/%D7%A7%D7%A0%D7%A6%D7%A0%D7%91%D7%95%D7%A8%D7%99/" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/third-section-item-4.png);">
                        <span class="text-item"></span>
                        <span class="text">קנצ’נבורי</span>
                    </a>
                </li>
                <li class="item mobile-hidden">
                    <a href="<?php echo get_home_url();?>/destinations/%D7%A4%D7%95%D7%A7%D7%98/" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/third-section-item-5.png);">
                        <span class="text-item"></span>
                        <span class="text">פוקט</span>
                    </a>
                </li>
                <li class="item mobile-hidden">
                    <a href="/destinations/%D7%91%D7%A0%D7%92%D7%A7%D7%95%D7%A7/" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/third-section-item-6.png);">
                        <span class="text-item"></span>
                        <span class="text">בנגקוק</span>
                    </a>
                </li>

            </ul>
            <div class="wrap-button">
                <a href="<?php echo get_home_url();?>/%D7%99%D7%A2%D7%93%D7%99%D7%9D/" class="button">לרשימת היעדים המלאה</a>
            </div>
        </div>

        <div class="fourth-section">
            <div class="background-lier-fourth-section" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/bg-lier-fourth-section.png)"></div>
            <div class="main-holder">
                <h3>למה להזמין דרכינו חופשה?</h3>
                <ul class="items">
                    <li class="item">
                        <div class="wrap-img">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/fourth-section-item-3.png" alt="">
                        </div>
                        <span>ליווי אישי</span>
                    </li>
                    <li class="item">
                        <div class="wrap-img">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/fourth-section-item-2.png" alt="">
                        </div>
                        <span>מענה 24/7 בעברית!</span>
                    </li>
                    <li class="item">
                        <div class="wrap-img">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/fourth-section-item-4.png" alt="">
                        </div>
                        <span>ניסיון עשיר</span>
                    </li>
                    <li class="item">
                        <div class="wrap-img">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/fourth-section-item-1.png" alt="">
                        </div>
                        <span>מחירים אטרקטיביים</span>
                    </li>
                </ul>
            </div>
        </div>


        <div class="fifth-section">
            <div class="background-lier-fifth-section" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/background-lier-fourth-section.png)"></div>
            <div class="main-holder">
                <h3>הפופולריים שלנו</h3>


                <ul class="items slick-slider-2">
                    <?php
                    define('count_order', '0') ;
                    $count_order = 1;
                    if( have_rows('pages') ):?>
                        <?php while ( have_rows('pages') ) : the_row();
                            $post_object = get_sub_field('post');
                            if( $post_object ):
                                $post = $post_object;
                                setup_postdata( $post );
                                ?>
                                <?php get_template_part( 'directives/content', 'post_block_1' );
                                $count_order++;
                                ?>
                            <?php endif;
                            wp_reset_postdata();?>
                        <?php endwhile; ?>
                    <?php endif;?>
                    <?php
                    while ( have_rows('posts') ) : the_row();
                        $post_object = get_sub_field('post');
                        if( $post_object ):
                            $post = $post_object;
                            setup_postdata( $post );
                            ?>
                                <?php get_template_part( 'directives/content', 'post_block_1' );
                            $count_order++;
                                ?>
                        <?php endif;
                        wp_reset_postdata();?>
                    <?php endwhile; ?>



                    <li class="item">
                        <a href="<?php echo get_home_url();?>/restaurants/">
							<span class="wrap-img">
								<img src="<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/fifth-section-item-5.png" alt="">
							</span>
                            <span class="wrap-title order-5">
								<span class="title">מסעדת המרכז למטייל</span>
							</span>
                            <span class="description">בואו לסעוד ולהנות ברשת המסעדות של המרכז למטייל תאילנד</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>

        <div class="sixth-section">
            <div class="main-holder">
                <ul class="items slick-slider-3">
                    <li class="item">
						<span class="wrap-list">
							<span class="image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/sixth-section-item-1.png)"></span>
							<span class="wrap-title">
                                <a href="<?php echo get_home_url();?>/%D7%91%D7%A0%D7%92%D7%A7%D7%95%D7%A7-%D7%9E%D7%93%D7%95%D7%A2-%D7%94%D7%99%D7%90-%D7%9B%D7%94-%D7%A4%D7%95%D7%A4%D7%95%D7%9C%D7%90%D7%A8%D7%99%D7%AA-%D7%9C%D7%AA%D7%99%D7%99%D7%A8%D7%99%D7%9D/">
                                    <span class="title">בנגקוק - מדוע היא כה<br> פופולארית לתיירים</span>
                                </a>

							</span>
							<span class="description">בירת תאילנד היא אחת הערים המתוירות ביותר בעולם. לפי חברת המחקר...</span>
							<a href="<?php echo get_home_url();?>/%D7%91%D7%A0%D7%92%D7%A7%D7%95%D7%A7-%D7%9E%D7%93%D7%95%D7%A2-%D7%94%D7%99%D7%90-%D7%9B%D7%94-%D7%A4%D7%95%D7%A4%D7%95%D7%9C%D7%90%D7%A8%D7%99%D7%AA-%D7%9C%D7%AA%D7%99%D7%99%D7%A8%D7%99%D7%9D/" class="button">לכתבה המלאה</a>
						</span>
                    </li>
                    <li class="item">
						<span class="wrap-list">
							<span class="image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/sixth-section-item-2.png)"></span>
							<span class="wrap-title">
                                <a href="<?php echo get_home_url();?>/7-%D7%93%D7%91%D7%A8%D7%99%D7%9D-%D7%A9%D7%A6%D7%A8%D7%99%D7%9A-%D7%9C%D7%93%D7%A2%D7%AA-%D7%9C%D7%A7%D7%A8%D7%90%D7%AA-%D7%98%D7%99%D7%95%D7%9C-%D7%92%D7%99%D7%A4%D7%99%D7%9D-%D7%91%D7%AA%D7%90/">
                                    <span class="title">7 דברים שצריך לדעת<br> לקראת טיול ג'יפים בתאילנד</span>
                                </a>
							</span>
							<span class="description">תאילנד היא מדינה פופולרית מאד לחופשות ולטיולים, במיוחד בקרב...</span>
							<a href="<?php echo get_home_url();?>/7-%D7%93%D7%91%D7%A8%D7%99%D7%9D-%D7%A9%D7%A6%D7%A8%D7%99%D7%9A-%D7%9C%D7%93%D7%A2%D7%AA-%D7%9C%D7%A7%D7%A8%D7%90%D7%AA-%D7%98%D7%99%D7%95%D7%9C-%D7%92%D7%99%D7%A4%D7%99%D7%9D-%D7%91%D7%AA%D7%90/" class="button">לכתבה המלאה</a>
						</span>
                    </li>
                    <li class="item">
						<span class="wrap-list">
							<span class="image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/sixth-section-item-3.png)"></span>
							<span class="wrap-title">
                                <a href="<?php echo get_home_url();?>/%D7%90%D7%98%D7%A8%D7%A7%D7%A6%D7%99%D7%95%D7%AA-%D7%9C%D7%99%D7%9C%D7%93%D7%99%D7%9D-%D7%91%D7%91%D7%A0%D7%92%D7%A7%D7%95%D7%A7/">
                                    <span class="title">אטרקציות לילדים בבנגקוק</span>
                                </a>
							</span>
							<span class="description">בנגקוק הינה יעד אטרקטיבי לא רק למטיילים בודדים או לזוגות שבאו...</span>
							<a href="<?php echo get_home_url();?>/%D7%90%D7%98%D7%A8%D7%A7%D7%A6%D7%99%D7%95%D7%AA-%D7%9C%D7%99%D7%9C%D7%93%D7%99%D7%9D-%D7%91%D7%91%D7%A0%D7%92%D7%A7%D7%95%D7%A7/" class="button">לכתבה המלאה</a>
						</span>
                    </li>
                    <li class="item">
						<span class="wrap-list">
							<span class="image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/sixth-section-item-4.png)"></span>
							<span class="wrap-title">
                                <a href="<?php echo get_home_url();?>/%D7%98%D7%99%D7%95%D7%9C-%D7%99%D7%A8%D7%97-%D7%93%D7%91%D7%A9-%D7%91%D7%AA%D7%90%D7%99%D7%9C%D7%A0%D7%93/">
                                    <span class="title">טיול ירח דבש בתאילנד</span>
                                </a>
							</span>
							<span class="description">אין ספק שתאילנד האקזוטית נמנית על היעדים המבוקשים ביותר לירח דבש... </span>
							<a href="<?php echo get_home_url();?>/%D7%98%D7%99%D7%95%D7%9C-%D7%99%D7%A8%D7%97-%D7%93%D7%91%D7%A9-%D7%91%D7%AA%D7%90%D7%99%D7%9C%D7%A0%D7%93/" class="button">לכתבה המלאה</a>
						</span>
                    </li>
                </ul>
                <div class="wrap-button">
                    <a href="<?php echo get_home_url();?>/בלוג/" class="button">למגזין המלא</a>
                </div>
            </div>
        </div>

        <div class="seventh-section">
<!--            <div class="background-holder"></div>-->
            <div class="main-holder">
                <div class="wrap-insta">
                    <a href="https://www.instagram.com/lametayel_thailand/" target="_blank" class="insta"><i class="fab fa-instagram"></i></a>
                </div>
                <h3>עקבו אחרנו</h3>
                <?php dynamic_sidebar( 'instagram-1' ); ?>

<!--                <ul class="instagram-pics instagram-size-thumbnail">-->
<!--                    <li>-->
<!--                        <a href="#" target="_blank">-->
<!--                            <img src="--><?php //echo get_stylesheet_directory_uri();?><!--/home-page-styles/img/insta-item-1.png" alt="alt" title="title">-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" target="_blank">-->
<!--                            <img src="--><?php //echo get_stylesheet_directory_uri();?><!--/home-page-styles/img/insta-item-2.png" alt="alt" title="title">-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" target="_blank">-->
<!--                            <img src="--><?php //echo get_stylesheet_directory_uri();?><!--/home-page-styles/img/insta-item-3.png" alt="alt" title="title">-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" target="_blank">-->
<!--                            <img src="--><?php //echo get_stylesheet_directory_uri();?><!--/home-page-styles/img/insta-item-4.png" alt="alt" title="title">-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" target="_blank">-->
<!--                            <img src="--><?php //echo get_stylesheet_directory_uri();?><!--/home-page-styles/img/insta-item-5.png" alt="alt" title="title">-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#" target="_blank">-->
<!--                            <img src="--><?php //echo get_stylesheet_directory_uri();?><!--/home-page-styles/img/insta-item-5.png" alt="alt" title="title">-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="mobile-hidden">-->
<!--                        <a href="#" target="_blank">-->
<!--                            <img src="--><?php //echo get_stylesheet_directory_uri();?><!--/home-page-styles/img/insta-item-4.png" alt="alt" title="title">-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="mobile-hidden">-->
<!--                        <a href="#" target="_blank">-->
<!--                            <img src="--><?php //echo get_stylesheet_directory_uri();?><!--/home-page-styles/img/insta-item-3.png" alt="alt" title="title">-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="mobile-hidden">-->
<!--                        <a href="#" target="_blank">-->
<!--                            <img src="--><?php //echo get_stylesheet_directory_uri();?><!--/home-page-styles/img/insta-item-2.png" alt="alt" title="title">-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="mobile-hidden">-->
<!--                        <a href="#" target="_blank">-->
<!--                            <img src="--><?php //echo get_stylesheet_directory_uri();?><!--/home-page-styles/img/insta-item-1.png" alt="alt" title="title">-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->
            </div>
        </div>




    </div>

<!--    <script src="--><?php //echo get_stylesheet_directory_uri();?><!--/home-page-styles/js/scripts.min.js"></script>-->
<!---->
<!--    </body>-->
<!--    </html>-->

<script>

</script>


<?php get_footer(); ?>