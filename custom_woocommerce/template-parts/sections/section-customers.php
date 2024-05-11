<!-- Customers Start -->
<section class="featured-section mt-150">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="section-title text-center mb-60">
                    <h2><?php echo get_sub_field('h2_header'); ?></h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <?php if ( have_rows('customers') ) : ?>
                <?php while( have_rows('customers') ) : the_row(); ?>
                    <?php $link = get_sub_field('customer_link'); ?>
                    <div class="col-xl-3 col-md-6">
                        <?php if ( get_sub_field('customer_logo') ) : $image = get_sub_field('customer_logo'); ?>
                            <div class="reference-item-three wow fadeInUp delay-0-2s">
                                <a href="<?php echo esc_url( $link ); ?>">
                                    <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php if (get_sub_field('button_link')): ?>
        <div class="feature-btn text-center mt-60 wow fadeInUp delay-0-2s">
            <?php $buttonlink = get_sub_field('button_link'); ?>
            <a href="<?php echo esc_url( $buttonlink ); ?>" target="_self" class="gray-theme-btn"><?php echo get_sub_field('button_text'); ?></a>
            <?php ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- Customers End -->




