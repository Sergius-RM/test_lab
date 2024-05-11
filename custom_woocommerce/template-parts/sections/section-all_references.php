<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$number = get_sub_field( 'references_per_page' );
$orderby = get_sub_field( 'order_by' );
$order = get_sub_field( 'sorting_order' );
$teamhierarchy = get_sub_field( 'member_hierarchy' );

$reference_posts = get_posts( array(
    'post_type'      => 'referenssit',
    'post_status'    => 'publish',
    'posts_per_page' => $number, // default -1 for Unlimited profiles
    'orderby'        => $orderby, // Order alphabetically by name
    'order'          => $order,
) );
?>

<?php if ( $reference_posts ): ?>
<section <?php if (get_sub_field('section_id')): ?> id="<?php the_sub_field('section_id'); ?>"<?php endif; ?> class="portfolio-section pt-100 rpt-90 pb-100 rpb-70">
    <div class="container">
        <div class="row portfolio-wrap">
            <?php foreach ( $reference_posts as $post ): setup_postdata($post); $thumb_src = null;
            if ( has_post_thumbnail($post->ID) ) {
                $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'miami_square' );
                $thumb_src = $src[0]; }
            ?>
                <div class="col-lg-4 col-sm-6 item mobile engineering">
                    <div class="gallery-item style-three wow fadeInUp delay-0-2s">
                        <div class="image">
                            <?php if ( $thumb_src ): ?>
                                <img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('company_name'); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="gallery-content justify-content-center">
                            <?php if( get_field('reference_header') ): ?>
                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

