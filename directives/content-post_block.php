<a href="<?php echo get_the_permalink();?>" class="content-card">
    <div class="card-wrapper">
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
        <div class="img_in_low_box">
            <img class="img-responsive" src="<?php the_post_thumbnail_url('thailand-thumbnail')?>" alt="">
        </div>
        <div class="body-card">
            <h3><?php echo get_the_title();?></h3>
            <div class="p-and-btn-to-bottom">
                <p><?php echo excerpt(20);?></p>
            </div>
        </div>
    </div>
</a>