<div class="posts">

<?php global $post;

$number = block_value( 'numberposts' );
$categoryid = block_value( 'categoryid' );
$categoryname = block_value( 'categoryname' );
$orderby = block_value( 'orderby' );
$order = block_value( 'order' );

$myposts = get_posts( array(
    'numberposts' => $number,
    'category'    => $categoryid,
    'category_name'       => $categoryname,
    'orderby'     =>  $orderby,
    'order'       => $order,
    'post_type'   => 'post',
) );
?>

<?php  foreach( $myposts as $post ){
    setup_postdata( $post ); ?>

    <div class="post">
            <?php the_post_thumbnail(); ?>
        <div>
            <div class="date">
                <span>
                    <strong><p><?php the_category(', '); ?></p></strong>
                </span>
                <span><?php the_date(); ?></span>
            </div>

            <div class="content">
                <div class="title">
                    <?php the_title(); ?>
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
<?php wp_reset_postdata(); ?>



</div>
