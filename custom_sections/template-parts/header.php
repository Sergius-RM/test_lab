<?php
/**
 * The template for displaying header.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$site_name = get_bloginfo( 'name' );
$tagline   = get_bloginfo( 'description', 'display' );
?>

<!-- Start main Header -->
<header class="full-width" role="banner">
    <!--Header-Upper-->
    <div class="site-header">
        <div class="site-branding">

            <span class="no_mobile"><?php the_custom_logo();?></span>

            <!-- Main Menu -->
            <nav class="site-navigation" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
            </nav>
            <!-- Main Menu End-->

        </div>

        <!-- Mobile Main Menu -->
        <!-- <span class="is_onmobile">
            <div class="menu-burger__header">
                <span></span>
            </div>
            <nav class="site-navigation header__nav" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
            </nav>
        </span> -->
        <!-- End Mobile Main Menu -->

    </div>
    <!--End Header Upper-->
</header>
