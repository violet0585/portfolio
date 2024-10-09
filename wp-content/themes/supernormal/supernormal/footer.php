<?php

/**
 * @package WordPress
 * @subpackage Supernormal
 * @since Supernormal 1.0
 */

/*
 * 컴포넌트 - 푸터
 */
?>

</main><!-- #main -->
<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="site-info">
            <!-- 푸터 위젯 있는지 확인 -->
            <?php if (is_active_sidebar('footer-widget')) : ?>
                <div class="footer-widget">
                    <?php dynamic_sidebar('footer-widget'); ?>
                </div>
            <?php endif; ?>
            <div class="copyright">Designed and Developed by Yehee Kim</div>
            <div>
                <a href="https://www.linkedin.com/in/chloe-yehee-kim-10a69a171/" target="_blank" class="footerButton">LinkedIn</a>
                /
                <a href="mailto:violet0585@gmail.com" class="footerButton">Email</a>
            </div>
        </div>

    </div>
    <div class="scroll-top">
        <div class="scroll-top-text">Up!</div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>