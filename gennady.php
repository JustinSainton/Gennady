<?php
/**
 * Plugin Name: Gennady
 * Plugin URI: http://zao.is/
 * Description: Presentation Plugin, based on reveal.js, with highly publicized Gennady Kovshenin API.  That is, you can define tweets based on slide transition, to give the effect of live-tweeting your own presentation
 * Version: 0.7
 * Author: Justin Sainton and Justin Sternberg
 * Author URI: http://zao.is/
 */

class Gennady_Tweets {
	static $instance = null;

	/**
	 * Private constructor to force the singleton pattern
	 */
	private function __construct() {
		self::init();
	}

	/**
	 * Function to instantiate our class and make it a singleton
	 */
	public static function get_instance() {
		if ( ! self::$instance )
			self::$instance = new self;

		return self::$instance;
	}

	public function init() {

	}

}

Gennady_Tweets::get_instance();