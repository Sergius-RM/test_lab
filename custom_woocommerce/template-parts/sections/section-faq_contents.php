<!-- FAQ Section -->
<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$title = get_sub_field( 'h2_header', 'option' );
$intro = get_sub_field( 'content', 'option' );
$align = get_sub_field('content_align');
$background = get_sub_field('section_overlay');
?>

<section class="faq-section centred-content pt-100 rpt-100 bg-<?php echo $background; ?>">
    <div class="container">
        <div class="row justify-content-between align-items-center mb-60">
            <div class="col-xl-10 col-lg-10 offset-xl-1 offset-lg-1 wow fadeInLeft delay-0-2s">
                <div class="section-title mb-60 <?php echo $align; ?>">
                    <?php if( get_sub_field('h2_header') ) : ?>
                        <h2><?php echo $title;?></h2>
                    <?php endif; ?>
                </div>
                <div class="section-text mt-60 <?php echo $align; ?>">
                    <?php if( get_sub_field('content') ) : ?>
                        <p><?php echo $intro;?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="row justify-content-center pb-100">
            <div class="col-xl-9 col-lg-11">
                <?php if ( have_rows('faq_contents') ) :
                    $i = 1; // Set the increment variable
                    echo '<div id="accordion" class="accordion">';
                ?>
                <?php while( have_rows('faq_contents') ) : the_row();
                    $question = get_sub_field('question');
                    $answer = get_sub_field('answer');
                    ?>
                        <div class="card single-accordion">
                            <div class="card-header" id="heading-<?php echo $i;?>">
                                <h2 class="mb-0">
                                    <a class="btn btn-link <?php if($i > 1){echo "collapsed";} ?>" type="button" data-toggle="collapse" data-target="#collapse-<?php echo $i;?>" aria-expanded="true" aria-controls="collapse-<?php echo $i;?>">
                                        <i class="fas fa-rocket"></i>
                                        <?php echo $question; ?>
                                    </a>
                                </h2>
                            </div>
                            <div id="collapse-<?php echo $i;?>" class="collapse <?php if($i == 1){echo "show";} ?>" aria-labelledby="heading-<?php echo $i;?>" data-parent="#accordion" style="">
                                <div class="card-body">
                                    <p><?php echo $answer; ?></p>
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
