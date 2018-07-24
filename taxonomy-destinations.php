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

if($type !=  'flights' && $type != 'attraction' && $type !=  'hotel' && $type !=  'main'){


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




<!--TODO Flights page-->


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

    <div class="wrap-header-section tabs">
        <div class="main-holder">
            <div class="button-section">
                <a href="<?php echo $url;?>"><?php echo single_cat_title( '', false );?></a>
            </div>
            <div class="wrap-holder ">

                <div class="left-section">
                    <div class="wrap-text">
<!--                        <h3>קוסמוי-בנגקוק</h3>-->
                        <h3><?php the_title()?></h3>
<!--                        --><?php //var_dump(wp_get_current_user())?>
<!--                        <p>--><?php //echo $posts[0]->post_content;?><!--</p>-->
<!--                        --><?php //echo term_description( $current_id, 'destinations' ); ?>

<!--                        <p>ע"מ לקבל הצעה אטרקטיבית לטיסות פנים בתאילנד, אנא פנו אלינו עם הפרטים הבאים:-->
<!--                            תאריכי טיסות רצויים, לאילו יעדים, ובמידה ומדובר במשפחות יש לציין את גילאי הילדים. אנא בדקו באופן שוטף את המייל שלכם לוודא שהמייל מאיתנו לא נכנס לדואר ספאם/גאנק. למי ששולח מייל מהעבודה נא לציין מייל פרטי בנוסף</p>-->
                    </div>

                    <ul class="buttons tabs__caption menu-lisy">
                        <?php
//                        var_dump($posts);
                        foreach ($posts as $flights_buttom){
//                            var_dump($flights_buttom->ID);
                            ?>
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
                    <?php
                    $counter = 0;
                    foreach ($posts as $flights_buttom){?>

                    <div class="wrap-img tabs__content <?php echo ($counter == 0)?'active':'';?>" style="background-image: url(<?php echo get_post_meta( $flights_buttom->ID, '_map_image_value_key', 1 );?>)"></div>

                    <?php
                        $counter++;
                    }?>
                </div>

            </div>

        </div>




        <?php
        $counter = 0;
        foreach ($posts as $flights_buttom){?>
        <div class="hotels-section tabs__content2 <?php echo ($counter == 0)?'active':''?>">
            <div class="background-holder"></div>
            <div class="main-holder">

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

            ?>

            <?php //print posts section
            if( have_rows($section_var['repeaterName'], $section_var['id']) ){ ?>

                <h3><?php echo $section_var['section_ttl']; ?>
<!--                    --><?php //if($section_var['section_ttl_lnk']){ ?>
<!--                        <a href="--><?php //echo $section_var['section_ttl_lnk'];?><!--" class="blue_lnk">הכל</a>-->
<!--                    --><?php //}?>
                </h3>
<!--                <ul class="items slick-slider">-->
                <ul class="items">
                    <?php
                    //if is mobile display posts as slider
                    if( wp_is_mobile() ){ ?>

                            <?php }
                            while ( have_rows($section_var['repeaterName'], $section_var['id']) ) : the_row();
                                $post_object1 = get_sub_field($section_var['subFieldName']);
                                if( $post_object1 ){
                                    $post = $post_object1;
                                    setup_postdata( $post );
                                    ?>
                    <li class="item">

                        <a href="<?php echo get_the_permalink();?>" class="wrap-list">
                            <span class="image" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)"></span>
                            <span class="stars">
                                <?php if(get_post_type()==='hotel'){
                                    $rating = get_field('rating');?>
                                    <div class="rating"><?php
                                    for($i=0; $i<$rating; $i++){
                                        if ( $rating == '3.5' && $i == $rating - 0.5 || $rating == '4.5' && $i == $rating - 0.5){ ?>
                                            <span class="fa fa-star checked"></span>
                                        <?php }else{?>
                                            <span class="fa fa-star checked"></span>
                                        <?php }
                                    } ?>
                                    </div><?php
                                }?>

                            </span>
                            <span class="wrap-title">
								<span class="title"><?php echo get_the_title();?></span>
							</span>
                            <span class="description"><?php echo excerpt(20);?></span>
                        </a>

                    </li>
                                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                <?php }
                            endwhile;?>
                            <?php
                            //if is mobile display posts as slider
                            if( wp_is_mobile() ){ ?>

                <?php } ?>
                </ul>

                <?php
            } ?>





            <?php //attractions block
            $section_var = array(
                'repeaterName' => 'attractions',
                'subFieldName' => 'attraction',
                'id' => $flights_buttom->ID,
                'section_ttl' => 'אטרקציות מומלצות ב' .$too->name,
                'section_ttl_lnk' => $all_attraction_lnk,
            );
//            include(locate_template('directives/posts_section.php'));
            ?>



            <?php //print posts section
            if( have_rows($section_var['repeaterName'], $section_var['id']) ){ ?>

                <h3><?php echo $section_var['section_ttl']; ?>
<!--                    --><?php //if($section_var['section_ttl_lnk']){ ?>
<!--                        <a href="--><?php //echo $section_var['section_ttl_lnk'];?><!--" class="blue_lnk">הכל</a>-->
<!--                    --><?php //}?>
                </h3>
<!--                <ul class="items slick-slider">-->
                <ul class="items">
                    <?php
                    //if is mobile display posts as slider
                    if( wp_is_mobile() ){ ?>

                    <?php }
                    while ( have_rows($section_var['repeaterName'], $section_var['id']) ) : the_row();
                        $post_object1 = get_sub_field($section_var['subFieldName']);
                        if( $post_object1 ){
                            $post = $post_object1;
                            setup_postdata( $post );
                            ?>
                            <!--                                    <div class="small-12 medium-4 end columns text-center">-->
                            <li class="item">
                                <a href="<?php echo get_the_permalink();?>" class="wrap-list">
                                    <span class="image" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)"></span>
                                    <span class="stars">
                                <?php if(get_post_type()==='hotel'){
                                    $rating = get_field('rating');?>
                                    <div class="rating"><?php
                                    for($i=0; $i<$rating; $i++){
                                        if ( $rating == '3.5' && $i == $rating - 0.5 || $rating == '4.5' && $i == $rating - 0.5){ ?>
                                            <span class="fa fa-star checked"></span>
                                        <?php }else{?>
                                            <span class="fa fa-star checked"></span>
                                        <?php }
                                    } ?>
                                    </div><?php
                                }?>

                            </span>
                                    <span class="wrap-title">
								<span class="title"><?php echo get_the_title();?></span>
							</span>
                                    <span class="description"><?php echo excerpt(20);?></span>
                                </a>

                            </li>
                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        <?php }
                    endwhile;?>
                    <?php
                    //if is mobile display posts as slider
                    if( wp_is_mobile() ){ ?>

                    <?php } ?>
                </ul>

                <?php
            } ?>
            </div>
        </div>

        <?php
            $counter++;
        }?>

    </div>



    </div>

</div>

<?php }elseif($type == 'attraction'){ ?>


<!--TODO Attractions page-->


<?php
$current_id = get_queried_object_id();
$current_name = single_cat_title( '', false );
?>


    <?php
    //get all hotels that are connected to this taxonomy
    $category = get_term_by('id', $current_id, 'destinations');
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type' => 'attraction',
        'order' => 'DESC',
        'order_by'  => 'date',
        'posts_per_page' => 12,
        'destinations' => $category->name,
        'paged' => $paged,
    );
    $custom_query = new WP_Query($args);
    if($custom_query->have_posts() ) { ?>
        <div class="content_wrapper" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="up_img">
                <div class="text_in_up_img"><?php echo single_cat_title( '', false ); ?></div>
                <img class="up_img_tail img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/Lametayel-Thailand-all-page-styles/img/corner-img.png">
            </div>
            <div class="up_box">
                <div class="main_text">
                    <?php echo term_description( $current_id, 'destinations' ) ?>
                </div>
                <div class="main_left_up_box">
                    <div class="left_text_box">
                        <?php if(get_field('txt_under_form', 'option')){ ?>
                            <?php echo get_field('txt_under_form', 'option'); ?>
                        <?php	}?>
                    </div>
                </div>
            </div>
        </div>
<!--        <div class="row posts_section" data-equalizer>-->
        <div class="main_low_box" data-equalizer>
            <div class="content_wrapper">
                <span class="first_text_in_low_box">מומלצות <?php echo single_cat_title( '', false ); ?></span>
                <div class="text_in_middle_img"><a href="<?php echo $url = get_home_url().'/אטרקציות-בתאילנד/';?>">הצג הכל</a></div>
                <div class="just_line_in_low_box"></div>
                <?php
                $count_4_items = 1;
                while($custom_query->have_posts() ) {
                $custom_query->the_post(); ?>
                <?php if ($count_4_items == 1 || $count_4_items == 5 || $count_4_items == 9){?>
                <div class="content">
                    <?php }?>

                    <a href="<?php echo get_the_permalink();?>" class="content-card">
                        <div class="card-wrapper">
                            <div class="img_in_low_box">
<!--                                <img class="img-responsive" src="--><?php //echo get_stylesheet_directory_uri();?><!--/Lametayel-Thailand-all-page-styles/img/img2_in_low_box.png" alt="">-->
                                <?php get_thailand_featured_image('thailand-thumbnail');?>
                            </div>
                            <div class="body-card">
                                <h3><?php echo get_the_title();?></h3>
                                <div class="p-and-btn-to-bottom">
                                    <p><?php echo excerpt(20);?></p>
                                </div>
                            </div>
                        </div>
                    </a>

                <?php if ($count_4_items == 4 || $count_4_items == 8 || $count_4_items == 12){?>
                </div>
                <?php }?>
                <?php
                $count_4_items++;
                } ?>
                <?php if ($count_4_items <=3 || ($count_4_items <=7 && $count_4_items > 4) || ($count_4_items <= 11 && $count_4_items > 8)){?>
                </div>
                <?php }?>
            </div>

            <div class="pagination-content">
                        <?php
                        $big = 999999999; // need an unlikely integer
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'type' => 'list',
                            'prev_text'    => __('<i class="fa fa-angle-right" aria-hidden="true"></i>'),
                            'next_text'    => __('<i class="fa fa-angle-left" aria-hidden="true"></i>'),
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $custom_query->max_num_pages
                        ) );?>
            </div>

        </div>
        <?php	wp_reset_postdata();?>
    <?php	}
    ?>

    <!--TODO Hotel page-->
<?php }elseif($type ==  'hotel'){ ?>


<?php
    $current_id = get_queried_object_id();
    $current_name = single_cat_title( '', false );
    $ratingUrl =$_GET['rating'];

    $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $link_array = explode('/',$url);
    $count_url = count($link_array);

    if( $count_url-1 == 7 || $count_url-1 == 8){
        array_pop($link_array);
        $sort_url  = implode('/', $link_array);
        array_pop($link_array);
        $sort_url  = implode('/', $link_array);
        array_pop($link_array);
        $sort_url  = implode('/', $link_array);
    }elseif( $count_url-1 == 5 || $count_url-1 == 7){
        array_pop($link_array);
        $sort_url  = implode('/', $link_array);
    }
    ?>





        <div class="content_wrapper">

            <div class="up_img">
                <div class="text_in_up_img"><?php echo single_cat_title( '', false ); ?></div>
                <img class="up_img_tail img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/Lametayel-Thailand-all-page-styles/img/corner-img.png">
            </div>

            <div class="up_box">
                <div class="main_text">
                    <?php echo term_description( $current_id, 'destinations' ) ?>


                </div>
                <div class="main_left_up_box">
                    <div class="left_text_box">
                        <?php if(get_field('txt_under_form', 'option')){ ?>
                            <?php echo get_field('txt_under_form', 'option'); ?>
                        <?php	}?>
                    </div>
                </div>
            </div>
        </div>



    <div class="content_wrapper">

        <div class="small_text_before_low_box">
            <form class="sort_hotels" action="<?php echo $sort_url; ?>">
                <label>
                    <select name="rating">
                        <option value="">כמה כוכבים?</option>
                        <option value="3" <?php if($ratingUrl == '3'){ echo 'selected'; } ?>> 3 כוכבים </option>
                        <option value="3.5" <?php if($ratingUrl == '3.5'){ echo 'selected'; } ?>> 3.5 כוכבים </option>
                        <option value="4" <?php if($ratingUrl == '4'){ echo 'selected'; } ?>> 4 כוכבים </option>
                        <option value="4.5" <?php if($ratingUrl == '4.5'){ echo 'selected'; } ?>> 4.5 כוכבים</option>
                        <option value="5" <?php if($ratingUrl == '5'){ echo 'selected'; } ?>> 5 כוכבים </option>
                    </select>
                </label>
                <div class="text_in_middle_img_hotels_locations">
                    <button type="submit" class="">סנן</button>
                </div>

            </form>
        </div>

                <?php
                $term_list = wp_get_post_terms($post->ID, 'destinations');

                foreach ($term_list as $term){
                    if($term->parent != 0){
                        $current_cat = $term;
                    }

                } ?>

                <?php
                $parent_term = get_term( $current_cat->parent, 'destinations' ); //get it for sidebar txt

                //check which type of destination and send to template accordingly
                $type = get_field('type_destination', 'destinations_'.$current_id);
                ?>

              <?php
                 $paged =  1 ;
                  if(isset($_GET['rating']) && $_GET['rating'] != '' ) {
                    $rating = array(
                      'key'	 	=> 'rating',
                      'value'	  	=> $_GET['rating'],
                      'compare' 	=> '=',
                    );
                  }else{
                    $rating = '';
                  }
                  //get all hotels that are connected to this taxonomy
                  $category = get_term_by('id', $current_id, 'destinations');
                  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                  //echo $paged ;
                  $args = array(
                      'post_type' => 'hotel',
                      'order' => 'DESC',
                      'order_by'  => 'date',
                      'posts_per_page' => 12,
                      'paged' => $paged,
                      'destinations' => $category->name,
                      'meta_query'	=> array(
                          $rating,
                      ),
                  );
                  $custom_query = new WP_Query($args);
                  if($custom_query->have_posts() ) { ?>
                            <div class="content" data-equalizer>
                                <?php
                                while($custom_query->have_posts() ) {
                                    $custom_query->the_post(); ?>
                                    <div class="content-card">
                                        <a href="<?php echo get_the_permalink();?>" class="card-wrapper">
                                            <div class="img_in_low_box">
                                                <?php if(get_post_type()==='hotel'){
                                                    $rating = get_field('rating');?>
                                                    <div class="star_icons"><?php
                                                    for($i=0; $i<$rating; $i++){
                                                        if ( $rating == '3.5' && $i == $rating - 0.5 || $rating == '4.5' && $i == $rating - 0.5){ ?>
                                                            <i class="fas fa-star-half star_icon" aria-hidden="true"></i>
                                                        <?php }else{?>
                                                            <i class="fas fa-star star_icon" aria-hidden="true"></i>
                                                        <?php }
                                                    } ?>
                                                    </div><?php
                                                }?>


                                                <img class="img-responsive" src="<?php the_post_thumbnail_url('thailand-thumbnail') ?>" alt="">
                                            </div>
                                            <div class="body-card">
                                                <h3><?php echo get_the_title();?></h3>
                                                <div class="p-and-btn-to-bottom">
                                                    <p><?php echo excerpt(20);?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="pagination-content">
                                <?php
                                $big = 999999999; // need an unlikely integer
                                echo paginate_links( array(
                                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                    'format' => '?paged=%#%',
                                    'type' => 'list',
                                    'prev_text'    => __('<i class="fa fa-angle-right" aria-hidden="true"></i>'),
                                    'next_text'    => __('<i class="fa fa-angle-left" aria-hidden="true"></i>'),
                                    //'current' => max( $paged, get_query_var('paged') ),
                                    'total' => $custom_query->max_num_pages
                                ) );?>

                            </div>

                        <?php	wp_reset_postdata();?>
                        <?php	}
                        ?>

                <?php
                $sidebar_ttl = 'רוצה להזמין מלון ב' . $parent_term->name . "?";
                ?>

    </div>

<?php }elseif ($type ==  'main'){?>

    <?php
    $current_id = get_queried_object_id();
    $current_name = single_cat_title( '', false );
    ?>
<div class="main-content">
<!--    <div class="up_img">-->
<!--        <div class="text_in_up_img">--><?php //the_title();// TODO title
//            $rating = get_field('rating'); ?>
<!--            <div class="rating">--><?php
//                for($i=0; $i<$rating; $i++){ ?>
<!--                    <i class="fa fa-star" aria-hidden="true"></i>-->
<!--                --><?php //} ?>
<!--            </div>-->
<!--        </div>-->
<!--        <img class="up_img_tail img-responsive" src="--><?php //echo get_stylesheet_directory_uri();?><!--/Lametayel-Thailand-all-page-styles/img/corner-img.png">-->
<!--    </div>-->
    <div class="up_img up_img-for-hotelPage">
<!--        <div class="text_in_up_img">--><?php //the_title();?><!--</div>-->
        <div class="text_in_up_img"><?php echo single_cat_title( '', false ); ?></div>
        <img class="up_img_tail img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/Lametayel-Thailand-all-page-styles/img/corner-img.png">
        <?php $rating = get_field('rating'); ?>
        <div class="rating-hotels-main">
            <?php
            for($i=0; $i<$rating; $i++){
                if ( $rating == '3.5' && $i == $rating - 0.5 || $rating == '4.5' && $i == $rating - 0.5){ ?>
                    <i class="fas fa-star-half" aria-hidden="true"></i>
                <?php }else{?>
                    <i class="fas fa-star" aria-hidden="true"></i>
                <?php }
            } ?>
        </div>
    </div>
    <div class="content-body">
        <div class="right-text-body">

            <?php if( get_field('top_page_desc', 'destinations_'.$current_id)){ ?>
                <div class="top_desc">
                    <?php echo  get_field('top_page_desc', 'destinations_'.$current_id); ?>
                    <a href="#about"><?php _e('More about' ,'podium'); //להרחבה על ?> <?php echo $current_name;?></a>
                </div>
            <?php }?>


            <?php
            $id_to_send = 'destinations_'.$current_id;
            include(locate_template('directives/content-top_section_tabs.php')); //TODO slider?>
        </div>
        <div class="left-form-body">
            <div class="left-form-wrapper">
                <h3>דברו איתנו</h3>
                <div class="form-body-wrap">
                    <form action="">
                        <input type="text" placeholder="שם">
                        <input type="text" placeholder="טלפון">
                        <input type="text" placeholder="אימייל">
                        <div class="input-date">
                            <show-orange><i class="fas fa-sort-down"></i></show-orange>
                            <show-white></show-white>
                            <input type="date">

                        </div>
                        <div class="input-date">
                            <show-orange><i class="fas fa-sort-down"></i></show-orange>
                            <show-white></show-white>
                            <input type="date">

                        </div>
                        <label>
                            <input type="checkbox"><i></i>
                            <span>התאריכים עוד לא ידועים לי</span>
                        </label>
                        <input type="text" placeholder="מספר נוסעים">
                        <textarea name="" cols="30" rows="10" placeholder="פרטים נוספים (מספר נוסעים,
גילאי הילדים, מסלול מועדף ועוד)"></textarea>
                        <button class="button-for-left-form" type="submit">שלח<i class="fas fa-chevron-left"></i></button>
                    </form>
                </div>
            </div>
            <div class="left-sidebar-text">
                <?php if(get_field('txt_under_form', 'option')){ ?>
                    <?php echo get_field('txt_under_form', 'option'); ?>
                <?php	}?>
            </div>
        </div>
    </div>
</div>




    <?php
    $term_list = wp_get_post_terms($post->ID, 'destinations');

    foreach ($term_list as $term){
        if($term->parent != 0){
            $current_cat = $term;
        }

    } ?>

    <?php
    $parent_term = get_term( $current_cat->parent, 'destinations' ); //get it for sidebar txt?>

        <?php //get children links
        $term_id = $current_id;
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
        }?>

        <?php //hotels block
        $section_var = array(
            'repeaterName' => 'related_hotels',
            'subFieldName' => 'hotel_post',
            'id' => 'destinations_'.$current_id,
            'section_ttl' => 'מלונות ב' .$current_name,
            'section_ttl_lnk' => $all_hotel_lnk,
        );
        include(locate_template('directives/posts_section.php')); //TODO hotels?>

        <?php //attractions block
        $section_var = array(
            'repeaterName' => 'related_attractions',
            'subFieldName' => 'attraction_post',
            'id' => 'destinations_'.$current_id,
            'section_ttl' => 'אטרקציות ב' .$current_name,
            'section_ttl_lnk' => $all_attraction_lnk,
        );
        include(locate_template('directives/posts_section.php')); //TODO attractions?>


    <div class="content-wrap">


        <?php if(get_field('display_flights', 'destinations_'.$current_id)){
            $flights_display  = get_field('display_flights', 'destinations_'.$current_id);
            switch ($flights_display) {
                case 'yes' :
                    if(get_field('txt_before_flights', 'destinations_'.$current_id)){
                        the_field('txt_before_flights', 'destinations_'.$current_id);
                    }
                    //flights from destination
                    $custom_query_args = array(//TODO flights
                        'post_type' => 'flight',
                        'order' => 'DESC',
                        'posts_per_page' => -1,
                        'meta_query'	=> array(
                            'relation'		=> 'AND',
                            array( //only featured designed posts
                                'key'       => 'from',
                                'value'     => $current_id,
                                'compare'   => '==',
                            ),
                        )
                    );
                    $custom_query = new WP_Query( $custom_query_args );
                    if ( $custom_query->have_posts() ) :?>
                        <section class="archive_flights_list">
                        <h5>טיסות מ<?php echo $current_name; ?></h5>
                        <div class="row"><?php
                            while ( $custom_query->have_posts() ) : $custom_query->the_post();?>
                                <div class="small-12 medium-4 columns end">
                                    <?php get_template_part( 'directives/content', 'outer_flight' ); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        </section>
                    <?php
                    endif;

                    wp_reset_postdata();

                    //flights too destination
                    $custom_query_args = array(//TODO flights
                        'post_type' => 'flight',
                        'order' => 'DESC',
                        'posts_per_page' => -1,
                        'meta_query'	=> array(
                            'relation'		=> 'AND',
                            array( //only featured designed posts
                                'key'       => 'too',
                                'value'     => $current_id,
                                'compare'   => '==',
                            ),
                        )
                    );
                    $custom_query = new WP_Query( $custom_query_args );
                    if ( $custom_query->have_posts() ) :?>
                        <section class="archive_flights_list second">
                        <h5>טיסות ל<?php echo $current_name; ?></h5>
                        <div class="row"><?php
                            while ( $custom_query->have_posts() ) : $custom_query->the_post();?>
                                <div class="small-12 medium-4 columns end">
                                    <?php get_template_part( 'directives/content', 'outer_flight' ); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        </section>
                    <?php
                    endif;
                    break;
                case 'no':
                    if(get_field('txt_flights_box', 'destinations_'.$current_id)){ ?>
                        <div class="no_display_flights_block">
                            <?php echo get_field('txt_flights_box', 'destinations_'.$current_id);?>
                        </div> <?php
                    }
                    break;
            }
        }?>
    </div>


        <?php if( get_field('main_destination_desc', 'destinations_'.$current_id)){ ?>
            <div id="about" class="content-wrap">
                <?php echo get_field('main_destination_desc', 'destinations_'.$current_id); //TODO description?>
            </div>
        <?php }?>

        <?php //articles block
        $section_var = array(
            'repeaterName' => 'related_articles',
            'subFieldName' => 'article',
            'id' => 'destinations_'.$current_id,
            'section_ttl' => 'מאמרים ב' .$current_name,
            'section_ttl_lnk' => $all_article_lnk,
        );
        include(locate_template('directives/posts_section.php')); //TODO articles?>



<?php }?>



<!--<style>-->
<!--    .star_icons{-->
<!--        display: none;-->
<!--    }-->
<!--</style>-->

<?php get_footer(); ?>
