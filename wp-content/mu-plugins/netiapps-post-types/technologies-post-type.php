<?php

function setup_technologies_post_type() {
	register_post_type("technologies", [
		"label" => "Technology Overview",
		"labels" => [
			"name" => "Technology",
			"singular_name" => "Technology",
			"add_new_item" => "Add new Technology",
			"edit_item" => "Edit Technology",
			"view_item" => "View Technology",
			"view_items" => "View Technology",
			"search_items" => "Search Technology",
			"not_found" => "No Technology found",
			"all_items" => "All Technology",
			"archives" => "Technology archives"
		],
		"description" => "Technology provided by Netiapps",
		"public" => true,
		'has_archive' => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-dashboard",
		"rewrite" => [
			"slug" => "technology"
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
		]
       

	]);
}

add_action("init", "setup_technologies_post_type");