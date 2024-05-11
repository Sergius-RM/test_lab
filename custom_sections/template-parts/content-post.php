<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Greative_WP_Theme
 */


?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <div class="blog-details-content rpt-100 rpb-75 pr-15 rpr-0">

        <?php the_content(); ?>

        <?php if ( have_rows( 'contents' ) ) : ?>
            <?php while ( have_rows('contents' ) ) : the_row();
                if ( get_row_layout() == 'content_headers' ) :
                    get_template_part('template-parts/blocks-blogs/content', 'content_headers');
                elseif ( get_row_layout() == 'text_area' ) :
                    get_template_part('template-parts/blocks-blogs/content', 'text_area');
                elseif ( get_row_layout() == 'quotation' ) :
                    get_template_part('template-parts/blocks-blogs/content', 'quotation');
                elseif ( get_row_layout() == 'item_list' ) :
                    get_template_part('template-parts/blocks-blogs/content', 'item_list');
                elseif ( get_row_layout() == 'Image' ) :
                    get_template_part('template-parts/blocks-blogs/content', 'Image');
                    ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php
        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'miami' ),
                'after'  => '</div>',
            )
        );
        ?>

    </div><!-- .entry-content -->

</article><!-- #post-## -->
