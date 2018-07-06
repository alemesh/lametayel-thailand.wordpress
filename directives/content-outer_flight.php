<a href="<?php echo get_the_permalink();?>">
    <div class="box">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/flights_icon.svg" class="plane"/>
        <?php if(get_field('from')){
            $from = get_term_by('id', get_field('from'), 'destinations');
            echo 'מ'.$from->name;
        }
        if(get_field('too')){
            $too = get_term_by('id', get_field('too'), 'destinations');
            echo ' ל'.$too->name;
        }?>
        <i class="fa fa-angle-left arrow" aria-hidden="true"></i>
    </div>
</a>
