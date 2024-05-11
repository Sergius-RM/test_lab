<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$align = get_sub_field('content_align');

?>



<!-- One columns Section Start -->
<section <?php if (get_sub_field('section_id')): ?> id="<?php the_sub_field('section_id'); ?>"<?php endif; ?> class="centred-content py-50 rpy-50" >
    <div class="container">
        <div class="row justify-content-between align-items-center mb-60">
            <div class="col-xl-12 col-lg-12 wow fadeInLeft">
                <div class="row">
                <?php if ( get_sub_field('h2_header') ) : $header = get_sub_field('h2_header'); ?>
                    <div class="col-xl-6 section-title vert-align <?php echo $align; ?>">
                        <span class="sub-title"><?php echo get_sub_field('upper_header'); ?></span>
                        <h2 class=""><?php echo $header; ?></h2>
                    </div>
                <?php endif; ?>
                <?php if ( get_sub_field('content') ) : $content = get_sub_field('content'); ?>
                    <div class="col-xl-6 section-text mt-60 <?php echo $align; ?>">
                        <p><?php echo $content; ?></p>
                    </div>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <?php if ( get_sub_field('action_button') == true ) { ?>
        <?php $buttonlink = get_sub_field('button_link'); ?>
        <div class="container">
            <div class="row justify-content-between align-items-center mb-60">
                <div class="col-xl-10 col-lg-10 offset-xl-1 offset-lg-1 wow fadeInLeft delay-0-2s">
                    <div class="feature-btn wow fadeInUp delay-0-2s text-center <?php echo $align; ?>">
                        <a href="<?php echo esc_url( $buttonlink ); ?>" class="gray-theme-btn"><?php echo get_sub_field('button_text'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</section>
<!-- One columns Section End -->