<?php

function setup_career_list_post_type() {
	register_post_type("career-list", [
		"label" => "Career list",
		"labels" => [
			"name" => "Career list",
			"singular_name" => "Career list",
			"add_new_item" => "Add new Career list",
			"edit_item" => "Edit Career list",
			"view_item" => "View Career list",
			"view_items" => "View Career list",
			"search_items" => "Search Career list",
			"not_found" => "No Career list found",
			"all_items" => "All Career list",
			"archives" => "Career archives"
		],
		"description" => "Career list provided by Netiapps",
		"public" => true,
		'has_archive' => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-editor-ul",
		"rewrite" => [
			"slug" => "career-list"
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes"
		]
	]);
}

add_action("init", "setup_career_list_post_type");