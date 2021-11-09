<?php

function setup_client_post_type() {
	register_post_type("clients", [
		"label" => "Clients",
		"labels" => [
			"name" => "Clients",
			"singular_name" => "clients",
			"add_new_item" => "Add new Client",
			"edit_item" => "Edit Client",
			"view_item" => "View Client",
			"view_items" => "View Client",
			"search_items" => "Search Client",
			"not_found" => "No Client found",
			"all_items" => "All Client",
			"archives" => "Clients archives"
		],
		"description" => "Clients provided by Netiapps",
		"public" => true,
		'has_archive' => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-businessman",
		"rewrite" => [
			"slug" => "clients"
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
		],
	]);
}

add_action("init", "setup_client_post_type");