<?php

$labels = [
	'name'               => __( 'Knowledge Base Articles', 'mkb' ),
	'singular_name'      => __( 'Knowledge Base Article', 'mkb' ),
	'add_new'            => _x( 'Add Article', 'mkb', ),
	'add_new_item'       => __( 'Add Article', 'mkb' ),
	'edit_item'          => __( 'Edit Article', 'mkb' ),
	'new_item'           => __( 'New Article', 'mkb' ),
	'view_item'          => __( 'View Article', 'mkb' ),
	'search_items'       => __( 'Search Knowledge Base Articles', 'mkb' ),
	'not_found'          => __( 'No Articles found', 'mkb' ),
	'not_found_in_trash' => __( 'No Articles found in Trash', 'mkb' ),
	'parent_item_colon'  => __( 'Parent Article:', 'mkb' ),
	'menu_name'          => __( 'KB Articles', 'mkb' ),
];

$args = [
	'labels'              => $labels,
	'hierarchical'        => false,
	'description'         => '',
	'taxonomies'          => [],
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'show_in_rest'		  => true,
	'menu_icon'           => 'dashicons-welcome-learn-more',
	'show_in_nav_menus'   => false,
	'publicly_queryable'  => true,
	'exclude_from_search' => false,
	'has_archive'         => false,
	'query_var'           => true,
	'can_export'          => true,
	'rewrite'             => true,
	'capability_type'     => 'post',
	'supports'            => [ 'title', 'thumbnail', 'editor' ],
];
register_post_type( 'kbarticle', $args );

$tax_labels = [
	'name' 				=> _x( 'Article Types', 'mkb' ),
	'singular_name' 	=> _x( 'Article Type', 'mkb' ),
	'search_items' 		=> __( 'Search Article Types', 'mkb' ),
	'all_items' 		=> __( 'All Article Types', 'mkb' ),
	'edit_item' 		=> __( 'Edit Article Type', 'mkb' ),
	'update_item' 		=> __( 'Update Article Type', 'mkb' ),
	'add_new_item' 		=> __( 'Add Article Type', 'mkb' ),
	'new_item_name' 	=> __( 'Create Article Type', 'mkb' ),
	'menu_name' 		=> __( 'Article Types', 'mkb' ),
	'parent_item'		=> __( 'Parent Article Type:', 'mkb' ),
];

$tax_args = [
	'hierarchical' 	    => true,
	'labels' 	    	=> $tax_labels,
	'show_ui' 	    	=> true,
	'show_admin_column' => true,
	'has_archive'		=> false,
	'query_var'	    	=> true,
	'show_in_rest'		=> true,
	'rewrite'			=> true,
];
register_taxonomy( 'kbtype', 'kbarticle', $tax_args );