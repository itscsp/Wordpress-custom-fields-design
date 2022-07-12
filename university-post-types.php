<?php
    function university_post_types() {
        //Campus Post Type
        register_post_type('campus', array(
            'capability_type' => 'campus',
            'map_meta_cap' => true,
            'supports' => array('title'),
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
            'capability_type' => 'event',
            'map_meta_cap' => true,
            'supports' => array('title'),
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
            'supports' => array('title', 'thumbnail'),
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

         //Notes Post Type
         register_post_type('notes', array(
            'capability_type' => 'notes',
            'map_meta_cap' => true,
            'show_in_rest' => true,
            'supports' => array('title', 'editor'),
            'public' => false,
            'show_ui' => true,
            'labels' => array(
                'name' => 'Notes',
                'add_new_item' => 'Add New Note',
                'edit_item' => 'Edit Note',
                'all_items' => 'All Notes',
                'Singular_name' => 'Note',

            ),
            'menu_icon' => 'dashicons-welcome-write-blog'
        ));

         //Likes Post Type
         register_post_type('like', array(

            'supports' => array('title'),
            'public' => false,
            'show_ui' => true,
            'labels' => array(
                'name' => 'Likes',
                'add_new_item' => 'Add New Like',
                'edit_item' => 'Edit Like',
                'all_items' => 'All Likes',
                'Singular_name' => 'Like',

            ),
            'menu_icon' => 'dashicons-heart'
        ));



    }

    add_action('init', 'university_post_types');



