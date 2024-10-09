<?php
/**
 * Varnish API request class.
 *
 * @since 2.1.0
 * @package Hummingbird
 */

namespace Hummingbird\Core\Api\Request;

use Hummingbird\Core\Api\Exception;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Varnish
 */
class Varnish extends Request {

	/**
	 * Purge method.
	 *
	 * @since 2.1.0
	 * @var string
	 */
	private $purge_method = 'regex';

	/**
	 * Get API URL.
	 *
	 * @param string $path  Path.
	 *
	 * @return string
	 */
	public function get_api_url( $path = '' ) {
		return get_option( 'home' ) . $path;
	}

	/**
	 * Add header args.
	 *
	 * @since 2.1.0
	 */
	protected function sign_request() {
		$this->add_header_argument( 'X-Purge-Method', $this->purge_method );
	}

	/**
	 * Make request.
	 *
	 * @since 2.1.0
	 *
	 * @param string $path    Request path.
	 * @param array  $data    Data.
	 * @param string $method  Method.
	 *
	 * @return array|mixed|object|string
	 * @throws Exception  Exception.
	 */
	public function request( $path, $data = array(), $method = 'purge' ) {
		$response = parent::request( $path, $data, $method );

		if ( is_wp_error( $response ) ) {
			throw new Exception( $response->get_error_message(), $response->get_error_code() );
		}

		$code = wp_remote_retrieve_response_code( $response );
		$body = json_decode( wp_remote_retrieve_body( $response ) );

		if ( $body && 200 !== $code ) {
			/* translators: %s: varnish error */
			throw new Exception( sprintf( __( 'Varnish error: %s', 'wphb' ), $body->errors[0]->message ), $code );
		} elseif ( false === $body ) {
			throw new Exception( __( 'Varnish unknown error', 'wphb' ), $code );
		}

		return $body;
	}

	/**
	 * Add an alternative method to purge Varnish cache.
	 *
	 * @since 2.7.2
	 *
	 * @param string $path  Relative path.
	 */
	public function clear_cache( $path ) {
		$url = $this->get_api_url( $path );

		if ( isset( $_SERVER['HTTP_HOST'] ) ) {
			$domain = htmlentities( wp_unslash( $_SERVER['HTTP_HOST'] ) ); // Input var ok.
		} else {
			$domain = untrailingslashit( get_site_url( null, null, 'https' ) );
		}

		if ( ! defined( 'WPHB_VARNISH_IP' ) ) {
			define( 'WPHB_VARNISH_IP', ':443:127.0.0.1' );
		}

		$varniship = apply_filters( 'wphb_varnish_ip', WPHB_VARNISH_IP );
		$resolver = str_replace( array( 'http://', 'https://' ), '', $domain ) . $varniship;
		$request   = 'PURGE';

		if ( empty( $path ) || '/' === $path ) {
			$request = 'PURGEALL';
		}

		try {
			$ch = curl_init();

			curl_setopt_array(
				$ch,
				array(
					CURLOPT_URL                  => $url,
					CURLOPT_RETURNTRANSFER       => true,
					CURLOPT_NOBODY               => true,
					CURLOPT_HEADER               => false,
					CURLOPT_CUSTOMREQUEST        => $request,
					CURLOPT_FOLLOWLOCATION       => true,
					CURLOPT_DNS_USE_GLOBAL_CACHE => false,
					CURLOPT_TIMEOUT              => 2000,
					CURLOPT_RESOLVE              => array(
						$resolver,
					),
				)
			);

			curl_exec( $ch );
			curl_close( $ch );
		} catch ( \Exception $e ) {
			error_log( 'Error purging varnish cache: ' . $e->getMessage() );
		}
	}

}
