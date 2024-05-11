<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$background_image = wp_get_attachment_image_src(get_sub_field('background_image'), 'original');
$align_content = get_sub_field('content_align');

$styles_array = array();
$styles = '';

if (get_sub_field('background_color')) {
    $styles_array['background-color'] = get_sub_field('background_color');
}

foreach ($styles_array as $key => $value) {
    $styles .= $key . ': ' . $value . '; ';
}

$styles = trim($styles);


$term = get_sub_field( 'from_category');
?>


<section <?php if (get_sub_field('section_id')): ?> id="<?php the_sub_field('section_id'); ?>"<?php endif; ?> class="centred-content bgs-cover mt-100 rpt-95 rpb-100">

    <div class="container">
        <div class="row justify-content-between align-items-center mb-60">
            <div class="col-xl-10 col-lg-10 offset-xl-1 offset-lg-1 wow fadeInLeft delay-0-2s">
                <div class="section-title mb-60 <?php echo $align_content; ?>">
                    <?php if( get_sub_field('h2_header') ) : ?>
                        <h2><?php echo get_sub_field('h2_header');?></h2>
                    <?php endif; ?>
                </div>
                <div class="section-text mt-60 <?php echo $align_content; ?>">
                    <?php if( get_sub_field('content') ) : ?>
                        <p><?php echo get_sub_field('content'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php if ( get_field('action_button') == true ) { ?>
        <div class="container">
            <div class="row justify-content-between align-items-center mb-60">
                <div class="col-xl-10 col-lg-10 offset-xl-1 offset-lg-1 wow fadeInLeft delay-0-2s">
                    <div class="feature-btn wow fadeInUp delay-0-2s <?php echo $align_content; ?>">
                        <a href="<?php the_sub_field('button_link'); ?>" class="gray-theme-btn"><?php the_sub_field('button_text'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</section>
<!-- Featured Section End -->


<!-- Blog Page Area Start -->
<section class="blog-page-area mt-100 mb-100 pb-40 rpb-25 ">
    <div class="container">
        <?php

        if (get_sub_field('appearance') == 'grid')
            get_template_part('template-parts/acf/articles-list/grid');
        if (get_sub_field('appearance') == 'list')
            get_template_part('template-parts/acf/articles-list/list');
        ?>
    </div>
</section>