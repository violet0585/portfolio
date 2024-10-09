<?php

/**
 * @package WordPress
 * @subpackage Supernormal
 * @since Supernormal 1.0
 */

/*
 * 싱글 콘텐츠
 */

$post_id = get_the_ID();
// 썸네일
// echo get_the_post_thumbnail_url(get_the_ID(), 'medium');
$thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium');
$style = '';
if (!empty($thumb)) {
    $style = 'style="background: url(' . $thumb . ') no-repeat center;"';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- <figure class="thumbnail-background" <?php echo trim($style); ?>></figure> -->


    <!-- if문 : 썸네일 이미지를 가지고 있다면 -->
    <?php if (has_post_thumbnail()) : ?>

        <div class="thumbnail-img">
            <?php echo the_post_thumbnail(); ?>
        </div>
        
    <?php endif; ?>



    <div class="post-header">
        <!-- 타이틀 -->
        <h2 class="post-title"><?php the_title(); ?></h2>
        <!-- <span class="post-date"><?php echo get_the_date(); ?></span> -->

        <div class="post-info">
            <!-- 날짜 -->
            <?php the_date('Y년 m월 d일', '<span class="post-date">', '</span>'); ?>

            <!-- 카테고리 -->
            <span class="post-categories">
                <?php the_category('  '); ?>
            </span>
        </div>
        <!-- 태그 -->
        <div class="post-tags">
            <?php echo get_the_tag_list('', ', '); ?>
        </div>

        <?php echo get_post_meta($post->ID, 'channel-name', true) ?>


        <?php echo '<span class="custom-field">영상 수: ' . get_post_meta($post->ID, 'number-of-videos', true) . '</span>'; ?>

    </div>

    <div class="post-content">
        <!-- 본문 -->
        <?php the_content(); ?>
    </div>
</article>