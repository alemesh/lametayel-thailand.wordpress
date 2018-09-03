<?php //print posts section
if( have_rows($section_var['repeaterName'], $section_var['id']) ){ ?>
<div class="main_low_box">
    <div class="content_wrapper">
        <span class="first_text_in_low_box"><?php echo $section_var['section_ttl']; ?></span>
        <?php if($section_var['section_ttl_lnk']){ ?>
        <div class="text_in_middle_img"><a href="<?php echo $section_var['section_ttl_lnk'];?>"><?php echo esc_html_e( 'Show all', 'podium' )?></a></div>
        <?php }?>
        <div class="just_line_in_low_box"></div>

        <div class="content">
            <?php while ( have_rows($section_var['repeaterName'], $section_var['id']) ) : the_row();
                $post_object1 = get_sub_field($section_var['subFieldName']);
                if( $post_object1 ){
                    $post = $post_object1;
                    setup_postdata( $post );
                    ?>
                        <?php get_template_part( 'directives/content', 'post_block' ); ?>

                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php }
            endwhile;?>

        </div>

    </div>
</div>
    <?php
} ?>