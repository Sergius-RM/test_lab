<?php
/**
 * Search results.
 */

    get_header();
?>

    <div class="wrapper limited">
        <div class="container">

            <div>

                <div>
                    <h1>
                        <?php esc_html_e('Search results for: ', '');?>
                        <span><?php echo get_search_query(); ?></span>
                    </h1>
                </div>

                <div>
                    <?php if (have_posts()): ?>

                        <?php while (have_posts()):
                            the_post();
                            printf('<h2><a href="%s">%s</a></h2>', esc_url(get_permalink()), esc_html(get_the_title()));
                            the_post_thumbnail();
                            the_excerpt();
                        endwhile; ?>

                    <?php else: ?>

                        <p><?php esc_html_e('It seems we can\'t find what you\'re looking for.', '');?></p>

                    <?php endif;?>
                </div>

                <?php wp_link_pages();?>

                <?php
                    global $wp_query;
                    if ($wp_query->max_num_pages > 1) :
                ?>
                    <nav class="pagination" role="navigation">
                        <div class="nav-previous">
                            <?php next_posts_link(sprintf(__('%s older', ''), '<span class="meta-nav">&larr;</span>'));?>
                        </div>
                        <div class="nav-next">
                            <?php previous_posts_link(sprintf(__('newer %s', ''), '<span class="meta-nav">&rarr;</span>'));?>
                        </div>
                    </nav>
                <?php endif; ?>

            </div>

        </div>
    </div>



<?php get_footer();?>
