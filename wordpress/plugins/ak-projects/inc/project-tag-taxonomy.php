<?php

class ProjectTagTaxonomy
{
	private const DOMAIN = 'akprojects';
	private const NAME = 'Tags';
	private const NAME_SINGULAR = 'Tag';

	public function __construct(){
		register_taxonomy('project_tag','Projects', $this->generate_options());
	}

	private function generate_labels(): array
	{
		return [
			'name' => _x(self::NAME, 'Taxonomy General Name', self::DOMAIN),
			'singular_name' => _x(self::NAME_SINGULAR, 'Taxonomy Singular Name', self::DOMAIN),
			'menu_name' => __(self::NAME, self::DOMAIN),
			'parent_item_colon' => __('Parent ' . self::NAME_SINGULAR, self::DOMAIN),
			'all_items' => __('All ' . self::NAME, self::DOMAIN),
			'add_new_item' => __('Add New ' . self::NAME_SINGULAR, self::DOMAIN),
			'edit_item' => __('Edit ' . self::NAME_SINGULAR, self::DOMAIN),
			'update_item' => __('Update ' . self::NAME_SINGULAR, self::DOMAIN),
			'search_items' => __('Search ' . self::NAME_SINGULAR, self::DOMAIN),
			'parent_item' => __( 'Parent ' . self::NAME_SINGULAR, self::DOMAIN ),
			'new_item_name' => __( 'New ' . self::NAME_SINGULAR . ' Name', self::DOMAIN ),
		];
	}

	private function generate_options(): array
	{
		return [
			'hierarchical' => false,
			'labels' => $this->generate_labels(),
			'show_ui' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'project-tag' ),
		];
	}
}
