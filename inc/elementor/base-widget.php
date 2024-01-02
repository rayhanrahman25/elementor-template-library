<?php

namespace Bunyad\Elementor;

use Elementor\Controls_Manager;
use Bunyad;

/**
 * The base widget for all Elementor Widgets.
 */
abstract class BaseWidget extends \Elementor\Widget_Base 
{

	/**
	 * @inheritDoc
	 */
	

	/**
	 * Get the options class for this widget.
	 */
	public function get_options($init_editor = false) 
	{
	
	}

	public function get_name()
	{
		
	}

	public function get_title()
	{
		
	}

	public function get_icon() 
	{
		
	}

	public function get_categories()
	{
		
	}

	/**
	 * Get elementor configs from the block options object.
	 */
	public function get_block_config($key)
	{
	
	}

	/**
	 * Render Widget HTML
	 */
	protected function render()
	{
		
	}

	/**
	 * Process and return settings for block.
	 *
	 * @return array
	 */
	protected function _process_settings()
	{
		
	}

	/**
	 * Register the controls for this elementor widget.
	 * 
	 * Called on both front and backend.
	 */
	protected function register_controls()
	{
	
	}

	/**
	 * Register the controls on the provided element/widget.
	 *
	 * @param \Elementor\Controls_Stack $element
	 * @param \Bunyad\Blocks\Base\LoopOptions $options_obj
	 * @param array $section_data
	 * @return void
	 */
	public static function do_register_controls($element, $options_obj, $section_data = [])
	{
		
	}

	/**
	 * Convert the option to an elementor compatible control array.
	 */
	protected static function _map_control($option)
	{
		
	}

	/**
	 * Create an array with sections as keys.
	 * 
	 * @deprecated No longer used
	 */
	protected function _map_sections($options)
	{
		
	}

	/**
	 * Check if we are in the Elementor editor.
	 * 
	 * @return bool True if in Elementor Edit Mode
	 */
	public static function is_elementor()
	{
	
	}
}