<?php
/**
 * Inspiro Customizer Guided Tour Class
 *
 * @package Inspiro
 * @since Inspiro 1.9.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

if (!class_exists('Inspiro_Customizer_Guided_Tour')) {

	/**
	 * The Customizer Guided Tour Class
	 */
	class Inspiro_Customizer_Guided_Tour {

		public function __construct() {
			add_action('admin_init', array($this, 'guider'));
		}

		public function guider() {
			global $pagenow;

			var_dump($pagenow);
		}
	}
}

new Inspiro_Customizer_Guided_Tour();
