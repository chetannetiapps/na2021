<?php

function setup_about_us_post_type() {
	register_post_type("about-us", [
		"label" => "About Us Overview",
		"labels" => [
			"name" => "About Us Overview",
			"singular_name" => "about-us",
			"add_new_item" => "Add new About Us",
			"edit_item" => "Edit About Us",
			"view_item" => "View About Us",
			"view_items" => "View About Us",
			"search_items" => "Search About Us",
			"not_found" => "No About Us found",
			"all_items" => "All About Us",
			"archives" => "About Us archives"
		],
		"description" => "About Us provided by Netiapps",
		"public" => true,
		'has_archive' => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-welcome-learn-more",
		"rewrite" => [
			"slug" => "about-us"
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
		]
       

	]);
}

add_action("init", "setup_about_us_post_type");

?>