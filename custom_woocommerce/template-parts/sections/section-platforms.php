<!-- Platforms Icons Start -->
<section class="work-progress-three bg-white text-white mb-100 mt-0">
    <div class="container fullwidth py-0 px-0">
        <div class="platforms-carousel-wrap style-two py-50 px-15">
            <?php if ( have_rows('platforms') ) : ?>
                <?php while( have_rows('platforms') ) : the_row(); ?>
                    <?php $link = get_sub_field('platform_link'); ?>
                    <div class="logo-item">
                        <?php if ( get_sub_field('platform') ) : $image = get_sub_field('platform'); ?>
                            <!-- Thumbnail image -->
                            <a href="<?php echo esc_url( $link ); ?>">
                                <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>"/>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php if ( get_sub_field('enable_more_some_button') == true ) { ?>
            <?php $buttonlink = get_sub_field('button_link'); ?>
            <div class="feature-btn text-center mt-50 wow fadeInUp delay-0-2s">
                <a class="gray-theme-btn" href="<?php echo esc_url( $buttonlink ); ?>" target="_self"><?php echo get_sub_field('button_text'); ?></a>
            </div>
        <?php } ?>
    </div>
</section>
<!-- Platforms Progress End -->