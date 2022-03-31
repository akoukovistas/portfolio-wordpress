<?php
defined( 'ABSPATH' ) or die();

/**
 * Plugin Name:     Ak Projects
 * Plugin URI:      https://alexandros.work
 * Description:     Custom Projects Showcase
 * Author:          Alexandros Koukovistas
 * Author URI:      https://alexandros.work
 * Text Domain:     ak-projects
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Ak_Projects
 */


define( 'AKP_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
define( 'AKP_PLUGIN_NAME', trim( dirname( SIN_PLUGIN_BASENAME ), '/' ) );
define( 'AKP_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );
define( 'AKP_PLUGIN_URL', untrailingslashit( plugins_url( '', __FILE__ ) ) );

include AKP_PLUGIN_DIR . '/inc/projects-post-type.php';
include AKP_PLUGIN_DIR . '/inc/project-tag-taxonomy.php';

add_action('init', function(){
	new ProjectTagTaxonomy();
	new ProjectsPostType();
},0);
