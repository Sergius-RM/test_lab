<!-- Contact Area Start -->
    <?php
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
    }

    $title_left = get_sub_field( 'h2_title_left_2');
    $title_right = get_sub_field( 'h2_title_right_2');
    $сontent_left = get_sub_field( 'block_content_left_2');
    $сontent_right = get_sub_field( 'block_content_right_2');
    $intro_left = get_sub_field( 'intro_text_left_2');
    $intro_right = get_sub_field( 'intro_text_right_2');
    ?>
    <section class="contact-two">
        <div class="container fullwidth mt-100">
            <div class="contact-section-inner">
                <div class="row">
                    <div class="col-lg-6 salmon_side pt-100 pb-100 px-60">
                        <div class="contactus-image text-white style-two overlay wow fadeInRight delay-0-2s">
                            <div class="section-title mb-60">
                                <h2><?php echo $title_left;?></h2>
                            </div>
                            <div class="contact-informations">
                                <?php if( have_rows('attached_managers_2') ): ?>
                                    <?php while ( have_rows('attached_managers_2') ) : the_row(); ?>
                                        <div class="row justify-content-end align-items-end mb-100">
                                            <div class="col-md-6">
                                                <?php if ( get_sub_field('avatar') ) : $image = get_sub_field('avatar'); ?>
                                                    <div class="contentholder">
                                                        <img src="<?php echo $image; ?>" alt="<?php echo $image['alt']; ?>"/>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="contact-info">
                                                    <?php if ( get_sub_field('position') ):; ?>
                                                        <h3 class="mb-10"><?php echo get_sub_field('position'); ?></h3>
                                                    <?php endif; ?>

                                                    <?php if ( get_sub_field('manager') ) :; ?>
                                                        <h4 class="mb-30"><?php echo get_sub_field('manager'); ?></h4>
                                                    <?php endif; ?>
                                                    <div class="content">
                                                        <?php if ( get_sub_field('phone') ) :; ?>
                                                            <h5 class="mb-10"><a href="tel:<?php echo get_sub_field('phone'); ?>"><?php echo get_sub_field('phone'); ?></a></h5>
                                                        <?php endif; ?>

                                                        <?php if ( get_sub_field('mail') ) :; ?>
                                                            <h5 class="mb-20"><a href="mailto:<?php echo get_sub_field('mail'); ?>"><?php echo get_sub_field('mail'); ?></a></h5>
                                                        <?php endif; ?>

                                                        <?php if ( get_sub_field('linkedin') ) :; ?>
                                                            <a href="<?php echo get_sub_field('linkedin'); ?>" class="linkedin-btn"></a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 gray_side pt-100 pb-100 px-60">
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