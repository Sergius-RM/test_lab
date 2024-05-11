<!-- References Section Start -->
<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$background_image = wp_get_attachment_image_src(get_field('background_image', 'options'), 'original');

$sectionID = get_field( 'section_id', 'options' );
$header = get_field( 'ref_h2_header', 'options' );
$subheader = get_field( 'ref_sub_header', 'options' );
$intro = get_field( 'ref_intro_content', 'options' );
$button = get_field( 'ref_button_text', 'options' );
$url = get_field( 'ref_button_link', 'options' );

$text = get_the_excerpt();
$words = 22;
$excerpt_lenght = 22;
$more = '…';
$excerpt = wp_trim_words( $text, $words, $more );

$number = get_field( 'number_of_references', 'options');
$orderby = get_field( 'order_by', 'options' );
$order = get_field( 'sorting_order', 'options' );
$home_reference_posts = get_posts( array(
    'post_type'      => 'referenssit',
    'post_status'    => 'publish',
    'posts_per_page' => $number,
    'orderby'        => $orderby,
    'order'          => $order,
) );

?>

<section <?php if ($sectionID): ?> id="<?php echo $sectionID;?>"<?php endif; ?>
        class="references-section-two mt-150 pb-100 pt-100"
        style="background-image: url('<?php echo $background_image[0]; ?>');">
    <div class="container">
        <div class="section-title text-white text-center mb-60">
            <?php if( $header ): ?>
                <h2><?php echo $header;?></h2>
            <?php endif; ?>
        </div>

        <div class="row justify-content-center">
            <?php if ( $home_reference_posts ): ?>
                <?php foreach ( $home_reference_posts as $post ): setup_postdata($post); $thumb_src = null;
                    if ( has_post_thumbnail($post->ID) ) {
                        $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'miami_reference' );
                        $thumb_src = $src[0]; }
                    ?>
                    <div class="col-xl-4 col-md-6">
                        <div class="references-item style-two wow fadeInUp delay-0-2s">
                            <?php if ( $thumb_src ): ?>
                                <div class="image">
                                    <img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('company_name'); ?>">
                                </div>
                            <?php else:?>
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/gallery/gallery-1.jpg'; ?>">
                                </div>
                            <?php endif; ?>

                            <?php if( get_field('reference_header') ): ?>
                                <div class="references-content justify-content-center">
                                    <h4><a href="<?php the_permalink(); ?>"><?php echo get_field('reference_header'); ?></a></h4>
                                </div>
                            <?php endif; ?>

                            <?php if( get_field('case_summary') ): ?>
                                <div class="references-subcontent justify-content-center">
                                    <h5><a href="<?php the_permalink(); ?>"><?php echo substr(strip_tags(get_field('case_summary')), 0, 100) . '...'; ?></a></h5>
                                </div>
                            <?php endif; ?>



                            <a href="<?php the_permalink(); ?>" class="luelisaa">Lue lisää</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <?php if( $button ): ?>
        <div class="feature-btn text-center mt-60 wow fadeInUp delay-0-2s">
            <a href="<?php echo $url;?>" class="salmon-theme-btn"><?php echo $button;?></a>
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- Referencesws Section End -->

