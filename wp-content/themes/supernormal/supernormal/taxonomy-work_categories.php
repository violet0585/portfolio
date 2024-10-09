<?php

get_header();
global $wp_query;
?>
<section class="page-header">
	<div class="container">
		<div class="page-title-wrap">
			<?php
			if (is_category()) {
				printf('<h1 class="page-title">%s</h1>', single_cat_title('', false));
			} else {
				the_archive_title('<h1 class="page-title">', '</h1>');
			}
			the_archive_description('<h2 class="page-desc">', '</h2>');
			?>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<!-- 있을때 -->
			<?php if (have_posts()) : ?>
				<!-- 콘텐츠 loop -->
				<?php while (have_posts()) : the_post(); ?>
					<div class="col-4">
						<?php get_template_part('content-work'); ?>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<!-- 없을때 -->
				<?php get_template_part('template-parts/content-none'); ?>
			<?php endif; ?>
		</div>
		<?php the_posts_pagination(array('prev_text' => '', 'next_text' => '')); ?>
	</div>
</section>
<?php get_footer(); ?>