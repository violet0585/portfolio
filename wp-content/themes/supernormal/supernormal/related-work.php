<?php
/**
 * @package WordPress
 * @subpackage Supernormal
 * @since Supernormal 1.0
 */
?>

<!-- related post -->
<section class="related-section">
    <div class="container">
        <div class="category-title-wrap">
            <h3 class="category-title">관련 작업</h3>
        </div>
        <div class="contents-list row">
            <!-- 배열에 대한 정의 -->
            <?php
            $args = array(
                'posts_per_page' => 3, // 표시할 항목
                'post_type' => 'work',
                'post__not_in' => array(get_the_ID()), // 현재 글 제외
                'no_found_rows' => true, // 페이지네이션 필요없음
            );
            $arr_posts = new WP_Query($args); ?>
            <!-- if문 : 해당 배열 안에 포스트 데이터를 가지고 있는지? -->
            <?php if ($arr_posts->have_posts()): ?>
                <!-- while문 : 해당 배열 안에 포스트를 반복해서 불러오기 -->
                <?php while ($arr_posts->have_posts()):
                    $arr_posts->the_post(); ?>
                    <!-- Start : 이 안에 코드 형식으로 출력 -->
                    <div class="col-4">
                        <?php get_template_part('content-work'); ?>
                    </div>
                    <!-- End : 이 안에 코드 형식으로 출력 -->
                <?php endwhile; ?>

            <?php else: ?>
                <!-- if문 : 해당 배열 안에 포스트 데이터를 가지고 있지 않을 때 해당 코드 실행 -->
                <?php get_template_part('content', 'empty'); ?>
            <?php endif; ?>

        </div>

    </div>
</section>