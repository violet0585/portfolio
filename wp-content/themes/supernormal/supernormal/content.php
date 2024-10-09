<?php

/**
 * @package WordPress
 * @subpackage Supernormal
 * @since Supernormal 1.0
 */

/*
 * 컴포넌트 - Blog 콘텐츠
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('blog-item card-type'); ?>>

        <div class="card-thumbnail">

            <a href="<?php echo get_permalink() ?>">
                <?php echo the_post_thumbnail('post-thumbnail-img'); ?>
            </a>
        </div>
        <div class="entry-text-wrap">
            <h1 class="entry-title"><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h1>

            <a href="<?php echo get_permalink() ?>"><?php the_excerpt(); ?></a>
            <!-- 55단어 불러오기 or 요약글 내용 불러오기 -->

            <div class="entry-info">
                <div class="entry-category">
                    <?php the_category(); ?>
                </div>
                <span class="entry-date">
                    <?php echo get_the_date(); ?>
                </span>
            </div>
        </div>
    </a>
</article>