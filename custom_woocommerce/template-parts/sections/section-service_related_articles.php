<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$number = get_sub_field( 'number_related_articles');
$category = get_sub_field( 'service_category');
$orderby = get_sub_field( 'order_by');
$order = get_sub_field( 'sorting_order');

$args = get_posts( array(
    'post_type'         => 'post',
    'posts_per_page'    => $number,
    'post__not_in'      => array( get_the_ID() ),
    'no_found_rows'     => true,
    'orderby'           => $orderby,
    'order'             => $order,
) );

$cats = wp_get_post_terms( get_the_ID(), 'category' );
$cats_ids = array();
foreach( $cats as $wpex_related_cat ) {
    $cats_ids[] = $wpex_related_cat->term_id;
}
if ( ! empty( $cats_ids ) ) {
    $args['category__in'] = $cats_ids;
}

$text = get_the_excerpt();
$words = 20;
$excerpt_lenght = 20;
$more = '…';
$excerpt = wp_trim_words( $text, $words, $more );

?>

<section <?php if (get_sub_field('section_id')): ?> id="<?php the_sub_field('section_id'); ?>"<?php endif; ?> class="news-section-two mt-100 mb-100 pb-10 rpb-25">
    <div class="container">
        <div class="section-title text-center mb-60">
            <?php if( get_sub_field('section_header_h2') ): ?>
                <h2><?php echo get_sub_field('section_header_h2'); ?></h2>
            <?php endif; ?>
        </div>
        <div class="row justify-content-center">
            <?php $wpex_query = new WP_Query( $args );
            foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
            <div class="col-xl-4 col-md-6" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="news-item style-two wow fadeInUp delay-0-2s">
                    <div class="image">
                        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                            <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                        <?php else: ?>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/post_thumbnail.png" alt="<?php the_title(); ?>" />
                        <?php endif; ?>
                    </div>

                    <div class="news-content">
                        <div class="news-author">
                            <?php echo get_avatar( get_the_author_meta('ID'), 60); ?>
                            <span class="posted-by">By <b><?php the_author_posts_link(); ?></b></span>
                        </div>

                        <ul class="post-meta-item">
                            <li>
                                <i class="fas fa-calendar-alt"></i>
                                <a href="#" rel="bookmark"><?php echo get_the_date(); ?></a>
                            </li>
                            <li>
                                <i class="fas fa-tag"></i>
                                <a href="#" rel="bookmark"><?php $category = get_the_category(); echo $category[0]->cat_name;?></a>
                            </li>
                        </ul>
                        <h4><a href="<?php the_permalink(); ?>"><?php echo substr(strip_tags(get_the_title()), 0, 60); ?></a></h4>

                        <p><?php echo miami_excerpt($excerpt_lenght); ?></p>

                        <a href="<?php the_permalink(); ?>" class="learn-more mb-20"><?php esc_html_e('Lue lisää','miami'); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
            <?php
            endforeach;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>
