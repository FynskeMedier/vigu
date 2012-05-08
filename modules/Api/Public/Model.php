<?php
/**
 * This file is part of the Vigu PHP error aggregation system.
 * @link https://github.com/Ibmurai/vigu
 *
 * @copyright Copyright 2012 Jens Riisom Schultz, Johannes Skov Frandsen
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
/**
 * Provides access to configuration.
 *
 * @author Jens Riisom Schultz <ibber_of_crew42@hotmail.com>
 */
class ApiPublicModel {
	/**
	 * @var array Backing field for the parsed vigu.ini.
	 */
	private static $_config;

	/**
	 * Get the configuration for a given option.
	 *
	 * @param string $option Options
	 *
	 * @return string
	 *
	 * @throws RuntimeException On configuration errors.
	 */
	protected static function _config($option) {
		if (!isset(self::$_config)) {
			self::_readConfig();
		}

		if (!isset(self::$_config[$option])) {
			throw new RuntimeException("The configuration option, $option, has not been defined in vigu.ini.");
		}

		return self::$_config[$option];
	}

	/**
	 * Attempt to read the vigu.ini into a static array.
	 *
	 * @return null
	 */
	private static function _readConfig() {
		if (file_exists($iniFile = dirname(__FILE__) . '/../../../vigu.ini')) {
			self::$_config = parse_ini_file($iniFile, true);
		} else {
			trigger_error('Could not locate vigu.ini.', E_USER_WARNING);
		}
	}
}
