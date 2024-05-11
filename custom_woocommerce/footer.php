
<?php
/**
 * The template for displaying the footer.

 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

    get_template_part('template-parts/footer');
?>

     <?php wp_footer(); ?>

    <script src="<?php bloginfo('template_directory'); ?>/assets/js/scripts.js" defer ></script>

</body>
</html>
