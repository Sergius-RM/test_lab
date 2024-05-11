<!-- About us Section Start -->
<section id="<?php if ( get_sub_field( 'section_id') ) :?><?php the_sub_field('section_id'); ?><?php endif?>" class="contact-two mt-150">
    <div class="container fullwidth">
        <div class="contact-section-inner">
            <div class="row justify-content-center">
                <?php if( have_rows('content_left') ): ?>
                    <?php while ( have_rows('content_left') ) : the_row(); ?>
                        <div class="col-lg-6 gray_side pt-60 pb-60">
                            <div class="contact-image-number style-two wow fadeInRight delay-0-2s">
                                <div class="section-title text-white">
                                    <h2><?php the_sub_field('h2_text'); ?></h2>
                                </div>
                                <div class="section-text text-white mt-60">
                                    <p><?php the_sub_field('content_text'); ?></p>
                                </div>
                                <?php if ( get_sub_field( 'button_text') ) :?>
                                    <a href="<?php the_sub_field('button_link'); ?>" class="salmon-theme-btn style-three mt-60"><?php the_sub_field('button_text'); ?></a>
                                <?php endif; ?>
                            </div>
                            <div class="trio_float_img_left"></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if( have_rows('content_right') ): ?>
                    <?php while ( have_rows('content_right') ) : the_row(); ?>
                        <div class="col-lg-6 salmon_side pt-60 pb-60">
                            <div class="contact-image-number style-two contact-section-form wow fadeInLeft delay-0-2s">
                                <div class="section-title">
                                    <h2><?php the_sub_field('h2_text'); ?></h2>
                                    <?php if ( get_sub_field( 'extra_content_text') ) :?>
                                        <span class="gridtext">
                                            <?php the_sub_field('extra_content_text'); ?>
                                        </span>
                                    <?php endif; ?>
                                </div>

                            </div>
                            <div class="trio_float_img_right"></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- About us Section End -->