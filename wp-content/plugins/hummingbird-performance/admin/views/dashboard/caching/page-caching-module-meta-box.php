<?php
/**
 * Page caching meta box on dashboard page.
 *
 * @package Hummingbird
 *
 * @var string $activate_url          Activate URL.
 * @var bool   $is_active             Currently active.
 * @var bool   $has_fastcgi           Has FastCGI enabled.
 * @var bool   $is_fast_cgi_supported FastCGI support.
 * @var bool   $is_homepage_preload   Homepage preload status.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$cache_notice = $has_fastcgi ? __( 'Static Server Cache is currently active.', 'wphb' ) : __( 'Page caching is currently active.', 'wphb' );
?>
<p class="sui-margin-bottom">
	<?php esc_html_e( 'Store static HTML copies of your pages and posts to reduce the processing load on your server and dramatically speed up your page load time.', 'wphb' ); ?>
</p>

<?php if ( $is_active ) : ?>
	<?php $this->admin_notices->show_inline( $cache_notice ); ?>
<?php else : ?>
	<a href="<?php echo esc_url( $activate_url ); ?>" class="sui-button sui-button-blue" id="activate-page-caching" onclick="wphbMixPanel.trackPageCachingSettings( 'activate', '<?php echo $is_fast_cgi_supported ? 'hosting_static_cache' : 'Page Caching'; ?>', 'dash_widget', 'na', '<?php echo esc_attr( $is_homepage_preload ); ?>' )">
		<?php esc_html_e( 'Activate', 'wphb' ); ?>
	</a>
<?php endif; ?>
