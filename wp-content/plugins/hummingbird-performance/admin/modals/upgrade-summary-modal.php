<?php
/**
 * Upgrade highlight modal.
 *
 * @since 2.6.0
 * @package Hummingbird
 */

use Hummingbird\Core\Utils;
use Hummingbird\Core\Modules\Caching\Fast_CGI;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="sui-modal sui-modal-md">
	<div
			role="dialog"
			id="upgrade-summary-modal"
			class="sui-modal-content"
			aria-modal="true"
			aria-labelledby="upgrade-summary-modal-title"
	>
		<div class="sui-box">
			<div class="sui-box-header sui-flatten sui-content-center sui-spacing-top--60">
				<?php if ( ! apply_filters( 'wpmudev_branding_hide_branding', false ) ) : ?>
					<figure class="sui-box-banner" aria-hidden="true">
						<img src="<?php echo esc_url( WPHB_DIR_URL . 'admin/assets/image/upgrade-summary-bg.png' ); ?>" alt=""
							srcset="<?php echo esc_url( WPHB_DIR_URL . 'admin/assets/image/upgrade-summary-bg.png' ); ?> 1x, <?php echo esc_url( WPHB_DIR_URL . 'admin/assets/image/upgrade-summary-bg@2x.png' ); ?> 2x">
					</figure>
				<?php endif; ?>

				<button class="sui-button-icon sui-button-float--right" onclick="window.WPHB_Admin.dashboard.hideUpgradeSummary( this )">
					<span class="sui-icon-close sui-md" aria-hidden="true"></span>
					<span class="sui-screen-reader-text"><?php esc_attr_e( 'Close this modal', 'wphb' ); ?></span>
				</button>

				<h3 id="upgrade-summary-modal-title" class="sui-box-title sui-lg" style="white-space: inherit">
					<?php esc_html_e( 'Turbocharge your Page Caching with improved Static Server Cache integration', 'wphb' ); ?>
				</h3>
			</div>

			<div class="sui-box-body sui-spacing-top--20 sui-spacing-bottom--30">
				<div class="wphb-upgrade-feature">
					<p class="wphb-upgrade-item-desc" style="text-align: center">
						<?php
						printf(
							esc_html__( 'You can now seamlessly switch to WPMU DEV hosting\'s Static Server Cache from within Hummingbird. Get 10x more visitor load capacity and greater cache control right in the plugin', 'wphb' )
						);
						?>
					</p>
					<p class="wphb-upgrade-item-desc" style="text-align: center;font-style: italic;">
						<?php esc_html_e( 'Available only with WPMU DEV Hosting.', 'wphb' ); ?>
					</p>
				</div>
				<div class="wphb-upgrade-feature">
					<?php
					$open_in_new_tab = false;
					$switch_cache    = false;
					if ( is_multisite() ) {
						$hb_button      = esc_html__( 'Got it', 'wphb' );
						$hb_button_link = '#';
						printf( /* translators: %1$s - opening p tag, %2$s - opening <strong> tag, %3$s - closing <strong> tag, %4$s - closing p tag */
							esc_html__( '%1$sTo enable this feature, go to %2$sCaching%3$s.%4$s', 'wphb' ),
							'<p class="wphb-upgrade-item-desc" style="text-align: center;margin-top: 10px">',
							'<strong>',
							'</strong>',
							'</p>'
						);
					} elseif ( Utils::get_api()->hosting->has_fast_cgi_header() ) {
						$hb_button      = esc_html__( 'CHECK IT OUT NOW', 'wphb' );
						$hb_button_link = Utils::get_admin_menu_url( 'caching' );
					} elseif ( Fast_CGI::is_fast_cgi_supported() ) {
						$switch_cache   = true;
						$hb_button      = esc_html__( 'Switch to Static Server Cache', 'wphb' );
						$hb_button_link = '#';
					} else {
						$open_in_new_tab = true;
						$hb_button       = esc_html__( 'SEE PLANS', 'wphb' );
						$hb_button_link  = Utils::get_link( 'hosting-upsell', 'welcome_modal_ssc_hosting_upsell' );
					}
					?>
				</div>
			</div>

			<div class="sui-box-footer sui-flatten sui-content-center sui-spacing-bottom--50">
				<a href="<?php echo esc_url( $hb_button_link ); ?>" id="wphb-switch-page-cache-method-summary-box" class="sui-button sui-button-blue"
					<?php
					if ( $open_in_new_tab ) {
						echo 'target="_blank"';
					}
					if ( $switch_cache ) {
						echo 'data-switch-to-fastcgi="switch"';
					}
					?>
					onclick="window.WPHB_Admin.dashboard.hideUpgradeSummary( this )">
					<span class="sui-button-text-default">
						<?php echo esc_html( $hb_button ); ?>
					</span>
					<!-- Loading State Content -->
					<span class="sui-button-text-onload" style="display: none;">
						<span class="sui-icon-loader sui-loading" aria-hidden="true"></span>
						<?php esc_html_e( 'Switching', 'wphb' ); ?>
					</span>
				</a>
			</div>
		</div>
	</div>
</div>
