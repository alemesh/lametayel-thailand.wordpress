
<li class="item">
    <a href="<?php echo get_the_permalink();?>">
							<span class="wrap-img">

                                <?php
                                if($post->ID == 260){?>
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/fifth-section-item-1.png" alt="">
                                <?php }elseif ($post->ID == 269){?>
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/fifth-section-item-2.png" alt="">
                                <?php }elseif ($post->ID == 1895){?>
                                     <img src="<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/fifth-section-item-3.png" alt="">
                                    <?php }elseif ($post->ID == 1981){?>
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/home-page-styles/img/fifth-section-item-4.png" alt="">
                                    <?php }
                                ?>
							</span>
        <span class="wrap-title order-1">
								<span class="title"><?php echo get_the_title();?></span>
							</span>
        <span class="description"><?php echo excerpt(20);?></span>
    </a>
</li>
