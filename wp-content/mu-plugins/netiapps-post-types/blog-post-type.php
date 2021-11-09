<?php

function setup_blog_post_type() {

    register_post_type("blogpost", [
        "label" => "Blog",
        "labels" => [
            "name" => "Blog",
            "singular_name" => "Blog",
            "add_new_item" => "Add new Blog",
            "edit_item" => "Edit Blog",
            "view_item" => "View Blog",
            "view_items" => "View Blog",
            "search_items" => "Search Blog",
            "not_found" => "No Blog found",
            "all_items" => "All Blogs",
            "archives" => "Blogs archives"
        ],
        "description" => "Blogs provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        'show_ui' => true, 
        "menu_icon" => "dashicons-align-left",
        "rewrite" => [
            "slug" => "blogpost"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes"
        ],

    ]);

     flush_rewrite_rules();
}

add_action("init", "setup_blog_post_type");


/*function create_blogpost_function(){
    $labels = array(
        'name' => _x('Blog', 'post type general name', 'your_text_domain'),
        'singular_name' => _x('Blog', 'post type Singular name', 'your_text_domain'),
        'add_new' => _x('Add Blog', '', 'your_text_domain'),
        'add_new_item' => __('Add New Blog', 'your_text_domain'),
        'edit_item' => __('Edit Blog', 'your_text_domain'),
        'new_item' => __('New Blog', 'your_text_domain'),
        'all_items' => __('All Blog', 'your_text_domain'),
        'view_item' => __('View Blog', 'your_text_domain'),
        'search_items' => __('Search Blog', 'your_text_domain'),
        'not_found' => __('No Blog found', 'your_text_domain'),
        'not_found_in_trash' => __('No Blog on trash', 'your_text_domain'),
        'parent_item_colon' => '',
        'menu_name' => __('Blob', 'your_text_domain')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'blog'),
        'capability_type' => 'page',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => array('title', 'thumbnail')
    );
    $labels = array(
        'name' => __('Category'),
        'singular_name' => __('Category'),
        'search_items' => __('Search'),
        'popular_items' => __('More Used'),
        'all_items' => __('All Categories'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Add new'),
        'update_item' => __('Update'),
        'add_new_item' => __('Add new Category'),
        'new_item_name' => __('New')
    );
    register_taxonomy('blog_category', array('blog'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'singular_label' => 'blog_category',
		'all_items' => 'Category',
		'query_var' => true,
		'rewrite' => array('slug' => 'blog-category'))
    );
    register_post_type('blog', $args);
    flush_rewrite_rules();
}
add_action('init', 'create_blogpost_function');
*/



