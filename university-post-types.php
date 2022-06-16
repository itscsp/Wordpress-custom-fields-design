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

        register_post_type('program', array(
            'rewrite' => array('slug' => 'programs'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Programs',
                'add_new_item' => 'Add New Program',
                'edit_item' => 'Edit Programs',
                'all_items' => 'All Programs',
                'Singular_name' => 'Program',

            ),
            'menu_icon' => 'dashicons-awards'
        ));
    }

    add_action('init', 'university_post_types');


