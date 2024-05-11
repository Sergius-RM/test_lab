<?php
/**
 * Hero setup
 *
 * @package miami
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$title = get_the_title();
$thumbnail_url = '';

if (is_search()) {
    $title = esc_html__( 'Search Results for: ', 'miami' ) .  get_search_query();
    $thumbnail_url = wp_get_attachment_image_src(get_field('search_page_header_image', 'options'), 'original' )[0];
} elseif (is_page('tietosuojaseloste')) {
    $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'original' )[0];

} elseif (is_404()) {
    $title = esc_html__( 'Sivua ei löytynyt.', 'miami' );

}  else {
    $thumbnail_url = get_template_directory_uri() . '/assets/images/shapes/subpage_header.svg';
}

$styles = miami_create_styles(array(
    'background-image' => 'url(' . $thumbnail_url . ')'
));

?>


<!-- Page Banner Start -->
<section class="page-banner bgs-cover overlay pt-50"
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
         style="background-image: url('<?php echo $image[0]; ?>');">
    <?php else: $thumbnail_url = get_template_directory_uri() . '/assets/images/shapes/subpage_header.svg'; ?>
        style="background-image: url('<?php echo $thumbnail_url; ?>');">
    <?php endif; ?>

    <div class="container">
        <div class="banner-inner">
            <h1 class="page-title"><?php echo $title; ?></h1>
            <nav aria-label="breadcrumb">
                <?php miami_breadcrumbs(); ?>
            </nav>
        </div>
        <?php if ( get_field('enable_cta_button') == true ) { ?>
            <div class="row justify-content-center mt-50">
                <div class="col-lg-8 col-md-9">
                    <div class="hero-content text-center text-white">
                        <div class="hero-btn wow fadeInUp delay-0-6s animated" style="visibility: visible; animation-name: fadeInUp;">
                            <?php if(get_field('cta_type', '') == "email") { ?>
                                <a href="tel:<?php the_field('cta_mailto'); ?>" class="theme-btn-emailus"><?php the_field('cta_text'); ?></a>
                            <?php } ?>
                            <?php if(get_field('cta_type', '') == "request") { ?>
                                <a href="<?php the_field('cta_request'); ?>" class="theme-btn-request"><?php the_field('cta_text'); ?></a>
                            <?php } ?>
                            <?php if(get_field('cta_type', '') == "callus") { ?>
                                <a href="tel:<?php the_field('cta_callto'); ?>" class="theme-btn-callus"><?php the_field('cta_text'); ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<!-- Page Banner End -->

