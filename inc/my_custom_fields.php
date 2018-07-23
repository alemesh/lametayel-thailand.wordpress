<?php
/* Adding blocks to the main column on the pages and blog post. pages */
function myplugin_add_custom_box() {
    $screens = array( 'flight' );
    foreach ( $screens as $screen ) {
        add_meta_box('myplugin_sectionid', 'Custom map images', 'myplugin_meta_box_callback', $screen, 'normal', 'high');
    }
}
add_action('add_meta_boxes', 'myplugin_add_custom_box');

/* HTML code block */
function myplugin_meta_box_callback() {
    // We use the nonce to verify
    wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename1' );




//add 1 select
    $my_id = get_the_ID();

    $curent_meta  = get_post_meta( get_the_ID(), '_map_image_value_key',true );
//    if (!empty($curent_meta)) {
    echo '<p><label for="map_image_new_field">url imag</label></p>';
    echo '<input type="text"  name="map_image_new_field" value="'. get_post_meta($my_id, "_map_image_value_key", 1).'">';
//        echo '<textarea name="map_image_new_field" rows="10" cols="45">' . get_post_meta($my_id, "_map_image_value_key", 1) . '</textarea>';
//    }

}


//kowindows.bob@gmail.com
/* Save the data when the post is saved */
function myplugin_save_postdata( $post_id ) {

    // nonce check our page because save_post can be called from another location.
    if ( ! wp_verify_nonce( $_POST['myplugin_noncename1'], plugin_basename(__FILE__) ) )  return $post_id;

    // We check to see if auto-save is not doing anything with the data in our form.
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
        return $post_id;

    // check whether the user is allowed to specify the data
    if ( 'page' == $_POST['post_type'] && ! current_user_can( 'edit_page', $post_id ) ) {
        return $post_id;
    } elseif( ! current_user_can( 'edit_post', $post_id ) ) {
        return $post_id;
    }

    // Уbedimsya that field is set.
    if ( ! isset( $_POST['map_image_new_field'] ))
        return;

// Make sure the field is set.
    //if ( ! isset( $_POST['jsmyplugin_new_field'] ) )
    // return;

    // All OK. Now, you need to find and save the data
    // Clear the value of the input field.
    $my_data = sanitize_text_field( $_POST['map_image_new_field'] );



    // We are updating the database.
    update_post_meta( $post_id, '_map_image_value_key', $my_data );

}
add_action( 'save_post', 'myplugin_save_postdata' );