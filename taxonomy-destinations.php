<?php
/**
 * The template for displaying all single posts.
 *
 * @package podium
 */
use Podium\Config\Settings as settings;
$settings = new settings();

get_header();
$current_id = get_queried_object_id();

?>
<!--<div id="content" class="site-content row single_destination_page">-->
<!--    <div class="small-12 medium-8 columns">-->
<!--        <header class="entry-header">-->
<!--            <h1>--><?php //echo single_cat_title( '', false ); ?>
<!--                --><?php
//                //check which type of destination and send to template accordingly
//                $type = get_field('type_destination', 'destinations_'.$current_id);
//                switch ($type) {
//                    case 'main':
//                        $url = get_home_url().'/יעדים/';
//                        break;
//                    case 'hotel':
//                        $url = get_home_url().'/מלונות-בתאילנד/';
//                        break;
//                    case 'attraction':
//                        $url = get_home_url().'/אטרקציות-בתאילנד/';
//                        break;
//                    case 'flights':
//                        $url = get_home_url().'/טיסות-בתאילנד/';
//                        break;
//                    default:
//                } ?>
<!--                <a href="--><?php //echo $url;?><!--" class="blue_lnk">יעדים אחרים</a></h1>-->
<!--        </header><!-- .entry-header -->-->
<!--    </div>-->
<!--    <div class="small-12 medium-4 columns text-left">-->
<!--        --><?php //if(function_exists('bcn_display')){ ?>
<!--            <p id="breadcrumbs"> --><?php //bcn_display(); ?><!--</p>-->
<!--        --><?php //}?>
<!--    </div>-->
<!--    <div id="primary" class="content-area small-12 medium-12 --><?php //echo $settings->getContentClass('large-9', 'large-12'); ?><!-- columns  wow fadeInUp" data-wow-delay="0.5s">-->
<!--        <main id="main" class="site-main" role="main">-->
<!---->
<!--            --><?php ////while ( have_posts() ) : the_post(); ?>
<!---->
<!--            --><?php
//            $term_list = wp_get_post_terms($post->ID, 'destinations');
//
//            foreach ($term_list as $term){
//                if($term->parent != 0){
//                    $current_cat = $term;
//                }
//
//            } ?>
<!---->
<!--            --><?php
//            $parent_term = get_term( $current_cat->parent, 'destinations' ); //get it for sidebar txt
//
//
//            var_dump($current_id);
//            var_dump($parent_term->term_id, 'werewr');//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//            $term = get_term_children(51);
////            var_dump($term);
//
//
//            //check which type of destination and send to template accordingly
//            $type = get_field('type_destination', 'destinations_'.$current_id);
//            switch ($type) {
//                case 'main':
//                    get_template_part( 'directives/content', 'single_main_destination' );
//                    $sidebar_ttl = 'רוצה לתכנן חופשה בתאילנד?';
//                    break;
//                case 'hotel':
//                    get_template_part( 'directives/content', 'single_hotel_type_destination' );
//                    $sidebar_ttl = 'רוצה להזמין מלון ב' . $parent_term->name . "?";
//                    break;
//                case 'attraction':
//                    get_template_part( 'directives/content', 'single_attraction_type_destination' );
//                    $sidebar_ttl = 'רוצה כרטיס מוזל לאטרקציות ב' . $parent_term->name . "?";
//                    break;
//                case 'flights':
//                    get_template_part( 'directives/content', 'single_flight_type_destination' );//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//                    break;
//                case 'article':
//                    get_template_part( 'directives/content', 'single_article_type_destination' );
//                    break;
//                default:
//
//            } ?>
<!---->
<!--            --><?php // ?>
<!---->
<!--            --><?php ////endwhile; // End of the loop. ?>
<!--        </main><!-- #main -->-->
<!--    </div><!-- #primary -->-->
<!--    --><?php //if( $settings->displaySidebar() ){ // has sidebar ?>
<!--        --><?php
//        include(locate_template( 'directives/sidebar.php' )); ?>
<!--    --><?php //} ?>
<!--</div><!-- #content -->-->



















<div class="hlt-wraper flights-page">

    <div class="wrap-header-section">
        <div class="main-holder">
            <div class="button-section">
                <a href="">טיסות בתאילנד</a>
            </div>
            <div class="wrap-holder tabs">

                <div class="left-section">
                    <div class="wrap-text">
                        <h3>קוסמוי-בנגקוק</h3>
                        <p>ע"מ לקבל הצעה אטרקטיבית לטיסות פנים בתאילנד, אנא פנו אלינו עם הפרטים הבאים:
                            תאריכי טיסות רצויים, לאילו יעדים, ובמידה ומדובר במשפחות יש לציין את גילאי הילדים. אנא בדקו באופן שוטף את המייל שלכם לוודא שהמייל מאיתנו לא נכנס לדואר ספאם/גאנק. למי ששולח מייל מהעבודה נא לציין מייל פרטי בנוסף</p>
                    </div>

                    <ul class="buttons tabs__caption menu-lisy">
                        <li class="button active">
                            <span>מפוקט לבנגקוק</span>
                        </li>
                        <li class="button">
                            <span>מקוסמוי לבנגקוק</span>
                        </li>
                        <li class="button">
                            <span>מקו צ’אנג לבנגקוק</span>
                        </li>
                        <li class="button">
                            <span>מקראבי לבנגקוק</span>
                        </li>
                        <li class="button">
                            <span>מצ’אנג ראי לבנגקוק</span>
                        </li>
                        <li class="button">
                            <span>מצ’אנג מאי לבנגקוק</span>
                        </li>
                    </ul>
                </div>
                <div class="right-section">

                    <div class="wrap-img tabs__content active" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/flights-single/phuket-bangkok.png)"></div>
                    <div class="wrap-img tabs__content" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/flights-single/samui-bangkok.png)"></div>
                    <div class="wrap-img tabs__content" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/flights-single/changrai-bangkok.png)"></div>
                    <div class="wrap-img tabs__content" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/flights-single/krabi-bangkok.png)"></div>
                    <div class="wrap-img tabs__content" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/flights-single/changmai-bangkok.png)"></div>
                    <div class="wrap-img tabs__content" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/flights-single/changmai-bangkok.png)"></div>
                </div>

            </div>

        </div>
        <div class="hotels-section">
            <div class="background-holder"></div>
            <div class="main-holder">
                <h3>מלונות מומלצים בבנגקוק</h3>
                <ul class="items slick-slider">
                    <li class="item">
                        <a href="#" class="wrap-list">
                            <span class="image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/flights-single/hotel-img.png)"></span>
                            <span class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </span>
                            <span class="wrap-title">
								<span class="title">Amari Watergate<br> Hotel Bangkok</span>
							</span>
                            <span class="description">מלון אמארי ווטרגייט הינו מהמלונות המשובחים שיש בעיר בנגקוק בדרגת 5 כוכבים</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="wrap-list">
                            <span class="image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/flights-single/hotel-img.png)"></span>
                            <span class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </span>
                            <span class="wrap-title">
								<span class="title">Amari Watergate<br> Hotel Bangkok</span>
							</span>
                            <span class="description">מלון אמארי ווטרגייט הינו מהמלונות המשובחים שיש בעיר בנגקוק בדרגת 5 כוכבים</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="wrap-list">
                            <span class="image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/flights-single/hotel-img.png)"></span>
                            <span class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </span>
                            <span class="wrap-title">
								<span class="title">Amari Watergate<br> Hotel Bangkok</span>
							</span>
                            <span class="description">מלון אמארי ווטרגייט הינו מהמלונות המשובחים שיש בעיר בנגקוק בדרגת 5 כוכבים</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="wrap-list">
                            <span class="image" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/flights-single/hotel-img.png)"></span>
                            <span class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </span>
                            <span class="wrap-title">
								<span class="title">Amari Watergate<br> Hotel Bangkok</span>
							</span>
                            <span class="description">מלון אמארי ווטרגייט הינו מהמלונות המשובחים שיש בעיר בנגקוק בדרגת 5 כוכבים</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>



<?php get_footer(); ?>
