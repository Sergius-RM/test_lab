<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$background_image = wp_get_attachment_image_src(get_sub_field('background_image'), 'original');
$align_content = get_sub_field('content_alignment');

?>

<!-- Featured Section Start -->

<section <?php if (get_sub_field('section_id')): ?> id="<?php the_sub_field('section_id'); ?>"<?php endif; ?> class="centred-content bgs-cover pt-100 rpt-95 pb-50 rpb-50" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/feature/feature-bg.jpg)');">
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

    <?php if ( get_sub_field('action_button') == true ) { ?>
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
