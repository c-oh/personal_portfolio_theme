<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
// Register Project Project Type Taxonomy
function register_Project_type_taxonomy_() {
	$labels = array(
		'name'                       => 'Project Types',
		'singular_name'              => 'Project Type',
		'menu_name'                  => 'Project Types',
		'all_items'                  => 'All Project Types',
		'parent_item'                => 'Parent Project Type',
		'parent_item_colon'          => 'Parent Project Type:',
		'new_item_name'              => 'New Project Type Name',
		'add_new_item'               => 'Add New Project Type Item',
		'edit_item'                  => 'Edit Project Type',
		'update_item'                => 'Update Project Type',
		'view_item'                  => 'View Project Type',
		'separate_items_with_commas' => 'Separate Project types with commas',
		'add_or_remove_items'        => 'Add or remove Project types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Project Types',
		'search_items'               => 'Search Project Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Project Types',
		'items_list'                 => 'Project Type list',
		'items_list_navigation'      => 'Project Type list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'project_type', array( 'project' ), $args );
}
add_action( 'init', 'register_project_type_taxonomy_', 0 );