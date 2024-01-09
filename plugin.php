<?php
/**
 * Elementor Template Library
 *
 * Plugin Name:       Elementor Template Library
 * Description:       Template library for elementor
 * Version:           0.0.8
 * Author:            rayhan420
 * Author URI:        https://github.com/rayhanrahman25
 * Text Domain:       template-libra
 * Domain Path:       /languages
 * Requires PHP:      7.1
 */

defined('WPINC') || exit;

class RR_Template_Library 
{
	const VERSION    = '1.4.7';

	// Due to legacy reasons, it's named smartmag without dash.
	const THEME_SLUG = 'smartmag';

	protected static $instance;

	/**
	 * Path to plugin folder, trailing slashed.
	 */
	public $path;
	public $path_url;

	/**
	 * Flag to indicat plugin successfuly ran init. This confirms no conflicts.
	 */
	public $did_init = false;

	/**
	 * Whether the correct accompanying theme exists or implementations are done.
	 *
	 * @var boolean
	 */
	public $theme_supports = [];

	public function __construct()
	{
		$this->path = plugin_dir_path(__FILE__);

		// URL for the plugin dir
		$this->path_url = plugin_dir_url(__FILE__);

	}
	
	/**
	 * Setup to be hooked after setup theme.
	 */
	public function init()
	{

		include_once($this->path . 'inc/studio/module.php');

		/**
		 * Setup filters and data
		 */

		// Elementor specific
		if (class_exists('\Elementor\Plugin') || did_action('elementor/loaded')) {
			// And the studio.
			new \Bunyad\Studio\Module;
		}

	}

	
	/**
	 * Singleton instance
	 * 
	 * @return RR_Template_Library
	 */
	public static function instance() 
	{
		if (!isset(self::$instance)) {
			self::$instance = new self;
		}
		
		return self::$instance;
	}
}

/**
 * Add notice and bail if there's an incompatible plugin active.
 * 
 * Note: Needed for outdated libs in ContentBerg Core. Not required for others, but 
 * good practice to keep them out for conflicting features.
 */
add_action('after_setup_theme', function() {

	/**
	 * Initialize the plugin at correct hook.
	 */
	$smartmag = RR_Template_Library::instance();
	add_action('after_setup_theme', [$smartmag, 'init']);

}, 1);
