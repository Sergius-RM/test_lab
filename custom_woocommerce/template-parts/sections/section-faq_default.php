<!-- FAQ Section -->
<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$title = get_field( 'h2_header' );
$intro = get_field( 'content');
$align = get_field('content_alignment');

?>

<section class="faq-section bg-lighter centred-content mt-100 pt-100 pb-100 mb-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-10 col-lg-10 offset-xl-1 offset-lg-1 wow fadeInLeft delay-0-2s">
                <?php if( get_field('h2_header') ) : ?>
                    <div class="section-title align-items-center mb-60 <?php echo $align; ?>">
                        <h2><?php echo $title;?></h2>
                    </div>
                <?php endif; ?>

                <?php if( get_field('content') ) : ?>
                    <div class="section-text mt-60 <?php echo $align; ?>">
                        <p><?php echo $intro;?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="row justify-content-center mb-60">
            <div class="col-xl-9 col-lg-11">
                <?php if ( have_rows('faq_default') ) :
                    $i = 1; // Set the increment variable
                    echo '<div id="accordion" class="accordion">';
                ?>
                <?php while( have_rows('faq_default') ) : the_row();
                    $header = get_sub_field('question');
                    $content = get_sub_field('answer');
                    ?>
                        <div class="card single-accordion">
                            <div class="card-header" id="heading-<?php echo $i;?>">
                                <h2 class="mb-0">
                                    <button class="btn btn-link <?php if($i > 1){echo "collapsed";} ?>" type="button" data-toggle="collapse" data-target="#collapse-<?php echo $i;?>" aria-expanded="true" aria-controls="collapse-<?php echo $i;?>">
                                        <i class="fas fa-rocket"></i>
                                        <?php echo $header; ?>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse-<?php echo $i;?>" class="collapse <?php if($i == 1){echo "show";} ?>" aria-labelledby="heading-<?php echo $i;?>" data-parent="#accordion" style="">
                                <div class="card-body">
                                    <p><?php echo $content; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php $i++;?>

                <?php endwhile; ?>

                    <?php  echo '</div>';?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- FAQ Section End -->
