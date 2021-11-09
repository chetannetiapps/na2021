<?php

function setup_sitemap_post_type() {
	register_post_type("site-map", [
		"label" => "Site Map",
		"labels" => [
			"name" => "Site Map",
			"singular_name" => "SiteMap",
			"add_new_item" => "Add new Site Map",
			"edit_item" => "Edit Site Map",
			"view_item" => "View Site Map",
			"view_items" => "View Site Map",
			"search_items" => "Search Site Map",
			"not_found" => "No Site Map found",
			"all_items" => "All Site Map",
			"archives" => "Site Map archives"
		],
		"description" => "Site Map provided by Netiapps",
		"public" => true,
		'has_archive' => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-media-text",
		"rewrite" => [
			"slug" => "sitemap"
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
		],
	]);
}

add_action("init", "setup_sitemap_post_type");