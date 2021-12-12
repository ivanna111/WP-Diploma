<?php
function school_custom_posts(){
    register_post_type('event', array(
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'excerpt', 'editor'),
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        )
    ));


}
    add_action('init', 'school_custom_posts');
?>