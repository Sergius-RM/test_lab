<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

<section class="news-section-two mt-150 pb-10 rpb-25">
    <div class="container">
        <div class="section-title text-center mb-60">
            <?php if( get_sub_field('h2_header') ): ?>
                <h2><?php echo get_sub_field('h2_header'); ?></h2>
            <?php endif; ?>
        </div>
        <div class="row justify-content-center">
            <?php
            if (get_sub_field('appearance') == 'grid')
                get_template_part('template-parts/acf/articles-list/grid-latest_articles');
            if (get_sub_field('appearance') == 'list')
                get_template_part('template-parts/acf/articles-list/grid-latest_articles');
            ?>
        </div>
    </div>
</section>
