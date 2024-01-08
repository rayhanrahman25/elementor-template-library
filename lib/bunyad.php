<?php
/**
 * Bunyad Framework - factory and pseudo-registry for objects
 * 
 * Basic namespacing utility is provided by this factory for easy changes
 * for a a theme that has different needs than the original one. 
 * 
 * @package Bunyad
 */
class Bunyad_Base 
{
	
	protected static $_cache = array();
	protected static $_registered = array();

	public static $fallback_path;
	
	/**
	 * Build the required object instance
	 * 
	 * @param string  $object
	 * @param boolean $fresh 	Whether to get a fresh copy; will not be cached and won't override 
	 * 							current copy in cache.
	 * @param mixed ...$args    Arguments to pass to the constructor.
	 * @return false|object
	 */
	public static function factory($object = 'core', $fresh = false, ...$args)
	{
		
	}

	/**
	 * Load a specific class's file.
	 */
	public static function load_file($id) 
	{
	
	}
	
	public static function file_to_class_name($file_name)
	{
		
	}
	
	/**
	 * Core class
	 * 
	 * @return Bunyad_Core
	 */
	public static function core($fresh = false) 
	{
		
	}
	
	/**
	 * Options class
	 * 
	 * @return Bunyad_Options
	 */
	public static function options($fresh = false)
	{
		
	}
	
	/**
	 * Call registered loaders or registry objects - alias for factory at the moment.
	 * 
	 * @param string $name
	 * @param array  $fresh
	 */
	public static function get($name, $fresh = false)
	{

	}

	
}