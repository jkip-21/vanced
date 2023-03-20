<?php
/**
 * @package Contact-Vanced
 */

 namespace Inc\Page;

class CPT {

	function register(){
		add_action( 'init', array($this, 'contact_cpt_init' ));
	}

	function contact_cpt_init() {



	$labels = array(
		'name'                  => _x( 'contacts', 'Post type general name', 'taskbook' ),
		'singular_name'         => _x( 'contact', 'Post type singular name', 'taskbook' ),
		'menu_name'             => _x( 'contacts', 'Admin Menu text', 'taskbook' ),
		'name_admin_bar'        => _x( 'contact', 'Add New on Toolbar', 'taskbook' ),
		'add_new'               => __( 'Add New', 'taskbook' ),
		'add_new_item'          => __( 'Add New contact', 'taskbook' ),
		'new_item'              => __( 'New contact', 'taskbook' ),
		'edit_item'             => __( 'Edit contact', 'taskbook' ),
		'view_item'             => __( 'View contact', 'taskbook' ),
		'all_items'             => __( 'All contacts', 'taskbook' ),
		'search_items'          => __( 'Search contacts', 'taskbook' ),
		'parent_item_colon'     => __( 'Parent contacts:', 'taskbook' ),
		'not_found'             => __( 'No contacts found.', 'taskbook' ),
		'not_found_in_trash'    => __( 'No contacts found in Trash.', 'taskbook' ),
		'featured_image'        => _x( 'contact Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'taskbook' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'taskbook' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'taskbook' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'taskbook' ),
		'archives'              => _x( 'contact archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'taskbook' ),
		'insert_into_item'      => _x( 'Insert into contact', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'taskbook' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this contact', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'taskbook' ),
		'filter_items_list'     => _x( 'Filter contacts list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'taskbook' ),
		'items_list_navigation' => _x( 'contacts list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'taskbook' ),
		'items_list'            => _x( 'contacts list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'taskbook' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'contacts' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 101,
        'menu_icon'          => 'dashicons-format-chat',
        'show_in_rest'       => true,
        'rest_base'          => 'contacts',
		'supports'           => array( 'title', 'editor', 'author'),
	);

	register_post_type( 'contact', $args );
	}
}