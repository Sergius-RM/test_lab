<!-- Clients Carousel Section Start -->
<section class="logo-section bg-lighter py-100 rpy-100 bgs-contain" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/shapes/reference_logos.svg');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="section-title text-center mb-60">
                    <?php if( get_sub_field('h2_header') ) : ?>
                        <h2><?php echo get_sub_field('h2_header');?></h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="logo-carousel-wrap">
            <?php if ( have_rows('carousel_clients') ) : ?>
                <?php while( have_rows('carousel_clients') ) : the_row(); ?>
                    <?php $link = get_sub_field('client_link'); ?>
                    <div class="logo-item">
                        <?php if ( get_sub_field('logo') ) : $image = get_sub_field('logo'); ?>
                            <!-- Thumbnail image -->
                            <a href="<?php echo esc_url( $link ); ?>">
                                <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>"/>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <?php if ( get_sub_field('enable_carousel_button') == true ) { ?>
        <?php $pagelink = get_sub_field('button_link'); ?>
        <div class="feature-btn text-center mt-100 wow fadeInUp delay-0-2s">
            <a href="<?php echo esc_url( $pagelink ); ?>" class="gray-theme-btn"><?php echo get_sub_field('button_text'); ?></a>
        </div>
    <?php } ?>

</section>
<!-- Clients Carousel Section End -->