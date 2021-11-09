<?php

function setup_terms_condition_post_type() {
	register_post_type("terms-conditions", [
		"label" => "Terms of Use",
		"labels" => [
			"name" => "Terms & Conditions",
			"singular_name" => "terms-condition",
			"add_new_item" => "Add new terms & condition",
			"edit_item" => "Edit terms & condition",
			"view_item" => "View terms & condition",
			"view_items" => "View terms & condition",
			"search_items" => "Search terms & condition",
			"not_found" => "No terms & condition",
			"all_items" => "All terms & condition",
			"archives" => "terms & condition archives"
		],
		"description" => "Terms & Conditions provided by Netiapps",
		"public" => true,
		'has_archive' => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-editor-contract",
		"rewrite" => [
			"slug" => "terms-condition"
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
		],
	]);
}

add_action("init", "setup_terms_condition_post_type");