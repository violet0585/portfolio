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
            <h3 class="category-title">관련 글</h3>
        </div>
        <div class="contents-list row">
            <?php
            $args = array(
                'posts_per_page' => 4, // 표시할 항목
                'post__not_in' => array(get_the_ID()), // 현재 글 제외
                'no_found_rows' => true, // 페이지네이션 필요없음
            );
            // 현재 카테고리
            $cats = wp_get_post_terms(get_the_ID(), 'category');

            //카테고리 id 배열
            $cats_ids = array();

            foreach ($cats as $related_cat) {
                $cats_ids[] = $related_cat->term_id;
            } // 반복문으로 array에 카테고리 id값 추가
            if (!empty($cats_ids)) {
                $args['category__in'] = $cats_ids;
            } //비어있는게 아니라면 array에 카테고리 id 추가
            

            $arr_posts = new WP_Query($args); ?>
            <!-- if문 : 해당 배열 안에 포스트 데이터를 가지고 있는지? -->
            <?php if ($arr_posts->have_posts()): ?>
                <!-- while문 : 해당 배열 안에 포스트를 반복해서 불러오기 -->
                <?php while ($arr_posts->have_posts()):
                    $arr_posts->the_post(); ?>
                    <!-- Start : 이 안에 코드 형식으로 출력 -->
                    <div class="col-3">
                        <?php get_template_part('content'); ?>
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