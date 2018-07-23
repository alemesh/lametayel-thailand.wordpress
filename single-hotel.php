<?php
/**
 * The template for displaying all single posts.
 *
 * @package podium
 */
use Podium\Config\Settings as settings;
$settings = new settings();

get_header();
if( get_field('new_design') ){
    $tpl = 'ver2';
} else{
    $tpl = 'ver1';
}
include ABSPATH . '/wp-content/themes/thailand-child/inc/tpl-single-hotel-' . $tpl . '.php';
get_footer(); ?>
