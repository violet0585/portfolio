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

$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>

<article id="post-<?php the_ID(); ?>" class="work-item slide-type" <?php post_class(); ?>>

    <div class="entry-thumbnail"
        style="height:480px; background: url('<?php echo $thumb['0']; ?>') no-repeat center; background-size: cover;">

        <!-- <?php echo the_post_thumbnail(); ?> -->
    </div>
    <div class="container">
        <div class="entry-text-wrap">
            <h1 class="entry-title">
                <?php echo '<a href="' . esc_url(get_permalink()) . '">'; ?>
                <?php the_title(); ?>
                </a>
            </h1>
            <div class="entry-info">
                <div class="entry-category">
                    <?php echo ($workCategory ? '<span class="customfield">' . $workCategory . '</span>' : ''); ?>
                </div>

                <span class="entry-date">
                    <?php echo ($workClient ? '<span class="customfield">' . $workClient . '</span>' : ''); ?>
                </span>
            </div>
            <a class="button line-button" href="<?php echo esc_url(get_permalink()); ?>"">View Detail</a>
        </div>
    </div>

</article>