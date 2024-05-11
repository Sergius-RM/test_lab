<!-- Contact Area Start -->
    <?php
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
    }

    $title_left = get_field( 'h2_title_left', 'option' );
    $title_right = get_field( 'h2_title_right', 'option' );
    $сontent_left = get_field( 'block_content_left', 'option' );
    $сontent_right = get_field( 'block_content_right', 'option' );
    $intro_left = get_field( 'intro_text_left', 'option' );
    $intro_right = get_field( 'intro_text_right', 'option' );
    ?>
    <section class="contact-two">
        <div class="container fullwidth mt-0">
            <div class="contact-section-inner">
                <div class="row">
                    <div class="col-lg-6 salmon_side pt-100 pb-100">
                        <div class="contact-image-number style-two overlay wow fadeInRight delay-0-2s">
                            <div class="contact-informations text-white">
                                <h2><?php echo $title_left;?></h2>
                                <?php if( have_rows('attached_managers', 'option') ): ?>
                                    <?php while ( have_rows('attached_managers', 'option') ) : the_row(); ?>
                                        <div class="contentholder mt-60">
                                            <img src="<?php the_sub_field('avatar'); ?>">
                                            <h4 class="mt-30"><?php the_sub_field('manager'); ?></h4>
                                        </div>
                                        <div class="contact-info">
                                            <div class="content">
                                                <h5><i class="fas fa-phone-alt mr-5"></i> <a href="tel:<?php the_sub_field('phone'); ?>"><?php the_sub_field('phone'); ?></a></h5>
                                                <h5><i class="fas fa-envelope mr-5"></i> <a href="mailto:<?php the_sub_field('mail'); ?>"><?php the_sub_field('mail'); ?></a></h5>
                                                <h5><i class="fas fa-clock mr-5"></i><?php the_sub_field('note'); ?></h5>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 gray_side pt-100 pb-100">
                        <div class="contact-image-number style-two contact-section-form wow fadeInLeft delay-0-2s">
                            <div class="section-title mb-60">
                                <h2><?php echo $title_right;?></h2>
                                <p><?php echo $intro_right;?></p>
                            </div>
                            <div class="contact-form gform_wrapper">
                                <?php echo $сontent_right;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Contact Area End -->