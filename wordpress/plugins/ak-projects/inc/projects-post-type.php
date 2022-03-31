<?php

class ProjectsPostType
{
	private const DOMAIN = 'akprojects';
	private const NAME = 'Projects';
	private const NAME_SINGULAR = 'Project';

	public function __construct(){
		register_post_type(self::NAME, $this->generate_options());
	}

	private function generate_labels(): array
	{
		return [
			'name' => _x(self::NAME, 'Post Type General Name', self::DOMAIN),
			'singular_name' => _x(self::NAME_SINGULAR, 'Post Type Singular Name', self::DOMAIN),
			'menu_name' => __(self::NAME, self::DOMAIN),
			'parent_item_colon' => __('Parent ' . self::NAME_SINGULAR, self::DOMAIN),
			'all_items' => __('All ' . self::NAME, self::DOMAIN),
			'view_item' => __('View ' . self::NAME_SINGULAR, self::DOMAIN),
			'add_new_item' => __('Add New ' . self::NAME_SINGULAR, self::DOMAIN),
			'add_new' => __('Add New', self::DOMAIN),
			'edit_item' => __('Edit ' . self::NAME_SINGULAR, self::DOMAIN),
			'update_item' => __('Update ' . self::NAME_SINGULAR, self::DOMAIN),
			'search_items' => __('Search ' . self::NAME_SINGULAR, self::DOMAIN),
			'not_found' => __('Not Found', self::DOMAIN),
			'not_found_in_trash' => __('Not found in Trash', self::DOMAIN),
		];
	}

	private function generate_options(): array
	{
		return [
			'label' => __(self::NAME, self::DOMAIN),
			'description' => __('Movie news and reviews', self::DOMAIN),
			'labels' => $this->generate_labels(),
			'supports' => [
				'title',
				'editor',
				'excerpt',
				'author',
				'thumbnail',
				'comments',
				'revisions',
				'custom-fields',
			],
			'hierarchical' => false,
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'show_in_admin_bar' => true,
			'menu_position' => 5,
			'can_export' => true,
			'has_archive' => true,
			'exclude_from_search' => false,
			'taxonomies' => ['project_tag'],
			'publicly_queryable' => true,
			'capability_type' => 'post',
			'show_in_rest' => true,
		];
	}
}
