<?php

/**
 * @package WordPress
 * @subpackage Supernormal
 * @since Supernormal 1.0
 */

/*
 * 컴포넌트 - 사이드바
 */

?>
<aside id="sidebar" class="aside sidebar widget-area" role="complementary">
    <h3>work 관련 위젯</h3>
    <!-- 사이드바 위젯 있는지 확인 -->
    <?php if (is_active_sidebar('workssidebar-widget')) : ?>
        <div class="sidebar-widget">
            <?php dynamic_sidebar('workssidebar-widget'); ?>
        </div>
    <?php endif; ?>

    <!-- 여기에 구글 광고 추가 -->



</aside>