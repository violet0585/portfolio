<?php

/**
 * @package WordPress
 * @subpackage Supernormal
 * @since Supernormal 1.0
 */

/*
 * 싱글 페이지 (글 상세)
 */
get_header();
?>
<div class="container single-layout">
    <div class="align-left">

        <!-- 브레드 크럼 -->
        <?php supernormal_breadcrumbs() ?>

        <?php while (have_posts()):
            the_post(); ?>
            <!-- 싱글 페이지 -->
            <?php get_template_part('content-page'); ?>

            <!-- 페이지네이션 -->
            <?php get_template_part('pagination'); ?>

            <!-- 댓글 -->
            <?php
            if (comments_open() || '0' != get_comments_number())
                comments_template('', true);
            ?>
        <?php endwhile; ?>
    </div>
    <div class="align-right">
        <!-- 사이드바 -->
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_template_part('related-post'); ?>
<?php get_footer(); ?>