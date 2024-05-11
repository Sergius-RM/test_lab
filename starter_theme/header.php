<?php
/**
 * Site header.
 */

    $site_name = get_bloginfo('name' );
    $tagline = get_bloginfo('description', 'display' );
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php wp_head(); ?>

        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/favicon/apple-touch-icon.png?v=1.2">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-32x32.png?v=1.2">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/favicon/favicon-16x16.png?v=1.2">
        <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/favicon/site.webmanifest?v=1.2">
        <link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/favicon/safari-pinned-tab.svg?v=1.2" color="#7e7e7e">
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon/favicon.ico?v=1.2">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/favicon/mstile-144x144.png?v=1.2">

    </head>

    <body
        <?php body_class();?>
    >

        <?php wp_body_open(); ?>

        <header>
            <div class="container">
                <div class="controls">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                        <img
                            src="<?php bloginfo('template_directory'); ?>/assets/images/logo.jpg"
                            alt="logo"
                        >
                    </a>
                    <div class="lang">
                        <a href="#">UA</a><a href="#">EN</a>
                    </div>
                </div>
                <div class="menu">
                    <!-- кастомное меню -->
                    <?php
                        wp_nav_menu( [
                            // 'theme_location'  => '',
                            // 'menu'            => 'main_menu',
                            'menu_id'         => 'nav',
                            'menu_class'      => '',
                            'container'       => 'div',
                            // 'container_id'    => '3',
                            // 'container_class' => '4',
                            // 'echo'            => true,
                            // 'fallback_cb'     => 'wp_page_menu',
                            // 'before'          => '',
                            // 'after'           => '',
                            // 'link_before'     => '',
                            // 'link_after'      => '',
                            // 'items_wrap'      => '%3$s',
                            'depth'           => 2,
                            // 'walker'          => '',
                        ] );
                    ?>
                    <!-- / конец меню -->

                    <div id="menu-button">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </div>
            </div>
        </header>

        <div class="content">
        <!-- header end -->
