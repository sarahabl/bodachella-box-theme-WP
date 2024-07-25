<?php 

function cptui_register_my_cpts() {

	/**
	 * Post Type: Boxes.
	 */

	$labels = [
		"name" => esc_html__( "Boxes", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Box", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "My boxes", "custom-post-type-ui" ),
		"all_items" => esc_html__( "All boxes", "custom-post-type-ui" ),
		"add_new" => esc_html__( "Add new", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Add new box", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Edit box", "custom-post-type-ui" ),
		"new_item" => esc_html__( "New box", "custom-post-type-ui" ),
		"view_item" => esc_html__( "View box", "custom-post-type-ui" ),
		"view_items" => esc_html__( "View boxes", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Search boxes", "custom-post-type-ui" ),
		"not_found" => esc_html__( "No boxes found", "custom-post-type-ui" ),
		"not_found_in_trash" => esc_html__( "No boxes found in trash", "custom-post-type-ui" ),
		"parent" => esc_html__( "Parent box:", "custom-post-type-ui" ),
		"featured_image" => esc_html__( "Featured image for this box", "custom-post-type-ui" ),
		"set_featured_image" => esc_html__( "Set featured image for this box", "custom-post-type-ui" ),
		"remove_featured_image" => esc_html__( "Remove featured image for this box", "custom-post-type-ui" ),
		"use_featured_image" => esc_html__( "Use as featured image for this box", "custom-post-type-ui" ),
		"archives" => esc_html__( "box archives", "custom-post-type-ui" ),
		"insert_into_item" => esc_html__( "Insert into box", "custom-post-type-ui" ),
		"uploaded_to_this_item" => esc_html__( "Upload to this box", "custom-post-type-ui" ),
		"filter_items_list" => esc_html__( "Filter boxes list", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "boxes list navigation", "custom-post-type-ui" ),
		"items_list" => esc_html__( "boxes list", "custom-post-type-ui" ),
		"attributes" => esc_html__( "boxes attributes", "custom-post-type-ui" ),
		"name_admin_bar" => esc_html__( "box", "custom-post-type-ui" ),
		"item_published" => esc_html__( "box published", "custom-post-type-ui" ),
		"item_published_privately" => esc_html__( "box published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => esc_html__( "box reverted to draft.", "custom-post-type-ui" ),
		"item_trashed" => esc_html__( "box trashed.", "custom-post-type-ui" ),
		"item_scheduled" => esc_html__( "box scheduled", "custom-post-type-ui" ),
		"item_updated" => esc_html__( "box updated.", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "Parent box:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Boxes", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "box", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-archive",
		"supports" => [ "title" ],
		"show_in_graphql" => false,
	];

	register_post_type( "box", $args );

	/**
	 * Post Type: Activities.
	 */

	$labels = [
		"name" => esc_html__( "Activities", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Activity", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "My Activities", "custom-post-type-ui" ),
		"all_items" => esc_html__( "All Activities", "custom-post-type-ui" ),
		"add_new" => esc_html__( "Add new", "custom-post-type-ui" ),
		"add_new_item" => esc_html__( "Add new Activity", "custom-post-type-ui" ),
		"edit_item" => esc_html__( "Edit Activity", "custom-post-type-ui" ),
		"new_item" => esc_html__( "New Activity", "custom-post-type-ui" ),
		"view_item" => esc_html__( "View Activity", "custom-post-type-ui" ),
		"view_items" => esc_html__( "View Activities", "custom-post-type-ui" ),
		"search_items" => esc_html__( "Search Activities", "custom-post-type-ui" ),
		"not_found" => esc_html__( "No Activities found", "custom-post-type-ui" ),
		"not_found_in_trash" => esc_html__( "No Activities found in trash", "custom-post-type-ui" ),
		"parent" => esc_html__( "Parent Activity:", "custom-post-type-ui" ),
		"featured_image" => esc_html__( "Featured image for this Activity", "custom-post-type-ui" ),
		"set_featured_image" => esc_html__( "Set featured image for this Activity", "custom-post-type-ui" ),
		"remove_featured_image" => esc_html__( "Remove featured image for this Activity", "custom-post-type-ui" ),
		"use_featured_image" => esc_html__( "Use as featured image for this Activity", "custom-post-type-ui" ),
		"archives" => esc_html__( "Activity archives", "custom-post-type-ui" ),
		"insert_into_item" => esc_html__( "Insert into Activity", "custom-post-type-ui" ),
		"uploaded_to_this_item" => esc_html__( "Upload to this Activity", "custom-post-type-ui" ),
		"filter_items_list" => esc_html__( "Filter Activities list", "custom-post-type-ui" ),
		"items_list_navigation" => esc_html__( "Activities list navigation", "custom-post-type-ui" ),
		"items_list" => esc_html__( "Activities list", "custom-post-type-ui" ),
		"attributes" => esc_html__( "Activities attributes", "custom-post-type-ui" ),
		"name_admin_bar" => esc_html__( "Activity", "custom-post-type-ui" ),
		"item_published" => esc_html__( "Activity published", "custom-post-type-ui" ),
		"item_published_privately" => esc_html__( "Activity published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => esc_html__( "Activity reverted to draft.", "custom-post-type-ui" ),
		"item_trashed" => esc_html__( "Activity trashed.", "custom-post-type-ui" ),
		"item_scheduled" => esc_html__( "Activity scheduled", "custom-post-type-ui" ),
		"item_updated" => esc_html__( "Activity updated.", "custom-post-type-ui" ),
		"parent_item_colon" => esc_html__( "Parent Activity:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Activities", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "Activités proposées par Bodachella",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "activities", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "activities", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
