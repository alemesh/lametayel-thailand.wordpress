<?php
use Podium\Config\Settings as settings;
$settings = new settings();

get_header();
?>

<?php if ( have_posts() ) : ?>

    <?php /* Start the Loop */ ?>
<div class="hlt-blog-page">
    <div class="main-holder">
        <div class="cloud">
            <span>בלוג</span>
        </div>
        <div class="content" data-equalizer>


            <?php while ( have_posts() ) : the_post(); ?>

                <div class="content-card">
                    <div class="card-wrapper">
                        <div class="img-wrapper" style="background-image: url(<?php the_post_thumbnail_url('thailand-thumbnail') ?>)"></div>
                        <div class="body-card">
                            <h3><?php echo get_the_title();?></h3>
                            <div class="p-and-btn-to-bottom">
                                <p><?php echo excerpt(20);?></p>
                                <dutton class="card-btn"><a href="<?php echo get_the_permalink();?>" >לכתבה המלאה</a></dutton>
                            </div>
                        </div>
                    </div>
                </div>


            <?php endwhile; ?>


        </div>
        <div class="pagination-content">
            <?php
            $big = 999999999; // need an unlikely integer
            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'type' => 'list',
                'prev_text'    => __('<i class="fa fa-angle-right" aria-hidden="true"></i>'),
                'next_text'    => __('<i class="fa fa-angle-left" aria-hidden="true"></i>')
                //'current' => max( $paged, get_query_var('paged') ),
//                'total' => $custom_query->max_num_pages
            ) );?>

        </div>
    </div>

</div>


<?php endif; ?>


<?php get_footer(); ?>