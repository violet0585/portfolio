<?php

/**
 * @package WordPress
 * @subpackage Supernormal
 * @since Supernormal 1.0
 */

get_header(); ?>
<div class="page-header">
    <div class="container">
        <h2 class="page-title">뉴스</h2>
        <?php get_search_form(); ?>
    </div>
</div>

<section class="card-lists">
    <div class="container">
        <div class="row">
            <!-- if문 : 해당 배열 안에 포스트 데이터를 가지고 있는지? -->
            <?php if (have_posts()): ?>

                <!-- while문 : 해당 배열 안에 포스트를 반복해서 불러오기 -->
                <?php while (have_posts()):
                    the_post(); ?>
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





        <?php the_posts_pagination(
            array(
                'prev_text' => '',
                'next_text' => ''
            )
        ); ?>


    </div>
</section>
<?php get_footer(); ?>