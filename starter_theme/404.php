<?php
/**
 * 404 page (not found).
 */

    get_header();
?>

    <div class="wrapper limited">
        <div class="container">
            <?php esc_html_e('The page can&rsquo;t be found.', ''); ?>
            <br>
            <?php esc_html_e('It looks like nothing was found at this location.', ''); ?>
        </div>
    </div>

<?php get_footer(); ?>
