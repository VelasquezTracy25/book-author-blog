<?php

//Adding CSS and JS files

function mm_setup(){
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Lustria&display=swap');
    wp_enqueue_style('fontawesome', '//pro.fontawesome.com/releases/v5.10.0/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'mm_setup');

// Adding Theme support

function mm_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', 
        array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'mm_init');

// // Blog Post Type

function mm_custom_post_type(){
    register_post_type('blog',
    array(
        'rewrite' => array('slug' => 'blogs'),
        'labels' => array(
            'name' => 'Blogs',
            'singular_name' => 'Blog',
            'add_new_item' => 'Add New Blog',
            'edit_item' => 'Edit Blog'
        ),
        'menu-icon' => 'dashicons-clipboard',
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title', 'thumbnail', 'editor', 'excerpt', 'comments'
            )
        )
    );
}

add_action('init', 'mm_custom_post_type');


