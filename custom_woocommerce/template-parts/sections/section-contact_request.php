<!-- Precontact Section Start -->
<?php
$title = get_field( 'request_box_h2', 'option' );
$button = get_field( 'request_box_btn_text', 'option' );
$link = get_field( 'request_box_btn_link', 'option' );

?>

<section class="centred-content bg-lighter pt-100 pb-50 rpb-50 rpt-95 Test">
    <div class="container">
        <div class="row justify-content-between align-items-center mb-60">
            <div class="col-xl-10 col-lg-10 offset-xl-1 offset-lg-1 wow fadeInLeft delay-0-2s">
                <div class="section-title text-center mb-60">
                    <h3><?php echo $title;?></h3>
                </div>
                <div class="text-center mt-50 wow fadeInUp delay-0-2s">
                    <a href="<?php echo $link;?>" class="cta-theme-btn"><?php echo $button;?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Precontact Section End -->
