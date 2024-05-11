<?php
/**
 * All sections and template of EasyE theme
 *
 */
?>

<?php if ( have_rows( 'sections' ) ) : ?>
    <?php while ( have_rows('sections' ) ) : the_row();
        if ( get_row_layout() == 'hero' ) :
            get_template_part('template-parts/sections/section', 'hero');

        elseif ( get_row_layout() == 'service-process' ) :
            get_template_part('template-parts/sections/section', 'service-process');

        elseif ( get_row_layout() == 'quick-order' ) :
            get_template_part('template-parts/sections/section', 'quick-order');

        elseif ( get_row_layout() == 'featured-benefits' ) :
            get_template_part('template-parts/sections/section', 'featured-benefits');

        elseif ( get_row_layout() == 'service-statements' ) :
            get_template_part('template-parts/sections/section', 'service-statements');

        elseif ( get_row_layout() == 'two-columns' ) :
            get_template_part('template-parts/sections/section', 'two-columns');

        elseif ( get_row_layout() == 'highlighted-articles' ) :
            get_template_part('template-parts/sections/section', 'highlighted-articles');

        elseif ( get_row_layout() == 'contactus' ) :
            get_template_part('template-parts/sections/section', 'contactus');

        elseif ( get_row_layout() == 'page-header' ) :
            get_template_part('template-parts/sections/section', 'page-header');

        elseif ( get_row_layout() == 'pricing' ) :
            get_template_part('template-parts/sections/section', 'pricing');

        elseif ( get_row_layout() == 'blog-grid' ) :
            get_template_part('template-parts/sections/section', 'blog-grid');

        elseif ( get_row_layout() == 'team' ) :
            get_template_part('template-parts/sections/section', 'team');

        elseif ( get_row_layout() == 'single-article' ) :
            get_template_part('template-parts/sections/section', 'single-article');

        elseif ( get_row_layout() == 'related-articles' ) :
            get_template_part('template-parts/sections/section', 'related-articles');
            ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
