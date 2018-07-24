<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package podium
 */

?>

<div class="main_text" id="post-<?php the_ID(); ?>">
    <?php the_content(); ?>
    <?php
    wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'podium' ),
        'after'  => '</div>',
    ) );
    ?>
</div>