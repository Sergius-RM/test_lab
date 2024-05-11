<div class="articles <?php block_field( 'articlestype' ); ?>" style="background-color: <?php block_field( 'bg' ); ?>;">

<?php
    $args = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'posts_per_page' => 6,
    'suppress_filters' => false
    );
$query = new WP_Query( $args );

if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post(); ?>

   <div class="article">
        <div>

            <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail(); ?>
            </a>

            <div class="title">
                <?php the_title(); ?>
            </div>

            <div class="message">
                <?php the_excerpt(); ?>
            </div>
        </div>

        <a href="<?php the_permalink() ?>">Lue lisää...</a>
    </div>

<?php    }
} else {

}
wp_reset_postdata();?>
</div>