<div class="slider-container">

    <div class="controls" id="customize-controls" aria-label="Carousel Navigation" tabindex="0">
        <div class="prev" aria-controls="customize" tabindex="-1" data-controls="prev">
        </div>

        <div class="next" aria-controls="customize" tabindex="-1" data-controls="next">
        </div>
    </div>

    <div class="tslider" style="color: <?php block_field( 'text-color' ); ?>">
        <div>
            <div style="background-color: <?php block_field( 'card-bgcolor' ); ?>">
                <img src="<?php block_field( 'img1' ); ?>" alt="" class="image">
                <div>
                    <span><strong><?php block_field( 'title1' ); ?></strong></span>
                    <span><?php block_field( 'textcontent1' ); ?></span>
                </div>
            </div>
        </div>

        <div>
            <div style="background-color: <?php block_field( 'card-bgcolor' ); ?>">
                <img src="<?php block_field( 'img2' ); ?>" alt="" class="image">
                <div>
                    <span><strong><?php block_field( 'title2' ); ?></strong></span>
                    <span><?php block_field( 'textcontent2' ); ?></span>
                </div>
            </div>
        </div>

        <div>
            <div style="background-color: <?php block_field( 'card-bgcolor' ); ?>">
                <img src="<?php block_field( 'img3' ); ?>" alt="" class="image">
                <div>
                    <span><strong><?php block_field( 'title3' ); ?></strong></span>
                    <span><?php block_field( 'textcontent3' ); ?></span>
                </div>
            </div>
        </div>

        <div>
            <div style="background-color: <?php block_field( 'card-bgcolor' ); ?>">
                <img src="<?php block_field( 'img4' ); ?>" alt="" class="image">
                <div>
                    <span><strong><?php block_field( 'title4' ); ?></strong></span>
                    <span><?php block_field( 'textcontent4' ); ?></span>
                </div>
            </div>
        </div>

        <div>
            <div style="background-color: <?php block_field( 'card-bgcolor' ); ?>">
                <img src="<?php block_field( 'img5' ); ?>" alt="" class="image">
                <div>
                    <span><strong><?php block_field( 'title5' ); ?></strong></span>
                    <span><?php block_field( 'textcontent5' ); ?></span>
                </div>
            </div>
        </div>

        <div>
            <div style="background-color: <?php block_field( 'card-bgcolor' ); ?>">
                <img src="<?php block_field( 'img6' ); ?>" alt="" class="image">
                <div>
                    <span><strong><?php block_field( 'title6' ); ?></strong></span>
                    <span><?php block_field( 'textcontent6' ); ?></span>
                </div>
            </div>
        </div>
        <div>
            <div style="background-color: <?php block_field( 'card-bgcolor' ); ?>">
                <img src="<?php block_field( 'img7' ); ?>" alt="" class="image">
                <div>
                    <span><strong><?php block_field( 'title7' ); ?></strong></span>
                    <span><?php block_field( 'textcontent7' ); ?></span>
                </div>
            </div>
        </div>
        <div>
            <div style="background-color: <?php block_field( 'card-bgcolor' ); ?>">
                <img src="<?php block_field( 'img8' ); ?>" alt="" class="image">
                <div>
                    <span><strong><?php block_field( 'title8' ); ?></strong></span>
                    <span><?php block_field( 'textcontent8' ); ?></span>
                </div>
            </div>
        </div>
        <div>
            <div style="background-color: <?php block_field( 'card-bgcolor' ); ?>">
                <img src="<?php block_field( 'img9' ); ?>" alt="" class="image">
                <div>
                    <span><strong><?php block_field( 'title9' ); ?></strong></span>
                    <span><?php block_field( 'textcontent9' ); ?></span>
                </div>
            </div>
        </div>
        <div>
            <div style="background-color: <?php block_field( 'card-bgcolor' ); ?>">
                <img src="<?php block_field( 'img10' ); ?>" alt="" class="image">
                <div>
                    <span><strong><?php block_field( 'title10' ); ?></strong></span>
                    <span><?php block_field( 'textcontent10' ); ?></span>
                </div>
            </div>
        </div>

        <div>
            <div style="background-color: <?php block_field( 'card-bgcolor' ); ?>">
                <img src="<?php block_field( 'img11' ); ?>" alt="" class="image">
                <div>
                    <span><strong><?php block_field( 'title11' ); ?></strong></span>
                    <span><?php block_field( 'textcontent11' ); ?></span>
                </div>
            </div>
        </div>
        <div>
            <div style="background-color: <?php block_field( 'card-bgcolor' ); ?>">
                <img src="<?php block_field( 'img12' ); ?>" alt="" class="image">
                <div>
                    <span><strong><?php block_field( 'title12' ); ?></strong></span>
                    <span><?php block_field( 'textcontent12' ); ?></span>
                </div>
            </div>
        </div>
		<div>
            <div style="background-color: <?php block_field( 'card-bgcolor' ); ?>">
                <img src="<?php block_field( 'img13' ); ?>" alt="" class="image">
                <div>
                    <span><strong><?php block_field( 'title13' ); ?></strong></span>
                    <span><?php block_field( 'textcontent13' ); ?></span>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="module">
    const slider = tns({
        container: '.tslider',
        items: 4,
        autoplay: true,
        "speed": 400,
        "arrowKeys": true,
        // controls: false,
        nav: false,
        autoplayButtonOutput: false,
        mouseDrag: true,
        "fixedWidth": 220,
        "responsive": {
            "450": {
                "fixedWidth": 280,
            },
        },
        "gutter": 20,
        "swipeAngle": false,
        prevButton: '.arrow',
        "controlsContainer": "#customize-controls",
    });
</script>