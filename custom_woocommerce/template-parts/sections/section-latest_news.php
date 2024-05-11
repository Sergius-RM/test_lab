<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$number = get_sub_field( 'number_of_latest_news');
$category = get_sub_field( 'from_category');
$orderby = get_sub_field( 'order_by');
$order = get_sub_field( 'sorting_order');

?>

<section class="news-section-two mt-150 pb-10 rpb-25">
    <div class="container">
        <div class="row justify-content-between align-items-center mb-60">
            <div class="col-xl-10 col-lg-10 offset-xl-1 offset-lg-1 wow fadeInLeft delay-0-2s">
                <div class="section-title text-center mb-60">
                    <?php if( get_sub_field('h2_header') ): ?>
                        <h2><?php echo the_sub_field('h2_header'); ?></h2>
                    <?php endif; ?>
                </div>
                <div class="section-text text-center mt-60">
                    <?php if( get_sub_field('intro_content') ): ?>
                        <p><?php echo the_sub_field('intro_content'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <?php
            $args = array(
                'post_type'         => array('post'),
                'post_status'       => array('publish'),
                'category_name'     => $category,
                'posts_per_page'    => $number,
                'orderby'           => 'date',
                'order'             => 'ASC',
            );

            $wp_query = new WP_Query( $args );

            if ( $wp_query->have_posts() ) :
                $count = 0; while ( $wp_query->have_posts() ) :
                $wp_query->the_post();
                ?>
                <div class="col-xl-4 col-md-6" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="news-item style-two wow fadeInUp delay-0-2s">
                        <div class="image">
                            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                                <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                            <?php else: ?>
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/blog_post_thumbnail.png" alt="<?php the_title(); ?>" />
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
                                    <a href="#" rel="bookmark" class="inactiveLink"><?php echo get_the_date(); ?></a>
                                </li>
                                <li>
                                    <i class="fas fa-tag"></i>
                                    <a href="#" rel="bookmark" class="inactiveLink"><?php $category = get_the_category(); echo $category[0]->cat_name;?></a>
                                </li>
                            </ul>
                            <h4><a href="<?php the_permalink(); ?>"><?php echo substr(strip_tags(get_the_title()), 0, 60); ?></a></h4>
                            <a href="<?php the_permalink(); ?>" class="learn-more mb-20"><?php esc_html_e('Lue lisää','miami'); ?> <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php $count++; ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
