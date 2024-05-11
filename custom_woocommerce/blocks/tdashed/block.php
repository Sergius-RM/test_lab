<div class="dashed" style="background-color:<?php block_field( 'background-color' ); ?>;">

	<?php if (block_value( "now_count" ) == 1) { ?>
	    <img src="/wp-content/themes/tiimiakatemia/blocks/tdashed/bgdotted1.png">
	<?php }; ?>
	<?php if (block_value( "now_count" ) == 2) { ?>
	    <img src="/wp-content/themes/tiimiakatemia/blocks/tdashed/bgdotted2.png">
	<?php }; ?>
	<?php if (block_value( "now_count" ) == 3) { ?>
	    <img src="/wp-content/themes/tiimiakatemia/blocks/tdashed/bgdotted3.png">
	<?php }; ?>
	<?php if (block_value( "now_count" ) == 4) { ?>
	    <img src="/wp-content/themes/tiimiakatemia/blocks/tdashed/bgdotted4.png">
	<?php }; ?>
	
    <div class="point p1">
        <i></i>
        <span><?php block_field( 'point1-title' ); ?></span>
        <?php block_field( 'point1-text' ); ?>
    </div>

    <div class="point p2">
        <i></i>
        <span><?php block_field( 'point2-title' ); ?></span>
        <?php block_field( 'point2-text' ); ?>
    </div>

    <div class="point p3">
        <i></i>
        <span><?php block_field( 'point3-title' ); ?></span>
        <?php block_field( 'point3-text' ); ?>
    </div>

    <div class="point p4">
        <i></i>
        <span><?php block_field( 'point4-title' ); ?></span>
        <?php block_field( 'point4-text' ); ?>
    </div>

    <style>
        .dashed .point.p<?php block_field( 'now_count' ); ?> > i {
            display: block;
            width: 46px;
            height: 46px;
            background: blue;
            left: calc(23px);
            top: calc(50% - 23px);
            position: absolute;
            border-radius: 50%;
        }
    </style>
	
	<script>
	window.addEventListener(`resize`, event => {
  		console.log("res");
		if (document.querySelector('.dashed').offsetWidth != window.screen.width) {
			var el = document.querySelector('.dashed');
			el.classList.toggle('active');
			
			console.log("mk sm");
		}
	}, false);

	</script>

</div>