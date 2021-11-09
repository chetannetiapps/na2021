<?php

function setup_solution_post_type() {
	register_post_type("solution", [
		"label" => "Solution Overview",
		"labels" => [
			"name" => "Solution Overview",
			"singular_name" => "Solution",
			"add_new_item" => "Add new solution overview",
			"edit_item" => "Edit solution overview",
			"view_item" => "View Solution overview",
			"view_items" => "View solutions overview",
			"search_items" => "Search solutions overview",
			"not_found" => "No solutions overview found",
			"all_items" => "All solutions overview",
			"archives" => "Solution overview archives"
		],
		"description" => "Solutions overview provided by Netiapps",
		"public" => true,
		'has_archive' => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-portfolio",
		"rewrite" => [
			"slug" => "solution"
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
		],
	]);
}

add_action("init", "setup_solution_post_type");