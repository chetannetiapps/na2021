<?php

function setup_blogdetail_post_type() {
	register_post_type("blog-detail", [
		"label" => "Blog Detail",
		"labels" => [
			"name" => "Blog Detail",
			"singular_name" => "BlogDetail",
			"add_new_item" => "Add new Blog Detail",
			"edit_item" => "Edit Blog Detail",
			"view_item" => "View Blog Detail",
			"view_items" => "View Blog Detail",
			"search_items" => "Search Blog Detail",
			"not_found" => "No Blog Detail found",
			"all_items" => "All Blog Detail",
			"archives" => "Blog Detail archives"
		],
		"description" => "Blog Detail post type provided by Netiapps",
		"public" => true,
		'has_archive' => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-align-wide",
		"rewrite" => [
			"slug" => "blog-detail"
		],
		/*"rewrite" => [
			 'slug' => '/',
  			 'with_front' => false
		],*/
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
		],
		'taxonomies' => array( 'blog','blog_categorie','blog-categorie','blogcategorie','category'),
	]);
}

add_action("init", "setup_blogdetail_post_type");