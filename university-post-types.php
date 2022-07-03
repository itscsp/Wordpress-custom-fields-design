<?php
    function university_post_types() {
        //Campus Post Type
        register_post_type('campus', array(
            'supports' => array('title', 'editor'),
            'rewrite' => array('slug' => 'campuses'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Campuses',
                'add_new_item' => 'Add New Campus',
                'edit_item' => 'Edit Campus',
                'all_items' => 'All Campuses',
                'Singular_name' => 'Campus',

            ),
            'menu_icon' => 'dashicons-location-alt'
        ));


        //Event Post Type
        register_post_type('event', array(
            'supports' => array('title', 'editor'),
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

        //Program Post Type
        register_post_type('program', array(
            'supports' => array('title'),
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

        //Professor Post Type
        register_post_type('professor', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'public' => true,
            'labels' => array(
                'name' => 'Professors',
                'add_new_item' => 'Add New Professor',
                'edit_item' => 'Edit Professors',
                'all_items' => 'All Professors',
                'Singular_name' => 'Professor',

            ),
            'menu_icon' => 'dashicons-welcome-learn-more'
        ));

    }

    add_action('init', 'university_post_types');



