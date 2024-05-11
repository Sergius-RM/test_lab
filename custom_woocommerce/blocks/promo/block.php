<div class="promo-row">

<?php
    $quantity = 6;
    $x = 1;
  while ($x <= $quantity):

 $bgimg = "bgimg$x";
 $title = "title$x";
 $url = "url$x";
 $date = "date$x";
 $info = "info$x";

?>
    <div class="promo">
    
        <div class="img-wrapper" style="background-image: linear-gradient(rgba(76,81,254,0.8), rgba(255, 255, 255, 0.5)), url('<?php block_field( $bgimg ); ?>');">
            <div>
            <a class="link" href="<?php block_field( $url ); ?>"><span class="title"><?php block_field( $title ); ?></span></a>

                <img src="<?php block_field( 'logo1' ); ?>" alt="">
            </div>

            <div>
                <a href="<?php block_field( $url ); ?>">Webinaarit</a>
            </div>
        </div>

        <div class="description">
            <div class="title">
                <span><?php block_field( $date ); ?></span>
                <a href="<?php block_field( $url ); ?>"><span><?php block_field( $info ); ?></span></a>
            </div>
        </div>
    </div>
<?php
    $x++;
    endwhile;
?>

</div>