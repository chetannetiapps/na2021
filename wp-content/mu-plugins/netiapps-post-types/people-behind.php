<?php

function setup_people_behind_post_type() {
	register_post_type("people-behind", [
		"label" => "People Behind Overview",
		"labels" => [
			"name" => "People Behind Overview",
			"singular_name" => "people-behind",
			"add_new_item" => "Add new People",
			"edit_item" => "Edit People",
			"view_item" => "View People",
			"view_items" => "View People",
			"search_items" => "Search People",
			"not_found" => "No People found",
			"all_items" => "All People",
			"archives" => "People archives"
		],
		"description" => "People Behind provided by Netiapps",
		"public" => true,
		'has_archive' => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-admin-users",
		"rewrite" => [
			"slug" => "about-us"
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
		]
       

	]);
}

add_action("init", "setup_people_behind_post_type");

?>