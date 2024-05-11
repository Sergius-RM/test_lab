<?php
// https://codex.wordpress.org/Function_Reference

// https://misha.agency/wordpress/wp_enqueue_style.html
// http://rightblog.ru/2974
// https://gnatkovsky.com.ua/podklyuchenie-stilej-v-wordpress.html

// без этого в админке просто не будет пункта "меню"
add_theme_support( 'menus' );

function theme_styles()
{
    // Регистрирую стили
    wp_register_style('main_style', get_template_directory_uri() . '/style.css', '', '1.1', 'all');

    // Подключаю стили
    wp_enqueue_style('main_style');
};

// Создаем экшн в котором подключаем скрипты подключенные внутри функции theme_styles
add_action('wp_enqueue_scripts', 'theme_styles');

// custome function
function test_func()
{
    echo 'custom func test ololo';
}
