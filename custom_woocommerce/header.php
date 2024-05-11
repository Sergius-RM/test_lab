<?php
/**
 * The template for displaying the header
 *
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>

<!DOCTYPE html>
<html
    <?php language_attributes(); ?>
    class="no-js"
>

    <head>
		
        <meta charset="<?php bloginfo('charset'); ?>">
        <?php $viewport_content = apply_filters('hello_elementor_viewport_content', 'width=device-width, initial-scale=1'); ?>
        <meta
            name="viewport"
            content="<?php echo esc_attr($viewport_content); ?>"
        >

        <!-- favicon here -->

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php wp_head(); ?>

        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/tiny-slider@2.9.3/dist/tiny-slider.css' type='text/css' media='all' />
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

    </head>

    <body <?php body_class();?>>

        <?php wp_body_open();
            get_template_part('template-parts/header');
        ?>
