<?php
// https://codex.wordpress.org/Function_Reference

// https://misha.agency/wordpress/wp_enqueue_style.html
// http://rightblog.ru/2974
// https://gnatkovsky.com.ua/podklyuchenie-stilej-v-wordpress.html


/* Отключение XML-RPC */
add_filter('xmlrpc_enabled', '__return_false');

/**
 * Настройка хаков Advanced Custom Fields
 */
require get_template_directory() . '/inc/acf.php';

/**
 * Подключение меню и виджетов
 */
require get_template_directory() . '/inc/actions.php';

/**
 * Подключение скриптов и стилей
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Настройка и дублирование постов/страниц
 */
require get_template_directory() .'/inc/post.php';

/**
 * Media.
 */
require get_template_directory() .'/inc/media.php';

/**
 * Pagination.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Woocomerce
 */
require get_template_directory() .'/inc/woo.php';

// Защита от вредоносных URL-запросов
if (strpos($_SERVER['REQUEST_URI'], "eval(") || strpos($_SERVER['REQUEST_URI'], "CONCAT") || strpos($_SERVER['REQUEST_URI'], "UNION+SELECT") || strpos($_SERVER['REQUEST_URI'], "base64")) {
    @header("HTTP/1.1 400 Bad Request");
    @header("Status: 400 Bad Request");
    @header("Connection: Close");
    @exit;
}

// Защита от автоматического спама
function true_stop_spam($commentdata)
{
    // обычное поле комментирования мы скроем через CSS
    $fake = trim($_POST['comment']);
    // заполнение его роботами будет приводить к ошибке, комментарий отправляться не будет
    if (!empty($fake)) {
        wp_die('Спамный коммент!');
    }
    // затем мы присвоим ему значение поля комментария, которое для людей
    $_POST['comment'] = trim($_POST['true_comment']);

    return $commentdata;
}

add_filter('pre_comment_on_post', 'true_stop_spam');

// Запрет пингбэков и трэкбэков на самого себя
function true_disable_self_ping(&$links)
{
    foreach ($links as $l => $link) {
        if (0 === strpos($link, get_option('home'))) {
            unset($links[$l]);
        }
    }
}

add_action('pre_ping', 'true_disable_self_ping');

// Скрываем версию WordPress
function true_remove_wp_version_wp_head_feed()
{
    return '';
}

add_filter('the_generator', 'true_remove_wp_version_wp_head_feed');
