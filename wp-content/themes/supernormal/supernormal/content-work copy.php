<?php

/**
 * @package WordPress
 * @subpackage Supernormal
 * @since Supernormal 1.0
 */

/*
 * 컴포넌트 - Work 콘텐츠
 */
$workClient = get_post_meta($post->ID, 'work-client', true);
$workDate = get_post_meta($post->ID, 'work-date', true);
$workCategory = get_post_meta($post->ID, 'work-category', true);

?>

<article id="post-<?php the_ID(); ?>" class="work-item card-type" <?php post_class(); ?>>
    <?php echo '<a href="' . esc_url(get_permalink()) . '">'; ?>
    <div class="entry-thumbnail">
        <?php echo the_post_thumbnail('post-thumbnail-img'); ?>
    </div>
    <div class="entry-text-wrap">

        <h1 class="entry-title">
            <?php the_title(); ?>
        </h1>
        <div class="entry-info">
            <div class="entry-category">
                <?php echo ($workCategory ? '<span class="customfield">' . $workCategory . '</span>' : ''); ?>
            </div>

            <div class="entry-category">
                <?php
                // 현재 포스트의 카테고리 가져오기
                $categories = get_the_category();
                if($categories) {
                    foreach($categories as $category) {
                        echo '<span class="customfield">' . esc_html($category->name) . '</span> ';
                    }
                }
                ?>
            </div>


            <span class="entry-date">
                <?php echo ($workClient ? '<span class="customfield">' . $workClient . '</span>' : ''); ?>
            </span>
        </div>
    </div>
    </a>
</article>