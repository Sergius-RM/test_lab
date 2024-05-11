<!-- Short Parallax Scrolling Start -->
<?php
    $title = get_sub_field('main_header');
    $subtitle = get_sub_field('sub_header');
    $parallax_img = get_sub_field('parallax_image');
?>

<section class="parallax-block parallax-image overlay-dark text-white mt-150"
<?php if ( get_sub_field( 'parallax_image') ) :?>style="background-image: linear-gradient(180deg,#000000 0%,rgba(0,0,0,0.35) 100%), url(<?php echo $parallax_img; ?>);"<?php endif;?>>
    <?php if( $title ): ?>
    <div class="container">
        <div class="work-progress-inner-three">
            <div class="row justify-content-center">
                <div class="col-sm-8 text-center parablock wow fadeInUp delay-0-2s">
                    <h2 class="parallax_title"><?php echo $title; ?></h2>
                    <h3 class="parallax_subtitle"><?php echo $subtitle; ?></h3>
                </div>
            </div>
        </div>
    </div>
    <?php endif;?>
</section>
<!-- Short Parallax Scrolling End -->
