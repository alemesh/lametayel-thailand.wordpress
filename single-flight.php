<?php
/**
 * The template for displaying all single posts.
 *
 * @package podium
 */
use Podium\Config\Settings as settings;
$settings = new settings();

get_header();
?>
<!--<div id="content" class="site-content row">-->
<!--    <div class="small-12 medium-8 columns">-->
<!--        <header class="entry-header">-->
<!--            --><?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<!--        </header>-->
<!--    </div>-->
<!--    <div class="small-12 medium-4 columns text-left">-->
<!--        --><?php //if(function_exists('bcn_display')){ ?>
<!--            <p id="breadcrumbs" vocab="https://schema.org/" typeof="BreadcrumbList"> --><?php //bcn_display(); ?><!--</p>-->
<!--        --><?php //}?>
<!--    </div>-->
<!--    <div id="primary" class="content-area small-12 medium-12 --><?php //echo $settings->getContentClass('large-9', 'large-12'); ?><!-- columns  wow fadeInUp" data-wow-delay="0.5s">-->
<!--        <main id="main" class="site-main" role="main">-->
<!---->
<!--            --><?php //while ( have_posts() ) : the_post(); ?>
<!---->
<!---->
<!--                <div class="row flight_info_single">-->
<!--                    --><?php //if(get_field('duration')){ ?>
<!--                        <div class="small-12 medium-3 columns text-center">-->
<!--                            <p>משך הזמן</p>-->
<!--                            <img src="--><?php //echo get_template_directory_uri(); ?><!--/dist/images/flight-01.svg" />-->
<!--                            <p class="info">--><?php //echo get_field('duration');?><!--</p>-->
<!--                        </div>-->
<!--                    --><?php //}?>
<!--                    --><?php //if(get_field('frequency')){ ?>
<!--                        <div class="small-12 medium-3 columns text-center">-->
<!--                            <p>תדירות</p>-->
<!--                            <img src="--><?php //echo get_template_directory_uri(); ?><!--/dist/images/flight-02.svg" />-->
<!--                            <p class="info">--><?php //echo get_field('frequency');?><!--</p>-->
<!--                        </div>-->
<!--                    --><?php //}?>
<!--                    --><?php //if(get_field('location')){ ?>
<!--                        <div class="small-12 medium-3 columns text-center">-->
<!--                            <p>מיקום</p>-->
<!--                            <img src="--><?php //echo get_template_directory_uri(); ?><!--/dist/images/flight-03.svg" />-->
<!--                            <p class="info">--><?php //echo get_field('location');?><!--</p>-->
<!--                        </div>-->
<!--                    --><?php //}?>
<!--                    --><?php //if(get_field('permit')){ ?>
<!--                        <div class="small-12 medium-3 columns text-center">-->
<!--                            <p>אישור טיסה</p>-->
<!--                            <img src="--><?php //echo get_template_directory_uri(); ?><!--/dist/images/flight-04.svg" />-->
<!--                            <p class="info">--><?php //echo get_field('permit');?><!--</p>-->
<!--                        </div>-->
<!--                    --><?php //}?>
<!--                </div>-->
<!--                --><?php ////get children links
//                $destination = get_term_by('id', get_field('too'), 'destinations');
//                $term_id = get_field('too');
//                $taxonomy_name = 'destinations';
//                $termchildren = get_term_children( $term_id, $taxonomy_name );
//                foreach ( $termchildren as $child ) {
//                    $term = get_term_by( 'id', $child, $taxonomy_name );
//                    $type = get_field('type_destination', 'destinations_'.$term->term_id);
//                    switch ($type) {
//                        case 'hotel':
//                            $all_hotel_lnk = get_term_link( $child, $taxonomy_name );
//                            break;
//                        case 'attraction':
//                            $all_attraction_lnk = get_term_link( $child, $taxonomy_name );
//                            break;
//                        case 'article':
//                            $all_article_lnk = get_term_link( $child, $taxonomy_name );
//                            break;
//                        default:
//                    }
//                } ?>
<!--                --><?php ////hotels block
//                $section_var = array(
//                    'repeaterName' => 'hotels',
//                    'subFieldName' => 'hotel',
//                    'id' => get_the_ID(),
//                    'section_ttl' => 'מלונות מומלצים ב'. $destination->name,
//                    'section_ttl_lnk' => $all_hotel_lnk,
//                );
//                include(locate_template('directives/posts_section.php')); ?>
<!---->
<!--                --><?php ////attractions block
//                $section_var = array(
//                    'repeaterName' => 'attractions',
//                    'subFieldName' => 'attraction',
//                    'id' => get_the_ID(),
//                    'section_ttl' => 'אטרקציות מומלצות ב' .$destination->name,
//                    'section_ttl_lnk' => $all_attraction_lnk,
//                );
//                include(locate_template('directives/posts_section.php')); ?>
<!---->
<!--            --><?php //endwhile; // End of the loop. ?>
<!---->
<!--        </main>-->
<!--    </div>-->
<!--    --><?php //if( $settings->displaySidebar() ){ // has sidebar ?>
<!--        --><?php
//        $sidebar_ttl = 'רוצה להזמין טיסה?';
//        include(locate_template( 'directives/sidebar.php' )); ?>
<!--    --><?php //} ?>
<!--</div>-->






<div class="main-content">
    <div class="up_img">
        <div class="text_in_up_img"><?php the_title();// TODO title
            $rating = get_field('rating'); ?>
            <div class="rating"><?php
                for($i=0; $i<$rating; $i++){ ?>
                    <i class="fa fa-star" aria-hidden="true"></i>
                <?php } ?>
            </div></div>
        <img class="up_img_tail img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/Lametayel-Thailand-all-page-styles/img/corner-img.png">
    </div>
    <div class="content-body">
        <div class="right-text-body">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content();?>
            <?php endwhile; // End of the loop. ?>
        </div>
        <div class="left-form-body">
            <div class="bredcrumbs hidden-xs">
                <?php if(function_exists('bcn_display')){ ?>
                    <p id="breadcrumbs" vocab="https://schema.org/" typeof="BreadcrumbList"> <?php bcn_display(); ?></p>
                <?php }?>
            </div>
            <div class="left-sidebar-text">
                <?php if(get_field('txt_under_form', 'option')){ ?>
                    <?php echo get_field('txt_under_form', 'option'); ?>
                <?php	}?>
            </div>
        </div>
    </div>

</div>
<?php while ( have_posts() ) : the_post();?>


<div class="row flight_info_single">
    <?php if(get_field('duration')){ ?>
        <div class="small-12 medium-3 columns text-center">
            <p>משך הזמן</p>
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/flight-01.svg" />
            <p class="info"><?php echo get_field('duration');?></p>
        </div>
    <?php }?>
    <?php if(get_field('frequency')){ ?>
        <div class="small-12 medium-3 columns text-center">
            <p>תדירות</p>
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/flight-02.svg" />
            <p class="info"><?php echo get_field('frequency');?></p>
        </div>
    <?php }?>
    <?php if(get_field('location')){ ?>
        <div class="small-12 medium-3 columns text-center">
            <p>מיקום</p>
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/flight-03.svg" />
            <p class="info"><?php echo get_field('location');?></p>
        </div>
    <?php }?>
    <?php if(get_field('permit')){ ?>
        <div class="small-12 medium-3 columns text-center">
            <p>אישור טיסה</p>
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/flight-04.svg" />
            <p class="info"><?php echo get_field('permit');?></p>
        </div>
    <?php }?>
</div>
<?php //get children links
$destination = get_term_by('id', get_field('too'), 'destinations');
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
                'id' => get_the_ID(),
                'section_ttl' => 'מלונות מומלצים ב'. $destination->name,
                'section_ttl_lnk' => $all_hotel_lnk,
            );
            include(locate_template('directives/posts_section.php')); ?>

            <?php //attractions block
            $section_var = array(
                'repeaterName' => 'attractions',
                'subFieldName' => 'attraction',
                'id' => get_the_ID(),
                'section_ttl' => 'אטרקציות מומלצות ב' .$destination->name,
                'section_ttl_lnk' => $all_attraction_lnk,
            );
            include(locate_template('directives/posts_section.php')); ?>
<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
