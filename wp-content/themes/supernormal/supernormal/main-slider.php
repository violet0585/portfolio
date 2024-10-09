<!-- Slider main container -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <?php
        $hero = new WP_Query(
            array(
                'posts_per_page' => 3,
                'post_type' => 'work',
                'orderby' => 'rand',
            )
        )
            ?>
        <?php
        while ($hero->have_posts()):
            $hero->the_post(); ?>
            <div class="swiper-slide">
                <?php get_template_part('content-work-slide'); ?>
            </div>

            <?php
        endwhile;
        ?>


    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>