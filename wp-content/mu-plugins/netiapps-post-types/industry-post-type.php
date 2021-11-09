<?php

function setup_industry_post_type() {
	register_post_type("industry", [
		"label" => "Industry",
		"labels" => [
			"name" => "Industry",
			"singular_name" => "Industry",
			"add_new_item" => "Add new Industry",
			"edit_item" => "Edit Industry",
			"view_item" => "View Industry",
			"view_items" => "View Industry",
			"search_items" => "Search Industry",
			"not_found" => "No Industry found",
			"all_items" => "All Industry",
			"archives" => "Industry archives"
		],
		"description" => "Industry provided by Netiapps",
		"public" => true,
		'has_archive' => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-align-left",
		"rewrite" => [
			"slug" => "industry"
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes"
		]
	]);
}

add_action("init", "setup_industry_post_type");