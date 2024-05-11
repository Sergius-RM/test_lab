<div class="posts">

<?php global $wp_query;

$number = block_value( 'numberposts' );
$categoryid = block_value( 'categoryid' );
$categoryname = block_value( 'categoryname' );
$orderby = block_value( 'orderby' );
$order = block_value( 'order' );
$paged = block_value( 'paged' );

$wp_query = new WP_Query(array(
    'posts_per_page' => $number,
    'numberposts' => -1,
    'category'    => $categoryid,
    'category_name'       => $categoryname,
    'orderby'     =>  $orderby,
    'order'       => $order,
    'post_type'   => 'post',
    'paged' => get_query_var('paged') ?: 1 // страница пагинации
) );
?>

<?php while( have_posts() ){
    the_post(); ?>

    <div class="post">
        <?php
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
        ?>
        <a class="thumb_img" href="<?php the_permalink(); ?>"><img src="<?php echo $thumb_url[0]; ?>"></a>
        <div>
            <div class="date">
                <span>
                    <strong><p><?php the_date(); ?></p></strong>
                </span>
            </div>

            <div class="content">
                <div class="title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>

                <div class="text">
                    <?php the_excerpt(); ?>
                </div>
            </div>

            <a href="<?php the_permalink(); ?>">
                <img src="<?php block_field( 'arrowimg' ); ?>" alt="">
                <?php $lang = $_SERVER['REQUEST_URI'];  $rest = substr($lang, 0, 4);?>
                <?php if ($rest == '/en/'):?>
                    Read more
                <?php else:?>
                    Lue artikkeli
                <?php endif; ?>
            </a>
        </div>
    </div>

<?php  } ?>

<?php if ($paged == 'on'):?>
    <div class="pagination_links">
        <?php posts_nav_link(); ?>
    </div>
<?php endif?>

<?php wp_reset_postdata(); ?>

</div>
