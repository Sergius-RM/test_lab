<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>
<!-- Content centralized Start -->
<section class="centred-content mt-50">
    <div class="container">
        <div class="row justify-content-between align-items-center mb-60 section_centralized_banner_content p-100"
                style="<?php if( get_sub_field('background_img') ) : ?>
                            background: url('<?php echo get_sub_field('background_img'); ?>') 50% 50% no-repeat ;
                        <?php endif; ?>">
            <div class="col-xl-10 col-lg-10 offset-xl-1 offset-lg-1 wow fadeInLeft delay-0-2s" >
                <div class="section-title text-center">
                    <h2 class="text-center"><?php echo get_sub_field('h2_header');?></h2>
                </div>
            </div>
            <div class="col-xl-10 col-lg-10 offset-xl-1 offset-lg-1 wow fadeInRight delay-0-2s">
                <div class="section-text text-center">
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
            <div class="banner_content_second"></div>
        </div>
    </div>
</section>
<!-- Content centralized End -->
