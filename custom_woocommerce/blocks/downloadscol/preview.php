<div class="download-col">
    <div class="description">
        <div>
            <div class="title">
                <?php block_field( 'title1' ); ?>
            </div>

            <div class="text"><?php block_field( 'contenttext1' ); ?></div>

            <div>
                <ul class="strong">
                    <li><span><?php block_field( 'listitem1' ); ?></span></li>
                    <li>
                        <span>
                            <?php block_field( 'listitem2' ); ?>
                        </span>
                    </li>
                    <li>
                        <span><?php block_field( 'listitem3' ); ?></span>
                    </li>
                    <li>
                        <span>
                            <?php block_field( 'listitem4' ); ?>
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <div>
            <div class="title"><?php block_field( 'title2' ); ?></div>

            <div class="text"><?php block_field( 'contenttext2' ); ?></div>
        </div>

        <div>
            <div class="title"><?php block_field( 'title3' ); ?></div>

            <div class="text">
                <?php block_field( 'contenttext3' ); ?>
            </div>

            <a href="<?php block_field( 'buttonurl1' ); ?>">Lue lisaa</a>
        </div>
    </div>

    <div
        class="download"
        style="background-image: linear-gradient(rgba(76,81,254,0.2), rgba(255, 255, 255, 0.2)),
        url('<?php block_field( 'bgimage' ); ?>"
    >
        <div class="title"><?php block_field( 'sectiontitle' ); ?></div>

        <div class="quotation strong">
            <div>
                <i>
                    <?php block_field( 'quatation1' ); ?>
                </i>

                <span><?php block_field( 'quatationauthor1' ); ?></span>
            </div>

            <div>
                <i>
                    <?php block_field( 'quatation2' ); ?>
                </i>
                <span><?php block_field( 'quatationauthor2' ); ?></span>
            </div>
        </div>

        <div>
            <div class="title"><?php block_field( 'sectiontitle2' ); ?></div>

            <div class="row">

                <div class="book">
                    <div class="img-wrapper">
                        <img src="<?php block_field( 'coverimage1' ); ?>" alt="">
                    </div>

                    <a href="<?php block_field( 'bookurl1' ); ?>">Lataa tasta</a>
                </div>

                <div class="book">
                    <div class="img-wrapper">
                        <img src="<?php block_field( 'coverimage2' ); ?>" alt="">
                    </div>

                    <a href="<?php block_field( 'bookurl2' ); ?>">Lataa tasta</a>
                </div>
            </div>
        </div>

    </div>
</div>
