<?php


// ================================= Custom Post Type Taxonomies =================================
function netiapps_create_the_attaction_taxonomy() {  
    register_taxonomy(  
        'blog',                      // This is a name of the taxonomy. Make sure it's not a capital letter and no space in between
        'blog-detail',                   //post type name
        array(  
            'hierarchical' => true,  
            'label' => 'Blog Categorie',   //Display name
            'query_var' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'blog')
        )  
    );  
}  
add_action( 'init', 'netiapps_create_the_attaction_taxonomy');