<?php

/**
 * @package WordPress
 * @subpackage Supernormal
 * @since Supernormal 1.0
 */

/*
 * 검색 결과 페이지
 */

get_header(); ?>
<div class="page-header">
    <div class="container">
        <h2 class="page-title">검색어 : <?php printf(__('%s', ''), '<span class="result-text">' . get_search_query() . '</span>'); ?></h2>검색 결과<span class="result-count"><?php echo $wp_query->found_posts; ?></span>
    </div>
</div>
<div class="container">
    <?php if (have_posts()) : ?>
        <div class="row">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-3">
                    <?php get_template_part('content'); ?>
                </div>
            <?php endwhile; ?>
            <?php the_posts_navigation(); ?>
        </div>
    <?php else : ?>
        <!-- 검색결과 없음 -->
        <?php get_template_part('content', 'none'); ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>