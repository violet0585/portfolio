<?php

if (!function_exists('supernormal_setup')):

    // 기본 세팅 
    function supernormal_setup()
    {
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('post-thumbnail-img', 345);

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );
    }
endif; // supernormal_setup
add_action('after_setup_theme', 'supernormal_setup');


function supernormal_style_sheet()
{
    // wp_enqueue_style('supernormal-style', get_stylesheet_uri());
    wp_enqueue_style('supernormal-style', get_stylesheet_directory_uri() . '/style.min.css');
    // wp_enqueue_style('swiper-style', get_stylesheet_directory_uri() . '/css/swiper-bundle.min.css');
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
}
add_action('wp_enqueue_scripts', 'supernormal_style_sheet');


function supernormal_script_enqueue()
{
    // jQuery
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array('jquery'));

    // wp_enqueue_script('swiper-script', get_stylesheet_directory_uri() . '/js/swiper-bundle.min.js', array(), '1.0.0', true);
    wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '8.0.0', true);

    wp_enqueue_script('home-script', get_stylesheet_directory_uri() . '/js/home.js', array(), '1.0.0', true);

    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/custom.min.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'supernormal_script_enqueue');



// 커스텀 메뉴
function supernormal_custom_menu()
{
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu', 'supernormal'),
            'footer-menu' => __('Footer Menu', 'supernormal'),
            'sidebar-menu' => __('Sidebar Menu', 'supernormal'),
        )
    );
}
add_action('init', 'supernormal_custom_menu');

// 커스텀 사이드바 위젯
function supernormal_widgets_sidebar_init()
{

    $my_sidebers = array(
        array(
            'name' => __('Blog Sidebar', 'supernormal'),
            'id' => 'blogsidebar-widget',
            'description' => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ),
        array(
            'name' => __('Works Sidebar', 'supernormal'),
            'id' => 'workssidebar-widget',
            'description' => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ),
        array(
            'name' => __('About Sidebar', 'supernormal'),
            'id' => 'aboutsidebar-widget',
            'description' => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );

    foreach ($my_sidebers as $sidebar) {
        register_sidebar($sidebar);
    }

}
add_action('widgets_init', 'supernormal_widgets_sidebar_init');


// 커스텀 푸터 위젯
function supernormal_widgets_footer_init()
{
    register_sidebar(
        array(
            'name' => __('Footer', 'supernormal'),
            'id' => 'footer-widget',
            'description' => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'supernormal_widgets_footer_init');


add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_year()) {
        $title = get_the_date(_x('Y', 'yearly archives date format'));
    } elseif (is_month()) {
        $title = get_the_date(_x('F Y', 'monthly archives date format'));
    } elseif (is_day()) {
        $title = get_the_date(_x('F j, Y', 'daily archives date format'));
    } elseif (is_tax('post_format')) {
        if (is_tax('post_format', 'post-format-aside')) {
            $title = _x('Asides', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-gallery')) {
            $title = _x('Galleries', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-image')) {
            $title = _x('Images', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-video')) {
            $title = _x('Videos', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-quote')) {
            $title = _x('Quotes', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-link')) {
            $title = _x('Links', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-status')) {
            $title = _x('Statuses', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-audio')) {
            $title = _x('Audio', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-chat')) {
            $title = _x('Chats', 'post format archive title');
        }
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    } else {
        $title = __('Archives');
    }
    return $title;
});


// 요약글 수 정의
function sn_excerpt_length($length)
{
    return 10;
}
add_filter('excerpt_length', 'sn_excerpt_length', 999);


// 요약글 p태그 클래스 추가
function sn_excerpt_addclass($post_excerpt)
{
    $post_excerpt = '<p class="entry-excerpt">' . $post_excerpt . '</p>';
    return $post_excerpt;
}
add_filter('get_the_excerpt', 'sn_excerpt_addclass');

// 브레드 크럼스
function supernormal_breadcrumbs()
{
    $text['home'] = _x('홈', 'supernormal'); // 'Home' 링크의 텍스트
    $text['category'] = __('%s', 'supernormal'); // 카테고리 페이지의 텍스트
    $text['search'] = __('검색 "%s" 쿼리', 'supernormal'); // 검색 결과 페이지의 텍스트
    $text['tag'] = __('태그 "%s"', 'supernormal'); // 태그 페이지의 텍스트
    $text['tax'] = '%s'; // 태그 페이지의 텍스트
    $text['author'] = __('작성자 %s', 'supernormal'); // 작성자 페이지의 텍스트
    $text['404'] = __('에러 404', 'supernormal'); // 404 페이지의 텍스트

    $show_current = 1; // 1 - 브레드크럼에 현재 포스트/페이지/카테고리 제목을 표시, 0 - 표시 안 함
    $show_on_home = 0; // 1 - 홈페이지에 브레드크럼 표시, 0 - 표시 안 함
    $show_home_link = 1; // 1 - '홈' 링크 표시, 0 - 표시 안 함
    $show_title = 1; // 1 - 링크의 제목을 표시, 0 - 표시 안 함
    $delimiter = '<span class="arrow"></span> '; // 브레드크럼 간 구분자
    $before = '<span class="current">'; // 현재 브레드크럼 앞의 태그
    $after = '</span>'; // 현재 브레드크럼 뒤의 태그

    // 전역 변수와 홈페이지 링크, 각 링크의 속성을 설정합니다.
    global $post;
    $home_link = home_url('/');
    $link_before = '<span>';
    $link_after = '</span>';
    $link_attr = ' rel="v:url" property="v:title"';
    $link = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
    if (isset($post)) {
        $parent_id = $parent_id_2 = $post->post_parent;
    }
    $frontpage_id = get_option('page_on_front');

    // 홈페이지 또는 메인 페이지인 경우
    if (is_home() || is_front_page()) {
        if ($show_on_home == 1)
            echo '<div class="breadcrumb"><div class="flex-wrap"><span><a href="' . $home_link . '">' . $text['home'] . '</a></span></div>';
    } else {

        echo '<div class="breadcrumb"><div class="flex-wrap">';
        // $show_on_home이 1인 경우 실행인데 현재는 0이라서 실행 안함
        if ($show_home_link == 1) {
            echo '<span><a href="' . $home_link . '" rel="v:url" property="v:title">' . $text['home'] . '</a></span>';
            if ($frontpage_id == 0 || $parent_id != $frontpage_id)
                echo $delimiter;
        }
        // 카테고리 페이지인 경우
        if (is_category()) {
            $this_cat = get_category(get_query_var('cat'), false);
            if ($this_cat->parent != 0) {
                $cats = get_category_parents($this_cat->parent, TRUE, $delimiter);
                if ($show_current == 0)
                    $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
                $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
                $cats = str_replace('</a>', '</a>' . $link_after, $cats);
                if ($show_title == 0)
                    $cats = preg_replace('/ title="(.*?)"/', '', $cats);
                echo $cats;
            }
            if ($show_current == 1)
                echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;
            // 택소노미 페이지인 경우
        } elseif (is_tax()) {
            $this_cat = get_category(get_query_var('cat'), false);
            if ($this_cat->parent != 0) {
                $cats = get_category_parents($this_cat->parent, TRUE, $delimiter);
                $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
                $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
                echo $cats;
            }
            echo $before . sprintf($text['tax'], single_cat_title('', false)) . $after;
            // 검색 결과 페이지인 경우
        } elseif (is_search()) {
            echo $before . sprintf($text['search'], get_search_query()) . $after;
            // 날짜별 아카이브 페이지인 경우 (예: 특정 년/월/일의 글 목록)
        } elseif (is_day()) {
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
            echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F')) . $delimiter;
            echo $before . get_the_time('d') . $after;
        } elseif (is_month()) {
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
            echo $before . get_the_time('F') . $after;
        } elseif (is_year()) {
            echo $before . get_the_time('Y') . $after;
            // 특정 포스트 타입의 글 목록 페이지인 경우
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                printf($link, $home_link . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
                if ($show_current == 1)
                    echo $delimiter . $before . get_the_title() . $after;
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $delimiter);
                if ($show_current == 0)
                    $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
                $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
                $cats = str_replace('</a>', '</a>' . $link_after, $cats);
                if ($show_title == 0)
                    $cats = preg_replace('/ title="(.*?)"/', '', $cats);
                echo $cats;
                if ($show_current == 1)
                    echo $before . get_the_title() . $after;
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
            // 첨부 파일 페이지인 경우
        } elseif (is_attachment()) {
            $parent = get_post($parent_id);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            $cats = get_category_parents($cat, TRUE, $delimiter);
            $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
            $cats = str_replace('</a>', '</a>' . $link_after, $cats);
            if ($show_title == 0)
                $cats = preg_replace('/ title="(.*?)"/', '', $cats);
            echo $cats;
            printf($link, get_permalink($parent), $parent->post_title);
            if ($show_current == 1)
                echo $delimiter . $before . get_the_title() . $after;
            // 단독 페이지인 경우 (예: '소개' 페이지)
        } elseif (is_page() && !$parent_id) {
            if ($show_current == 1)
                echo $before . get_the_title() . $after;

        } elseif (is_page() && $parent_id) {
            if ($parent_id != $frontpage_id) {
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    if ($parent_id != $frontpage_id) {
                        $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                    }
                    $parent_id = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                for ($i = 0; $i < count($breadcrumbs); $i++) {
                    echo $breadcrumbs[$i];
                    if ($i != count($breadcrumbs) - 1)
                        echo $delimiter;
                }
            }
            // 브레드크럼에 현재 포스트/페이지/카테고리 제목을 표시, 0 - 표시 안 함
            if ($show_current == 1) {
                if ($show_home_link == 1 || ($parent_id_2 != 0 && $parent_id_2 != $frontpage_id))
                    echo $delimiter;
                echo $before . get_the_title() . $after;
            }
        } elseif (is_tag()) {
            echo $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
            // 작성자 아카이브 페이지인 경우
        } elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . sprintf($text['author'], $userdata->display_name) . $after;
            // 404 에러 페이지인 경우
        } elseif (is_404()) {
            echo $before . $text['404'] . $after;
        }

        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
                echo ' (';
            echo __('페이지', 'supernormal') . ' ' . get_query_var('paged');
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
                echo ')';
        }
        echo '</div></div><!-- .breadcrumbs -->';
    }
}