<?php

function setup_career_detail_post_type() {
	register_post_type("career-detail", [
		"label" => "Career Details",
		"labels" => [
			"name" => "Career Details",
			"singular_name" => "Career detail",
			"add_new_item" => "Add new Career detail",
			"edit_item" => "Edit Career detail",
			"view_item" => "View Career detail",
			"view_items" => "View Career detail",
			"search_items" => "Search Career detail",
			"not_found" => "No Career detail found",
			"all_items" => "All Career details",
			"archives" => "Career archives"
		],
		"description" => "Career details provided by Netiapps",
		"public" => true,
		'has_archive' => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-admin-page",
		"rewrite" => [
			"slug" => "career-list",
			'with_front'  => false,
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes"
		]
	]);
}

add_action("init", "setup_career_detail_post_type");