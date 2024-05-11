<?php
/**
 * All sections and template of Miami theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Greative_WP_Theme
 */
?>

<?php if ( have_rows( 'sections' ) ) : ?>
    <?php while ( have_rows('sections' ) ) : the_row();
        if ( get_row_layout() == 'hero' ) :
            get_template_part('template-parts/sections/section', 'hero');

        elseif ( get_row_layout() == 'platforms' ) :
            get_template_part('template-parts/sections/section', 'platforms');

        elseif ( get_row_layout() == 'aboutus' ) :
            get_template_part('template-parts/sections/section', 'aboutus');

        elseif ( get_row_layout() == 'centralized_content' ) :
            get_template_part('template-parts/sections/section', 'centralized_content');

        elseif ( get_row_layout() == 'centralized_banner_content' ) :
            get_template_part('template-parts/sections/section', 'centralized_banner_content');

        elseif ( get_row_layout() == 'featured_services' ) :
            get_template_part('template-parts/sections/section', 'featured_services');

        elseif ( get_row_layout() == 'featured_content' ) :
            get_template_part('template-parts/sections/section', 'featured_content');

        elseif ( get_row_layout() == 'carousel_clients' ) :
            get_template_part('template-parts/sections/section', 'carousel_clients');

        elseif ( get_row_layout() == 'short_parallax' ) :
            get_template_part('template-parts/sections/section', 'short_parallax');

        elseif ( get_row_layout() == 'wave_parallax' ) :
            get_template_part('template-parts/sections/section', 'wave_parallax');

        elseif ( get_row_layout() == 'customers' ) :
            get_template_part('template-parts/sections/section', 'customers');

        elseif ( get_row_layout() == 'references' ) :
            get_template_part('template-parts/sections/section', 'references');

        elseif ( get_row_layout() == 'all_references' ) :
            get_template_part('template-parts/sections/section', 'all_references');

        elseif ( get_row_layout() == 'video_columns' ) :
            get_template_part('template-parts/sections/section', 'video_columns');

        elseif ( get_row_layout() == 'two_columns' ) :
            get_template_part('template-parts/sections/section', 'two_columns');

        elseif ( get_row_layout() == 'contacts' ) :
            get_template_part('template-parts/sections/section', 'contacts');

        elseif ( get_row_layout() == 'one_column' ) :
            get_template_part('template-parts/sections/section', 'one_column');

        elseif ( get_row_layout() == 'faq_contents' ) :
            get_template_part('template-parts/sections/section', 'faq_contents');

        elseif ( get_row_layout() == 'team_members' ) :
            get_template_part('template-parts/sections/section', 'team_members');

        elseif ( get_row_layout() == 'latest_articles' ) :
            get_template_part('template-parts/sections/section', 'latest_articles');

        elseif ( get_row_layout() == 'blog_list' ) :
            get_template_part('template-parts/sections/section', 'blog_list');

        elseif ( get_row_layout() == 'service_related_articles' ) :
            get_template_part('template-parts/sections/section', 'service_related_articles');

        elseif ( get_row_layout() == 'contactbox' ) :
            get_template_part('template-parts/sections/section', 'contactbox');

        elseif ( get_row_layout() == 'contact_details' ) :
            get_template_part('template-parts/sections/section', 'contact_details');

        elseif ( get_row_layout() == 'office_location' ) :
            get_template_part('template-parts/sections/section', 'office_location');

        elseif ( get_row_layout() == 'contactus_team' ) :
            get_template_part('template-parts/sections/section', 'contactus_team');

        elseif ( get_row_layout() == 'seo' ) :
            get_template_part('template-parts/sections/section', 'seo');
            ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
