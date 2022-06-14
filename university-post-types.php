<?php
    function university_post_types() {
        register_post_type('event', array(
            'rewrite' => array('slug' => 'events'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Events',
                'add_new_item' => 'Add New Event',
                'edit_item' => 'Edit Events',
                'all_items' => 'All Events',
                'Singular_name' => 'Event',

            ),
            'menu_icon' => 'dashicons-calendar'
        ));
    }

    add_action('init', 'university_post_types');


