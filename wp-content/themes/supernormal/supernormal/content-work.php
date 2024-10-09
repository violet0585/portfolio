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
                <?php
                $terms = get_the_terms($post->ID, 'work_categories');
                if ($terms && !is_wp_error($terms)) {
                    foreach ($terms as $term) {
                        echo '<span>' . esc_html($term->name) . '</span> ';
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