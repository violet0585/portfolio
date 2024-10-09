<?php
/**
 * Integration with Divi theme.
 *
 * @package Hummingbird\Core\Integration
 */

namespace Hummingbird\Core\Integration;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Divi
 */
class Divi {

	/**
	 * Divi constructor.
	 */
	public function __construct() {
		if ( self::is_divi_theme_active() || class_exists( 'ET_Builder_Plugin' ) ) {
			add_action( 'init', array( $this, 'wphb_divi_after_init' ), 1 );
			add_action( 'admin_print_scripts', array( $this, 'wphb_dequeue_divi_js' ) );
			add_filter( 'wphb_minify_resource', array( $this, 'wphb_et_maybe_exclude_divi_essential_scripts' ), 10, 3 );
			add_filter( 'wphb_combine_resource', array( $this, 'wphb_et_maybe_exclude_divi_essential_scripts' ), 10, 3 );
			add_filter( 'wphb_minification_display_enqueued_file', array( $this, 'wphb_et_maybe_exclude_divi_essential_scripts' ), 10, 3 );
			add_filter( 'wphb_post_cache_purged', array( $this, 'wphb_post_cache_purged' ), 10, 2 );
		}
	}

	/**
	 * Run on init action.
	 */
	public function wphb_divi_after_init() {
		if ( self::is_divi_theme_active() ) {
			remove_action( 'wp_head', 'et_add_custom_css', 100 );
			add_action( 'wp_head', 'et_add_custom_css', 9999 );

			remove_action( 'wp_head', 'et_divi_add_customizer_css' );
			add_action( 'wp_head', 'et_divi_add_customizer_css', 9998 );
		}

		if ( $this->wphb_et_visual_builder_active() || $this->wphb_et_divi_builder_active() ) {
			add_filter( 'wp_hummingbird_is_active_module_minify', '__return_false', 500 );
		}
	}

	/**
	 * Check if Divi theme is active.
	 *
	 * @return bool
	 */
	public static function is_divi_theme_active() {
		$theme = wp_get_theme();
		return ( 'divi' === strtolower( $theme->get( 'Name' ) ) || 'divi' === strtolower( $theme->get_template() ) );
	}

	/**
	 * Dequeue the Support Center Divi JS.
	 *
	 * @return void
	 */
	public static function wphb_dequeue_divi_js() {
		$current_page = filter_input( INPUT_GET, 'page', FILTER_UNSAFE_RAW );
		$current_page = sanitize_text_field( $current_page );

		if ( is_admin() && ! empty( $current_page ) && false !== strpos( $current_page, 'wphb' ) ) {
			// It's a temporary fix for a conflicting script from Divi.
			wp_dequeue_script( 'et-support-center' );
		}

	}

	/**
	 * Check if visual builder is active.
	 *
	 * @return bool
	 */
	private function wphb_et_visual_builder_active() {
		return false !== strpos( $_SERVER['REQUEST_URI'], 'et_fb=1' );
	}

	/**
	 * Check if Divi framework is active.
	 *
	 * @return bool
	 */
	private function wphb_et_divi_builder_active() {
		return is_admin() && function_exists( 'et_builder_should_load_framework' ) && et_builder_should_load_framework();
	}

	/**
	 * Core Divi scripts that should be skipped with Asset Optimization.
	 *
	 * @return array
	 */
	private function wphb_et_divi_essential_scripts() {
		return array(
			'et-builder-modules-global-functions-script',
			'et-builder-modules-script',
			'divi-custom-script',
			'et-frontend-builder', // This is already handled by `wphb_divi_after_init()` , including it here to hide it in HB dashboard.
		);
	}

	/**
	 * Modify actions for Asset Optimization assets.
	 *
	 * @param bool         $action  Exclude or not.
	 * @param array|string $handle  Handle.
	 * @param string       $type    Asset type: styles or scripts.
	 *
	 * @return bool
	 */
	public function wphb_et_maybe_exclude_divi_essential_scripts( $action, $handle, $type ) {
		if ( is_array( $handle ) && isset( $handle['handle'] ) ) {
			$handle = $handle['handle'];
		}

		/**
		 * Fixes issue, where background video is not loading with js error.
		 *
		 * @since 1.7.2
		 */
		if ( 'wp-mediaelement' === $handle ) {
			$data = wp_scripts()->get_data( 'mediaelement', 'data' );
			wp_scripts()->add_inline_script( 'wp-mediaelement', $data, 'before' );
		}

		if ( 'scripts' === $type && in_array( $handle, $this->wphb_et_divi_essential_scripts(), true ) ) {
			return false;
		}

		return $action;
	}

	/**
	 * Return true if cache is already purge for given Post ID, default otherwise..
	 *
	 * @param bool $purge   Cache purge.
	 * @param int  $post_id Post ID.
	 *
	 * @return bool
	 */
	public function wphb_post_cache_purged( $purge, $post_id ) {
		static $purged_post_ids = array();

		if ( isset( $purged_post_ids[ $post_id ] ) ) {
			return true;
		}

		$purged_post_ids[ $post_id ] = 1;

		return $purge;
	}
}
