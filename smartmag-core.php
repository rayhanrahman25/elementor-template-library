<?php
/**
 * SmartMag Core
 *
 * Plugin Name:       SmartMag Core
 * Description:       Elements and core functionality for SmartMag Theme.
 * Version:           1.4.7
 * Author:            ThemeSphere
 * Author URI:        https://theme-sphere.com
 * License:           ThemeForest Split
 * License URI:       https://themeforest.net/licenses/standard
 * Text Domain:       smartmag
 * Domain Path:       /languages
 * Requires PHP:      7.1
 */

defined('WPINC') || exit;

class SmartMag_Core 
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

		/**
		 * Register autoloader. Usually uses the loader from theme if present.
		 */
		if (!class_exists('\Bunyad\Lib\Loader', false)) {
			require_once $this->path . 'lib/loader.php';
		}
		
		$path       = $this->path;
		$namespaces = [
			'Bunyad\Elementor\\' => $path . 'inc/elementor',
			'Bunyad\Studio\\'    => $path . 'inc/studio',
		];

		$loader = new \Bunyad\Lib\Loader($namespaces);

	}
	
	/**
	 * Setup to be hooked after setup theme.
	 */
	public function init()
	{		
		$this->did_init = true;
		$lib_path = $this->path . 'lib/';
		
		/**
		 * When one of our themes isn't active, use shims
		 */
		if (!class_exists('Bunyad_Core')) {
			require_once $this->path . 'lib/bunyad.php';
			require_once $this->path . 'inc/bunyad.php';
		}

		/**
		 * Setup filters and data
		 */

		// Elementor specific
		if (class_exists('\Elementor\Plugin') || did_action('elementor/loaded')) {
			$elementor = new \Bunyad\Elementor\Module;
			$elementor->register_hooks();

			// And the studio.
			new \Bunyad\Studio\Module;
		}

	}

	
	/**
	 * Singleton instance
	 * 
	 * @return SmartMag_Core
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
	$smartmag = SmartMag_Core::instance();
	add_action('after_setup_theme', [$smartmag, 'init']);

}, 1);
