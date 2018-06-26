<?php
add_action( 'wp_enqueue_scripts', 'craftsandarts_child_enqueue_styles', 100);
function craftsandarts_child_enqueue_styles() {
    wp_enqueue_style( 'craftsandarts-parent', get_theme_file_uri('/style.css') );
}