<?php

function setup_casestudy_list_post_type() {
	register_post_type("casestudylist", [
		"label" => "Case Study List",
		"labels" => [
			"name" => "Case Study List",
			"singular_name" => "casestudylist",
			"add_new_item" => "Add new Case-Study List",
			"edit_item" => "Edit Case-Study List",
			"view_item" => "View Case-Study List",
			"view_items" => "View Case-Study List",
			"search_items" => "Search Case-Study List",
			"not_found" => "No Case-Study List found",
			"all_items" => "All Case-Study List",
			"archives" => "Case-Study List archives"
		],
		"description" => "Case-Study List provided by Netiapps",
		"public" => true,
		'has_archive' => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-align-pull-left",
		"rewrite" => [
			"slug" => "case-studies"
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
		]
       

	]);
}

add_action("init", "setup_casestudy_list_post_type");