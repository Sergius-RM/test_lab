<div class="articles <?php block_field( 'articlestype' ); ?>" style="background-color: <?php block_field( 'bg' ); ?>;">

<?php //$posts = get_posts ("orderby=date&numberposts=3"); ?> 
<?php //if ($posts) : ?>
<?php //foreach ($posts as $post) : setup_postdata ($post); ?>

 
<?php
	$quantity = 6;
    $x = 1;
  while ($x <= $quantity):

 $url = "url$x";
 $img = "img$x";
 $title = "title$x";
 $content = "content$x";

?>
   <div class="article">
        <div>
            <a href="<?php block_field( $url); ?>">
                <img src="<?php block_field( $img ); ?>" alt="">
            </a>

            <div class="title">
                <?php //the_title(); ?>
                <?php block_field( $title ); ?>
            </div>

            <div class="message">
                <?php //the_excerpt(); ?>
                <?php block_field( $content ); ?>
            </div>
        </div>

        <a href="<?php block_field( $url ); ?>">Lue lisää...</a>
    </div>
<?php
    $x++;
    endwhile;
?>
 
<?php //endforeach; ?>
<?php //endif; ?>

</div>