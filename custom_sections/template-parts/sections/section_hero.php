<!-- Hero Section Start -->

<?php
$image = get_sub_field('hero_img');
$right_image = get_sub_field('hero_img_right_icon');
$anchor = get_sub_field('arrow_scroll_to');
$wave = get_sub_field('bottom_wave');
?>

<!--section class="hero-section-two bgs-cover overlay pt-40 rpt-80" style="background-image: url('<?php echo esc_url($image['url']); ?>')">-->
<section class="hero-section-two bgs-cover pt-40 rpt-80" style="<?php if (get_sub_field( 'hero_img')): ?>background-image: url('<?php echo esc_url($image['url']); ?>');<?php endif;?>" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="hero-content pl-50">
                    <h1 class="wow fadeInUp delay-0-4s mt-20">
                        <?php echo get_sub_field('header_title');?>
                    </h1>
                    <span class="sub-title mt-30 d-block wow fadeInUp delay-0-2s">
                        <?php echo get_sub_field('content');?>
                    </span>
                    <?php if (get_sub_field( 'read_more_link')): ?>
                        <a class="read_more_link" href="<?php echo get_sub_field('read_more_link');?>">Ota yhteyttä</a>
                    <?php endif;?>
                </div>
            </div>
            <?php if (get_sub_field( 'hero_img_right_icon')): ?>
                <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="hero-img-content pt-65">
                       <img class="hero_right_image wow fadeInUp delay-0-2s" src="<?php echo esc_url($right_image['url']); ?>">
                </div>
            <?php endif; ?>
        </div>
        <?php if (get_sub_field( 'arrow_scroll_to')): ?>
        <div class="row justify-content-center arrows">
            <a class="scrollto smooth-scroll" href="#<?php if ( get_sub_field( 'arrow_scroll_to') ) :?><?php echo $anchor;?><?php endif?>">
                <div class="triangles">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
            </a>
        </div>
        <?php endif; ?>

        <?php if ( get_sub_field('bottom_wave') == true ):?>
            <div class="section_top_wave_bg" style="  background: url('<?php echo esc_url($wave['url']); ?>') 50% 50% no-repeat; background-size: cover;"></div>
        <?php endif;?>
    </div>
</section>
<!-- Hero Section End -->