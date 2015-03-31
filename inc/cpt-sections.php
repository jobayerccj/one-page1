<?php

// Register Custom Post Type
function sections() {

	$labels = array(
		'name'                => _x( 'Sections', 'Post Type General Name', 'one_page1' ),
		'singular_name'       => _x( 'Section', 'Post Type Singular Name', 'one_page1' ),
		'menu_name'           => __( 'Sections', 'one_page1' ),
		'name_admin_bar'      => __( 'Section', 'one_page1' ),
		'parent_item_colon'   => __( 'Parent Item:', 'one_page1' ),
		'all_items'           => __( 'All Items', 'one_page1' ),
		'add_new_item'        => __( 'Add New Item', 'one_page1' ),
		'add_new'             => __( 'Add New', 'one_page1' ),
		'new_item'            => __( 'New Item', 'one_page1' ),
		'edit_item'           => __( 'Edit Item', 'one_page1' ),
		'update_item'         => __( 'Update Item', 'one_page1' ),
		'view_item'           => __( 'View Item', 'one_page1' ),
		'search_items'        => __( 'Search Item', 'one_page1' ),
		'not_found'           => __( 'Not found', 'one_page1' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'one_page1' ),
	);
	$args = array(
		'label'               => __( 'section', 'one_page1' ),
		'description'         => __( 'Section Description', 'one_page1' ),
		'labels'              => $labels,
		'supports'            => array( ),
		'taxonomies'          => array( 'section' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'section', $args );

}

// Hook into the 'init' action
add_action( 'init', 'sections', 0 );

