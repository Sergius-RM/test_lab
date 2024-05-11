<!-- Hero Section Start -->

<?php

$number = get_sub_field( 'number_of_teams' );
$orderby = get_sub_field( 'order_by' );
$order = get_sub_field( 'sorting_order' );
$teamhierarchy = get_sub_field( 'member_hierarchy' );

$team_posts = get_posts( array(
    'post_type'      => 'asiantuntijat',
    'post_status'    => 'publish',
    'posts_per_page' => $number, // default -1 for Unlimited profiles
    'meta_key'       => $teamhierarchy,
    'orderby'        => $orderby, // Order alphabetically by name
    'order'          => $order,
) );

$image = get_sub_field('hero_img');
$right_image = get_sub_field('hero_img_right_icon');
$anchor = get_sub_field('arrow_scroll_to');
$wave = get_sub_field('bottom_wave');
?>

<section class="hero-section-two contacts-section bgs-cover pt-40 rpt-80" style="<?php if (get_sub_field( 'hero_img')): ?>background-image: url('<?php echo esc_url($image['url']); ?>');<?php endif;?><?php if ( get_sub_field('bottom_wave') == false ):?>margin-bottom: -6vw;<?php endif;?>" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="row justify-content-center text-center">
            <?php
            foreach ( $team_posts as $post ): setup_postdata($post); $thumb_src = null;
            if ( has_post_thumbnail($post->ID) ) {
                $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'miami_square' );
                $thumb_src = $src[0]; }
            ?>
                <div class="">
                    <div class="row team-member wow fadeInUp delay-0-2s">
                        <div class="image col-lg-6 col-sm-6">
                            <?php if ( $thumb_src ): ?>
                                <img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('member_position'); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="member-designation col-lg-6 col-sm-6">
                            <?php if( get_field('member_position') ): ?>
                                <h5><?php echo the_field('member_position'); ?></h5>
                            <?php endif; ?>
                            <?php if( get_field('member_name') ): ?>
                                <h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                            <?php endif; ?>
                            <?php if( get_field('job_description') ) : ?>
                                <p><?php echo the_field('job_description'); ?></p>
                            <?php endif; ?>
                            <div class="content">
                                <?php if( get_field('phone') ): ?>
                                    <a href="callto:<?php echo the_field('phone'); ?>" class="team-cta-btn"><?php echo the_field('phone'); ?></a>
                                <?php endif; ?>
                                <?php if( get_field('email') ): ?>
                                    <a href="mailto:<?php echo the_field('email'); ?>" class="team-cta-btn"><?php echo the_field('email'); ?></a>
                                <?php endif; ?>
                                <?php if( get_field('linkedin') ): ?>
                                    <a href="<?php echo the_field('linkedin'); ?>" class="linkedin-btn"></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="hero-content pl-50 py-100 rpy-120">
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

        </div>

        <?php if ( get_sub_field('bottom_wave') == true ):?>
            <div class="section_top_wave_bg" style="  background: url('<?php echo esc_url($wave['url']); ?>') 50% 50% no-repeat; background-size: cover;"></div>
        <?php endif;?>
    </div>
</section>
<!-- Hero Section End -->

