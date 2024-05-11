<?php $lang = $_SERVER['REQUEST_URI'];  $rest = substr($lang, 0, 4);?>

<div class="cube">
    <?php $title1 = block_field( 'title1', false );?>
    <div class="blockcontent1" style="background-image: url('<?php block_field( 'bgimg1' ); ?>');">
    <?php if ( ! empty( $title1 ) ):?>
        <div class="content <?php block_field( 'blockcontent1' ); ?>">
            <div class="subtitle"><?php block_field( 'subtitle1' ); ?></div>

            <div class="title"><?php block_field( 'title1' ); ?></div>

            <div>
                <?php block_field( 'content1' ); ?>
            </div>

            <a href="<?php block_field( 'url1' ); ?>"><?php if ($rest == '/en/'):?>Read more<?php else:?>Lue lisää<?php endif; ?></a>
        </div>
        <?php endif;?>
    </div>

    <?php $title2 = block_field( 'title2', false );?>
    <div class="blockcontent2">
    <?php if ( ! empty( $title2 ) ):?>
        <div class="content <?php block_field( 'blockcontent2' ); ?>">
            <div class="subtitle"><?php block_field( 'subtitle2' ); ?></div>

            <div class="title">
                <?php block_field( 'title2' ); ?>
            </div>

            <div>
                <?php block_field( 'content2' ); ?>
            </div>

            <a href="<?php block_field( 'url2' ); ?>"><?php if ($rest == '/en/'):?>Read more<?php else:?>Lue lisää<?php endif; ?></a>
        </div>
        <?php endif;?>
    </div>

    <?php $title3 = block_field( 'title3', false );?>
    <div class="blockcontent3">
    <?php if ( ! empty( $title3 ) ):?>
        <div class="content <?php block_field( 'blockcontent3' ); ?>">
            <div class="subtitle"><?php block_field( 'subtitle3' ); ?></div>

            <div class="title"><?php block_field( 'title3' ); ?></div>

            <div>
                <?php block_field( 'content3' ); ?>
            </div>

            <a href="<?php block_field( 'url3' ); ?>"><?php if ($rest == '/en/'):?>Read more<?php else:?>Lue lisää<?php endif; ?></a>
        </div>
        <?php endif;?>
    </div>

    <?php $title4 = block_field( 'title4', false );?>
    <div class="blockcontent4" style="background-image: url('<?php block_field( 'bgimg2' ); ?>');">
    <?php if ( ! empty( $title4 ) ):?>
        <div class="content <?php block_field( 'blockcontent4' ); ?>">
            <div class="subtitle"><?php block_field( 'subtitle4' ); ?></div>

            <div class="title"><?php block_field( 'title4' ); ?></div>

            <div>
                <?php block_field( 'content4' ); ?>
            </div>

            <a href="<?php block_field( 'url4' ); ?>"><?php if ($rest == '/en/'):?>Read more<?php else:?>Lue lisää<?php endif; ?></a>
        </div>
        <?php endif;?>
    </div>
	
    <?php $title5 = block_field( 'title5', false );?>
    <?php if ( ! empty( $title5 ) ):?>
    <div class="blockcontent5" style="background-image: url('<?php block_field( 'bgimg3' ); ?>');">
            <div class="content <?php block_field( 'blockcontent5' ); ?>">
                <div class="subtitle"><?php block_field( 'subtitle5' ); ?></div>

                <div class="title"><?php block_field( 'title5' ); ?></div>

                <div>
                    <?php block_field( 'content5' ); ?>
                </div>

                <a href="<?php block_field( 'url5' ); ?>"><?php if ($rest == '/en/'):?>Read more<?php else:?>Lue lisää<?php endif; ?></a>
            </div>
    </div>
    <?php endif;?>

    <?php $title6 = block_field( 'title6', false );?>
    <?php if ( ! empty( $title6 ) ):?>
    <div class="blockcontent6" >
            <div class="content <?php block_field( 'blockcontent6' ); ?>">
                <div class="subtitle"><?php block_field( 'subtitle6' ); ?></div>

                <div class="title"><?php block_field( 'title6' ); ?></div>

                <div>
                    <?php block_field( 'content6' ); ?>
                </div>

                <a href="<?php block_field( 'url6' ); ?>"><?php if ($rest == '/en/'):?>Read more<?php else:?>Lue lisää<?php endif; ?></a>
            </div>
    </div>
    <?php endif;?>
</div>
