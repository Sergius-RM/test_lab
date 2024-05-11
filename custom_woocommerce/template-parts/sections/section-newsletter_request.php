<!-- Newsletter Section Start -->
<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$title = get_field( 'h2_header', 'option' );
$form = get_field( 'form_content', 'option' );
$link = get_field( 'button_link', 'option' );

?>

<section class="subscribe-section centred-content bg-salmon mt-100 pt-80 pb-80">
    <div class="container">
        <div class="row justify-content-center align-items-center mb-60">
            <div class="col-xl-7 col-lg-11 text-center wow fadeInLeft delay-0-2s">
                <div class="section-title text-center mb-60 wow fadeInLeft delay-0-2s animated">
                    <h3><?php echo $title;?></h3>
                </div>
                <div class="text-center mt-50 wow fadeInUp delay-0-2s">
                    <?php echo $form;?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter Section End -->