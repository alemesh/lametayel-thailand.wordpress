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
<div id="content" class="site-content row">
    <div class="small-12 medium-8 columns">
        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->
    </div>
    <div class="small-12 medium-4 columns text-left">
        <?php if(function_exists('bcn_display')){ ?>
            <p id="breadcrumbs"> <?php bcn_display(); ?></p>
        <?php }?>
    </div>
    <div id="primary" class="content-area small-12 medium-12 <?php echo $settings->getContentClass('large-9', 'large-12'); ?> columns  wow fadeInUp" data-wow-delay="0.5s">
        <main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

<!--                --><?php //get_template_part( 'directives/content', 'single' ); ?>

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

        </main><!-- #main -->
    </div><!-- #primary -->
    <?php if( $settings->displaySidebar() ){ // has sidebar ?>
        <?php
        $sidebar_ttl = 'רוצה להזמין טיסה?';
        include(locate_template( 'directives/sidebar.php' )); ?>
    <?php } ?>
</div><!-- #content -->
<?php get_footer(); ?>
