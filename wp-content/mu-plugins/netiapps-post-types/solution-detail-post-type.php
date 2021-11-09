<?php

function setup_solution_detail_post_type() {
	register_post_type("solution-detail", [
		"label" => "Solution Details",
		"labels" => [
			"name" => "Solution Details",
			"singular_name" => "Solution detail",
			"add_new_item" => "Add new solution detail",
			"edit_item" => "Edit solution detail",
			"view_item" => "View Solution detail",
			"view_items" => "View solution detail",
			"search_items" => "Search solution detail",
			"not_found" => "No solution detail found",
			"all_items" => "All solution details",
			"archives" => "Solution archives"
		],
		"description" => "Solutions provided by Netiapps",
		"public" => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-portfolio",
		"rewrite" => [
			"slug" => "solution-detail"
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes"
		]
	]);
}

add_action("init", "setup_solution_detail_post_type");