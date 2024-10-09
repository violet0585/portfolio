<?php

/**
 * @package WordPress
 * @subpackage Supernormal
 * @since Supernormal 1.0
 */

/*
 * 컴포넌트 - 헤더
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- 폰트 -->
    <link rel="stylesheet" as="style" crossorigin
        href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.6/dist/web/static/pretendard.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="site-header" role="header">
        <div class="container">
            <div class="site-logo-wrap">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img src=<?php echo esc_url( get_template_directory_uri() . ('/img/Logo.png')); ?> style="width: 70px;" >
                </a>
            </div>
            <nav id="site-navigation" class="site-navigation" role="navigation">

                <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>

            </nav>

            <!-- Mobile -->
            <div class="menu-btn">
                <!-- Moblie_nav -->
                <div class="menu-icon"></div>
            </div>
            <div class="menu-container">
                <nav class="more-navigation">
                    <div class="container">
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'primary-menu',
                                'menu_class' => 'gnb',
                                'container' => '',
                            )
                        ); ?>
                    </div>
                </nav>
                <div class="overlay"></div>
            </div>

        </div>
    </header>

    <!-- 페이지 공통 레이아웃 -->
    <main id="main" class="site-main" role="main">