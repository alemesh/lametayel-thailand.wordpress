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




$type = get_field('type_destination', 'destinations_'.$current_id);
if($type !=  'flights'){









?>
<div id="content" class="site-content row single_destination_page">
    <div class="small-12 medium-8 columns">
        <header class="entry-header">
            <h1><?php echo single_cat_title( '', false ); ?>
                <?php
                //check which type of destination and send to template accordingly
                $type = get_field('type_destination', 'destinations_'.$current_id);
                switch ($type) {
                    case 'main':
                        $url = get_home_url().'/יעדים/';
                        break;
                    case 'hotel':
                        $url = get_home_url().'/מלונות-בתאילנד/';
                        break;
                    case 'attraction':
                        $url = get_home_url().'/אטרקציות-בתאילנד/';
                        break;
                    case 'flights':
                        $url = get_home_url().'/טיסות-בתאילנד/';
                        break;
                    default:
                } ?>
                <a href="<?php echo $url;?>" class="blue_lnk">יעדים אחרים</a></h1>
        </header><!-- .entry-header -->
    </div>
    <div class="small-12 medium-4 columns text-left">
        <?php if(function_exists('bcn_display')){ ?>
            <p id="breadcrumbs"> <?php bcn_display(); ?></p>
        <?php }?>
    </div>
    <div id="primary" class="content-area small-12 medium-12 <?php echo $settings->getContentClass('large-9', 'large-12'); ?> columns  wow fadeInUp" data-wow-delay="0.5s">
        <main id="main" class="site-main" role="main">

            <?php //while ( have_posts() ) : the_post(); ?>

            <?php
            $term_list = wp_get_post_terms($post->ID, 'destinations');

            foreach ($term_list as $term){
                if($term->parent != 0){
                    $current_cat = $term;
                }

            } ?>

            <?php
            $parent_term = get_term( $current_cat->parent, 'destinations' ); //get it for sidebar txt


//            var_dump($current_id);
//            var_dump($parent_term->term_id, 'werewr');//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//            $term = get_term_children(51);
//            var_dump($term);


            //check which type of destination and send to template accordingly
            $type = get_field('type_destination', 'destinations_'.$current_id);
            switch ($type) {
                case 'main':
                    get_template_part( 'directives/content', 'single_main_destination' );
                    $sidebar_ttl = 'רוצה לתכנן חופשה בתאילנד?';
                    break;
                case 'hotel':
                    get_template_part( 'directives/content', 'single_hotel_type_destination' );
                    $sidebar_ttl = 'רוצה להזמין מלון ב' . $parent_term->name . "?";
                    break;
                case 'attraction':
                    get_template_part( 'directives/content', 'single_attraction_type_destination' );
                    $sidebar_ttl = 'רוצה כרטיס מוזל לאטרקציות ב' . $parent_term->name . "?";
                    break;
                case 'flights':
                    get_template_part( 'directives/content', 'single_flight_type_destination' );//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                    break;
                case 'article':
                    get_template_part( 'directives/content', 'single_article_type_destination' );
                    break;
                default:

            } ?>

            <?php  ?>

            <?php //endwhile; // End of the loop. ?>
        </main><!-- #main -->
    </div><!-- #primary -->
    <?php if( $settings->displaySidebar() ){ // has sidebar ?>
        <?php
        include(locate_template( 'directives/sidebar.php' )); ?>
    <?php } ?>
</div><!-- #content -->







<?php } elseif($type ==  'flights'){?>





<?php $posts = get_posts(array(
    'numberposts'=>-1,
    'post_type' => 'flight',
    'tax_query' => array(
        array(
            'taxonomy' => 'destinations',
            'field' => 'term_id',
            'terms' => $current_id,
            'operator' => 'AND',
        )
    )
));

?>

<div class="hlt-wraper flights-page">

    <div class="wrap-header-section">
        <div class="main-holder">
            <div class="button-section">
                <a href="<?php echo $url;?>"><?php echo single_cat_title( '', false ); ?></a>
            </div>
            <div class="wrap-holder tabs">

                <div class="left-section">
                    <div class="wrap-text">
                        <h3>קוסמוי-בנגקוק</h3>
<!--                        --><?php //echo term_description( $current_id, 'destinations' ) ?>
                        <p>ע"מ לקבל הצעה אטרקטיבית לטיסות פנים בתאילנד, אנא פנו אלינו עם הפרטים הבאים:
                            תאריכי טיסות רצויים, לאילו יעדים, ובמידה ומדובר במשפחות יש לציין את גילאי הילדים. אנא בדקו באופן שוטף את המייל שלכם לוודא שהמייל מאיתנו לא נכנס לדואר ספאם/גאנק. למי ששולח מייל מהעבודה נא לציין מייל פרטי בנוסף</p>
                    </div>

                    <ul class="buttons tabs__caption menu-lisy">
                        <?php
//                        var_dump($posts);
                        foreach ($posts as $flights_buttom){?>
                            <li class="button">
                                <span>
                                    <?php if(get_field('from',$flights_buttom->ID)){
                                        $from = get_term_by('id', get_field('from',$flights_buttom->ID), 'destinations');
                                        echo 'מ'.$from->name;
                                    }
                                    if(get_field('too',$flights_buttom->ID)){
                                        $too = get_term_by('id', get_field('too',$flights_buttom->ID), 'destinations');
                                        echo ' ל'.$too->name;
                                    }?>
                                </span>
                            </li>

                            <?php















                        }

                        ?>
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






        <?php
        foreach ($posts as $flights_buttom){?>


<?php
            //                            var_dump($flights_buttom->ID);
            //                            var_dump($too->name);

            //                            $term_id = get_field('too');
            //                            $taxonomy_name = 'destinations';
            //                            $termchildren = get_term_children( $term_id, $taxonomy_name );





            //get children links
            $destination = get_term_by('id', get_field('too',$flights_buttom->ID), 'destinations');
            $term_id = get_field('too');
            $taxonomy_name = 'destinations';
            $termchildren = get_term_children( $term_id, $taxonomy_name );
            foreach ( $termchildren as $child ) {
            $term = get_term_by( 'id', $child, $taxonomy_name );
            $type = get_field('type_destination', 'destinations_'.$term->term_id);
            switch ($type) {
            case 'hotel':
            $all_hotel_lnk = get_term_link( $child, $taxonomy_name );
            break;
            case 'attraction':
            $all_attraction_lnk = get_term_link( $child, $taxonomy_name );
            break;
            case 'article':
            $all_article_lnk = get_term_link( $child, $taxonomy_name );
            break;
            default:
            }
            } ?>
            <?php //hotels block
            $section_var = array(
                'repeaterName' => 'hotels',
                'subFieldName' => 'hotel',
                'id' => $flights_buttom->ID,
                'section_ttl' => 'מלונות מומלצים ב'. $too->name,
                'section_ttl_lnk' => $all_hotel_lnk,
            );
            include(locate_template('directives/posts_section.php')); ?>

            <?php //attractions block
            $section_var = array(
                'repeaterName' => 'attractions',
                'subFieldName' => 'attraction',
                'id' => $flights_buttom->ID,
                'section_ttl' => 'אטרקציות מומלצות ב' .$too->name,
                'section_ttl_lnk' => $all_attraction_lnk,
            );
            include(locate_template('directives/posts_section.php'));
            ?>





        <?php }?>







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
<?}?>


<?php get_footer(); ?>
