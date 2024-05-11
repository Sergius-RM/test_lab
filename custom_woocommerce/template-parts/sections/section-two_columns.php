<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$swapit = get_field('swap_blocks');

?>
<?php $image = get_sub_field('image'); ?>
<?php
$url =  $image;
list($width, $height) = getimagesize($url);
?>
<!-- Two columns Section Start -->

<section <?php if (get_sub_field('section_id')): ?> id="<?php the_sub_field('section_id'); ?>"<?php endif; ?> class="wrap_two_columns about-three py-50 rpy-50">
    <div class="container pb-50 rpb-50">
   
        <div class="row align-items-center section_two_columns">
        
            <div class="col-lg-6 about-four-content <?php if ( get_sub_field('swap_blocks') == true ):?>right-content<?php else:?>left-content<?php endif;?>" style="min-height:<?php echo $height;?>px;">
                <div class="about-content pr-30 pl-30 rmb-55 wow fadeInLeft delay-0-2s">
                    <div class="section-title mb-35">
                        <span class="sub-title"><?php the_sub_field('upper_header'); ?></span>
                        <h2><?php the_sub_field('h2_header'); ?></h2>
                    </div>
                    <p><?php the_sub_field('content'); ?></p>
                    <?php if( get_sub_field('button_link') ) : ?>
                        <a href="<?php the_sub_field('button_link'); ?>" class="read_more_link mt-30"><?php the_sub_field('button_text'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6 <?php if ( get_sub_field('swap_blocks') == true ) { echo 'order-first'; } ?>">
                <?php if ( get_sub_field('image') ) : $image = get_sub_field('image'); ?>
                    <div class="about-four-images text-center wow fadeInRight delay-0-2s">
                        <img src="<?php echo $image; ?>" height="<?php echo $height;?>px;" alt="<?php echo $image['alt']; ?>"
                            <?php if ($width < $height):?>style="width: auto;"<?php endif;?>/>
                    </div>
                <?php endif; ?>
            </div>
            <div class="section_two_columns_second"></div>
        </div>
    </div>
</section>
<!-- Two columns Section End -->





