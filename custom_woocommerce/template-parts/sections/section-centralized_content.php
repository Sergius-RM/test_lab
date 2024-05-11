<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>
<!-- Content centralized Start -->
<section class="centred-content mt-150">
    <div class="container">
        <div class="row justify-content-between align-items-center mb-60">
            <div class="col-xl-10 col-lg-10 offset-xl-1 offset-lg-1 wow fadeInLeft delay-0-2s">
                <div class="section-title text-center mb-60">
                    <h2 class="text-center"><?php echo get_sub_field('h2_header');?></h2>
                </div>
            </div>
            <div class="col-xl-10 col-lg-10 offset-xl-1 offset-lg-1 wow fadeInRight delay-0-2s">
                <div class="section-text text-center mb-60">
                    <?php if( get_sub_field('content') ) : ?>
                        <p><?php echo get_sub_field('content'); ?></p>
                    <?php endif; ?>
                </div>

                <?php $buttonlink = get_sub_field('button_link'); ?>
                    <?php if( get_sub_field('button_text') ) : ?>
                    <div class="feature-btn text-center wow fadeInUp delay-0-2s">
                        <a href="<?php echo esc_url( $buttonlink ); ?>" class="gray-theme-btn" target="_self"><?php echo get_sub_field('button_text'); ?></a>
                    </div>
                    <?php endif; ?>
                <?php ?>
            </div>
        </div>
    </div>
</section>
<!-- Content centralized End -->
