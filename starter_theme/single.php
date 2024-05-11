<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 */

    get_header();
?>

    <?php while (have_posts()): the_post();?>

        <div <?php post_class(); ?>>

            <?php the_title('<h1 class="entry-title">', '</h1>');?>

            <div>

                <?php the_content();?>

                <div>
                    <?php the_tags('<span class="tag-links">' . __('Tagged ', ''), null, '</span>');?>
                </div>

                <?php wp_link_pages();?>

            </div>

            <?php comments_template();?>

        </div>

    <?php endwhile; ?>

<?php get_footer();?>
