<?php

/**
 * @package WordPress
 * @subpackage Supernormal
 * @since Supernormal 1.0
 */

get_header(); ?>
<div class="page-header">
	<div class="container">
		<h2 class="page-title">404 Error</h2>
	</div>
</div>

<div class="container">
	<div class="text-wrap">
		<div class="error404-graphic"></div>
		<p>The page you are looking for is not found... <br>The URL may have changed.</p>
		<a class="button" href="<?php echo esc_url(home_url('/')); ?>">Back to Home</a>
	</div>

</div>

<?php get_footer(); ?>