<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

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
?>

<?php if ( $team_posts ): ?>
<section <?php if (get_sub_field('section_id')): ?> id="<?php the_sub_field('section_id'); ?>"<?php endif; ?> class="team-section rpt-95 pb-100 rpb-40" style="margin-top: -15vw;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <?php 
            foreach ( $team_posts as $post ): setup_postdata($post); $thumb_src = null;
            if ( has_post_thumbnail($post->ID) ) {
                $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'miami_square' );
                $thumb_src = $src[0]; }
            ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member wow fadeInUp delay-0-2s">
                        <div class="image">
                            <?php if ( $thumb_src ): ?>
                                <img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('member_position'); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="member-designation">
                            <?php if( get_field('member_position') ): ?>
                                <h5><?php echo the_field('member_position'); ?></h5>
                            <?php endif; ?>
                            <?php if( get_field('member_name') ): ?>
                                <h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                            <?php endif; ?>
                            <?php if( get_field('job_description') ) : ?>
                                <p><?php echo the_field('job_description'); ?></p>
                            <?php endif; ?>
                            <div class="content mt-30">
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
</section>
<?php endif; ?>




