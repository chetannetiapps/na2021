<?php

function setup_contact_us_post_type() {
	register_post_type("contact-us", [
		"label" => "Contact Us",
		"labels" => [
			"name" => "Contact Us Overview ",
			"singular_name" => "Contact Us list",
			"add_new_item" => "Add new Contact Us list",
			"not_found" => "No Contact Us  list found",
			"all_items" => "All Contact Us  list",
			"archives" => "Career archives"
		],
		"description" => "Career list provided by Netiapps",
		"public" => true,
		"show_in_rest" => true,
		"menu_icon" => "dashicons-email-alt",
		"rewrite" => [
			"slug" => "contact-us"
		],
		"supports" => [
			"title", "editor", "revisions", "author", "excerpt", "page_attributes"
		]
	]);
}

add_action("init", "setup_contact_us_post_type");