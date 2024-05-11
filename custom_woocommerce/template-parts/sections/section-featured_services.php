<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>

<!-- Featured Services Section Start -->

<section class="centred-content bgs-cover rpt-95 pb-100 rpb-100" 
    style="<?php if(get_sub_field('featured_background')):?>
        background-image: url('<?php echo get_sub_field('featured_background'); ?>)');
    <?php endif;?>
    <?php if ( get_sub_field('background') == true ):?>background-color: #f8f8f8;<?php endif;?>" >

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-12 col-lg-12 offset-xl-12 offset-lg-12 wow fadeInLeft delay-0-2s">
                <div class="section-title text-left">
                    <?php if( get_sub_field('header_subtitle') ) : ?>
                        <h4><?php echo get_sub_field('header_subtitle'); ?></h4>
                    <?php endif; ?>
                    <?php if( get_sub_field('h2_header') ) : ?>
                        <h2 class="w-50"><?php echo get_sub_field('h2_header');?></h2>
                    <?php endif; ?>
                </div>
                <?php if( get_sub_field('content') ) : ?>
                    <div class="section-text mt-60">
                            <p><?php echo get_sub_field('content'); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <?php if( have_rows('featured_services') ): ?>
                <?php while ( have_rows('featured_services') ) : the_row(); ?>
                    <?php $link = get_sub_field('read_more_link'); ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-three-item wow fadeInUp delay-0-2s">
                            <?php if ( get_sub_field('service_icon') ) : $icon = get_sub_field('service_icon'); ?>
                                <div class="icon">
                                    <img src="<?php echo $icon; ?>" alt="<?php echo $icon['alt']; ?>"/>
                                </div>
                            <?php endif; ?>
                            <?php if( $link ): ?>
                                <h4><a href="<?php echo esc_url( $link ); ?>"><?php the_sub_field('service_name'); ?></a></h4>
                            <?php endif; ?>
                            <h5><?php the_sub_field('service_subtext'); ?></h5>

                            <p><?php the_sub_field('service_content'); ?></p>

                            <?php if( $link ): ?>
                                <a href="<?php echo esc_url( $link ); ?>" class="learn-more mb-20"><?php the_sub_field('read_more_text'); ?><i class="fas fa-long-arrow-alt-right"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Featured Services Section End -->





