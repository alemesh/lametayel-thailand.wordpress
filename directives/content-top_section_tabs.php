<?php

if ( !isset( $id_to_send ) ) {
    $id_to_send = '';
}
if (get_field('img_slider', $id_to_send) || get_field('map', $id_to_send) || get_field('video', $id_to_send)){?>
    <div class="row collapse destination_top_tabs">
        <ul class="tabs" id="thailand_top_tabs" data-tabs>
            <?php if(get_field('img_slider', $id_to_send)){?>
                <li class="tabs-title is-active"><a href="#panel1v" aria-selected="true"><?php echo esc_html_e( 'Photos', 'podium' )?></a></li><!--TODO tabs-->
            <?php } ?>
            <?php if(get_field('map', $id_to_send)){?>
                <li class="tabs-title"><a href="#panel2v"><?php echo esc_html_e( 'a map', 'podium' )?></a></li><!--TODO tabs-->
            <?php } ?>
            <?php if(get_field('video', $id_to_send)){?>
                <li class="tabs-title"><a href="#panel3v"><?php echo esc_html_e( 'video', 'podium' )?></a></li><!--TODO tabs-->
            <?php } ?>
        </ul>
        <div class="tabs-content" data-tabs-content="thailand_top_tabs">
            <?php $images = get_field('img_slider' ,$id_to_send);
            if( $images ){ ?>
                <div class="tabs-panel is-active" id="panel1v">
                    <div class="pages_slider_wrapper">
                        <div class="pages_slider">
                            <?php foreach( $images as $image ): ?>
                                <div>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><!--TODO slider-->
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="pages_slider_nav_wrapper">
                        <div class="pages_slider_nav">
                            <?php foreach( $images as $image ): ?>
                                <div>
                                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" /><!--TODO slider-->
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="slider_btns">
                            <a class="prev"><i class="fa fa-angle-right"></i></a>
                            <a class="next"><i class="fa fa-angle-left"></i></a>
                        </div>
                    </div>

                </div>
            <?php } ?>
            <?php if(get_field('map', $id_to_send)){?>
                <div class="tabs-panel" id="panel2v">
                    <?php $address =get_field('map', $id_to_send);?>
                    <iframe style="height: 640px;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo urlencode($address); ?>&key=AIzaSyC1qYU6lasflVRRHQOFdkLgv0WvkAfJvn0"></iframe><!--TODO google map-->
                </div>
            <?php } ?>
            <?php if(get_field('video', $id_to_send)){?>
                <div class="tabs-panel" id="panel3v">
                    <div class="video_outer_wrapper">
                        <div class="inner">
                            <?php the_field('video', $id_to_send);?><!--TODO youtube video-->
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
