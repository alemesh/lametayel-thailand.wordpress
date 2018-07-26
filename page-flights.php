<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *Template Name: Flights page
 *
 * @package podium
 */
use Podium\Config\Settings as settings;
$settings = new settings();

get_header();
?>

<div class="hlt-wraper">
    <div class="wrap-header-section">
        <div class="main-holder">
            <div class="button-section">
                <a href="">טיסות בתאילנד</a>
            </div>
            <div class="wrap-holder tabs">
                <div class="left-section ">
                    <ul class="items tabs__caption menu-lisy">
                        <?php
                        $my_arr =[];
                        $my_link =[];
                        $lem_parent_cat_id = [];
                        $categories = get_terms( array('taxonomy' => 'destinations', 'parent' => 0) );
                        $counter = 0;
                        foreach ($categories as $cat){  setup_postdata($post);

                        $term_id = $cat->term_id;
                        $taxonomy_name = 'destinations';
                        $termchildren = get_term_children( $term_id, $taxonomy_name );
                        $lnk = "";
                        foreach ( $termchildren as $child ) {   setup_postdata($post);

                            $term = get_term_by( 'id', $child, $taxonomy_name );
                            $type = get_field('type_destination', 'destinations_'.$term->term_id);
                            if($type === 'flights'){
                                $my_arr[] = $child;
                                $lnk = get_term_link( $child, $taxonomy_name );
                            }
                        }
                            wp_reset_postdata();
                        //only if destination has child category type hotel display it
                        if($lnk){?>
                            <?php $image = get_field('featured_img', 'destinations_'.$cat->term_id); ?>

                            <?php
                            $lem_parent_cat_id[] = $cat->term_id;
                            $my_link[] = $lnk;
                            ?>

                            <li class="item <?php echo ($counter == 0)?'active':'';?>">
								<span class="image" style="background-image: url(<?php echo $image['sizes']['thailand-square-3']; ?>)">
									<span class="text-item"></span>
									<span class="text">טיסות ל<?php echo  $cat->name;?></span>
								</span>
                            </li>

                        <?php  }
                            $counter++;
                        }
                        wp_reset_postdata();
                        ?>


                    </ul>

                    <?php
//                    var_dump($my_link);
                    $counter_acriv = 0;
                    foreach ($my_arr as $flights_buttoms){ setup_postdata($post);
                        if ($flights_buttoms == 75){
                            continue;
                        }

                        $posts = get_posts(array(
                            'numberposts'=>-1,
                            'post_type' => 'flight',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'destinations',
                                    'field' => 'term_id',
                                    'terms' => $flights_buttoms,
                                    'operator' => 'AND',
                                )
                            )
                        ));
                        ?>

                        <ul class="buttons tabs__content <?php echo ($counter_acriv === 0)?'active':'';?>">

                            <?php
                            foreach ($posts as $flights_buttom){ setup_postdata($post)?>

                                <li class="button">
<!--                                    <a href="--><?php //echo get_the_permalink($flights_buttom->ID);?><!--">-->
                                    <a href="<?php echo $my_link[$counter_acriv];?>">
                                            <?php if(get_field('from',$flights_buttom->ID)){
                                                $from = get_term_by('id', get_field('from',$flights_buttom->ID), 'destinations');
                                                echo 'מ'.$from->name;
                                            }
                                            if(get_field('too',$flights_buttom->ID)){
                                                $too = get_term_by('id', get_field('too',$flights_buttom->ID), 'destinations');
                                                echo ' ל'.$too->name;
                                            }?>
                                    </a>

                                </li>

                                <?php
                            }
                            wp_reset_postdata();
                            ?>

                        </ul>
                        <?php
                        $counter_acriv++;
                    }
                    wp_reset_postdata();
                    ?>

                </div>

                <div class="right-section">
                    <div class="wrap-text">
                        <h3 class="tabs__content active">טיסות לבנגקוק</h3>
                        <h3 class="tabs__content">טיסות לפאטייה</h3>
                        <h3 class="tabs__content">טיסות לפוקט</h3>
                        <h3 class="tabs__content">טיסות לצ’אנג מאי</h3>
                        <h3 class="tabs__content">טיסות לצ’אנג ראי</h3>
                        <h3 class="tabs__content">טיסות לקו צ’אנג</h3>
                        <h3 class="tabs__content">טיסות לקוסמוי</h3>
                        <h3 class="tabs__content">טיסות לקראבי</h3>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php the_content();?>
                        <?php endwhile; // End of the loop. ?>
<!--                        <p><span>ע"מ לקבל הצעה אטרקטיבית לטיסות פנים בתאילנד, אנא פנו אלינו עם הפרטים הבאים:</span>-->
<!--                            תאריכי טיסות רצויים, לאילו יעדים, ובמידה ומדובר במשפחות יש לציין את גילאי הילדים. אנא בדקו באופן שוטף את המייל שלכם לוודא שהמייל מאיתנו לא נכנס לדואר ספאם/גאנק. למי ששולח מייל מהעבודה נא לציין מייל פרטי בנוסף</p>-->
                    </div>
                    <div class="wrap-img tabs__content active" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/map.png)"></div>
                    <div class="wrap-img tabs__content" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/map-5.png)"></div>
                    <div class="wrap-img tabs__content" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/map-4.png)"></div>
                    <div class="wrap-img tabs__content" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/map-2.png)"></div>
                    <div class="wrap-img tabs__content" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/map-6.png)"></div>
                    <div class="wrap-img tabs__content" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/map-7.png)"></div>
                    <div class="wrap-img tabs__content" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/map-3.png)"></div>
                    <div class="wrap-img tabs__content" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/flights-page-styles/img/map-8.png)"></div>
                </div>
            </div>

        </div>
    </div>

    <div class="text-section">
        <div class="background-holder"></div>
        <div class="main-holder">
            <?php
            $args = array(
                'numberposts' => 5,
                'category'    => 0,
                'orderby'     => 'date',
                'order'       => 'DESC',
                'include'     => array(371),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => 'page',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            );

            $posts = get_posts( $args );

            foreach($posts as $post){ setup_postdata($post);
                ?>

                <div class="first-block">
                    <?php echo $post->post_content;?>
                </div>

                <div class="wrap-button">
                    <a href="" class="button" id="mybtn" data-btn="btnopen"><span>מידע נוסף</span></a>
                </div>
                <div class="second-block">
                    <?php echo get_field('txt_read_more'); ?>
                </div>


                <?php
            }

            wp_reset_postdata();
            ?>

        </div>
    </div>







</div>



<?php get_footer(); ?>
