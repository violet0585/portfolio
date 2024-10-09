<?php

/**
 * @package WordPress
 * @subpackage Supernormal
 * @since Supernormal 1.0
 */

/*
 * 카테고리 페이지
 */
get_header(); ?>

<div class="page-header">
    <div class="container">
        <h1 class="page-title">Work</h1>
    </div>
</div>




<section class="post-list-wrap">
    <div class="container">
        <div class="row">
            <?php
            if (wp_is_mobile()) {
                $work = new WP_Query(
                    array(
                        'posts_per_page' => 1,
                        'post_type' => 'work',
                        'order' => 'date',
                    )
                );
            } else {
                $work = new WP_Query(
                    array(
                        'posts_per_page' => 2,
                        'post_type' => 'work',
                        'order' => 'date',
                    )
                );
            } ?>

            <?php if (have_posts()): ?>

                <?php while ($work->have_posts()):
                    $work->the_post();
                    ?>
                    <div class="col-4">
                        <?php get_template_part('content-work'); ?>
                    </div>
                <?php endwhile; ?>

                <?php the_posts_pagination(array('prev_text' => '', 'next_text' => ''), $work->max_num_pages); ?>

            <?php else: ?>

                <?php get_template_part('content-none', get_post_format()); ?>

            <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>