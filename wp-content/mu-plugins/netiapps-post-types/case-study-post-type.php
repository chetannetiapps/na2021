<?php

function setup_case_study_post_type() {
	register_post_type("case-study", [
		"label" => "Case Study",
		"labels" => [
			"name" => "Case Study",
			"singular_name" => "Case-study",
			"add_new_item" => "Add new Case Study",
			"edit_item" => "Edit Case Study",
			"view_item" => "View Case Study",
			"view_items" => "View Case Study",
			"search_items" => "Search Case Study",
			"not_found" => "No Case Study found",
			"all_items" => "All Case Study",
			"archives" => "Case Study archives"
		],
		"description" => "Case Study provided by Netiapps",
		"public" => true,
		'has_archive' => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-admin-site-alt",
		"rewrite" => [
			"slug" => "case-study"
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
		],
	]);
}

add_action("init", "setup_case_study_post_type");