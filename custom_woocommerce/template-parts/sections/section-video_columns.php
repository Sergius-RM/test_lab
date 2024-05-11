<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

//second false skip ACF pre-processcing
$url = get_sub_field('oembed', false, false);
//get wp_oEmed object, not a public method. new WP_oEmbed() would also be possible
$oembed = _wp_oembed_get_object();
//get provider
$provider = $oembed->get_provider($url);
//fetch oembed data as an object
$oembed_data = $oembed->fetch( $provider, $url );
$thumbnail = $oembed_data->thumbnail_url;
$iframe = $oembed_data->html;
$title = $oembed_data->title;

$video = get_sub_field('oembed'); //Embed Code
$video_url = get_sub_field('oembed', FALSE, FALSE); //URL
$resolution_video_thumb = get_video_thumbnail_uri($video_url); //get THumbnail via our functions in functions.php


$swapit = get_field('swap_blocks');
?>


<!-- Video columns Section Start -->

<section <?php if (get_sub_field('section_id')): ?> id="<?php the_sub_field('section_id'); ?>"<?php endif; ?> class="about-three py-50 rpy-50">
    <div class="container pb-50 rpb-50">
        <div class="row align-items-center">
            <div class="col-lg-6">
            <div class="about-content pr-30 pl-30 rmb-55 wow fadeInLeft delay-0-2s">
                <div class="section-title mb-35">
                    <span class="sub-title"><?php the_sub_field('upper_header'); ?></span>
                    <h2><?php the_sub_field('h2_header'); ?></h2>
                </div>
                <p><?php the_sub_field('content'); ?></p>
                <?php if( get_sub_field('button_link') ) : ?>
                    <a href="<?php the_sub_field('button_link'); ?>" class="gray-theme-btn mt-30"><?php the_sub_field('button_text'); ?></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-6 <?php if ( get_sub_field('swap_blocks') == true ) { echo 'order-first'; } ?>">
                <div class="about-four-images text-center wow fadeInRight delay-0-2s">
                    <div class="row">
                        <?php if( $resolution_video_thumb) : ?>
                            <div class="image video-blog">
                                <img class="darkoverlay" src="<?php echo $resolution_video_thumb; ?>" alt="<?php echo $title; ?>">
                            </div>
                        <?php endif; ?>
                        <a href="<?php echo $url; ?>" class="mfp-iframe play-btn"></a>
                    </div>
                </div>
        </div>
    </div>
    </div>
</section>
<!-- Video columns Section End -->



