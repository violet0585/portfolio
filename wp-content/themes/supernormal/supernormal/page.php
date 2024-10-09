<?php

/**
 * @package WordPress
 * @subpackage Supernormal
 * @since Supernormal 1.0
 */

/*
 * Template Name: 공통 페이지
 */
get_header();

$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>

<?php if (has_post_thumbnail()) : ?>
	<div class="page-header page-cover-img" style="background-image: url('<?php echo $thumb['0']; ?>')">
	<?php else : ?>
		<div class="page-header">
		<?php endif; ?>
		<div class="container">
			<h2 class="page-title">
				<?php echo get_the_title(); ?>
			</h2>
		</div>
		</div>

		<?php 
		if (is_page('sample')){
			?>
				<h2>여기는 샘플 페이지입니다.</h2>
			<?php
			#홈
		}
		elseif(is_page('about')){
			?>
			<h2>어바웃</h2>
			<?php
			#어바웃 페이지
		}
		else{
			?>
			<h2>기타</h2>
			<?php
			#기타 페이지
		}
		?>

		<div class="container">
			<?php while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile;
			?>
		</div>
		<?php get_footer(); ?>