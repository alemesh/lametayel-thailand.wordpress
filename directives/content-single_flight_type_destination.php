<?php
/**
 * Template part for displaying single posts.
 *
 * @package podium
 */

$current_id = get_queried_object_id();
$current_name = single_cat_title( '', false );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php echo term_description( $current_id, 'destinations' ) ?>

    <?php

    //get all flight that are connected to this taxonomy
    $category = get_term_by('id', $current_id, 'destinations');
    $args = array(
        'post_type' => 'flight',
        'order' => 'DESC',
        'order_by'  => 'date',
        'posts_per_page' => -1,
        'destinations' => $category->name,
    );
    $custom_query = new WP_Query( $args );
    if ( $custom_query->have_posts() ) : ?>
        <div class="row archive_flights_list"> <?php
        while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
            <div class="small-12 medium-6 large-4 columns end">
                <?php get_template_part( 'directives/content', 'outer_flight' ); ?>
            </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
        </div><?php
    endif; ?>
</article><!-- #post-## -->
