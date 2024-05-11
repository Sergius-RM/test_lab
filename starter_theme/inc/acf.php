<?php
/**
 * ACF Functions
 *
 */

/**
 * Add options page
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => __('Site Settings'),
        'menu_title' => __('Site Settings'),
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
    ]);
}

/**
 * Register ACF blocks
 */
function acf_init_block_types()
{

    if (function_exists('acf_register_block_type')) {

        /**
         * Hero block
         */
        acf_register_block_type(
            array(
                'name'              => 'hero',
                'title'             => __('Hero'),
                'description'       => __('Hero boxes'),
                'render_callback'   => 'render_hero_block',
                'category'          => 'embed',
                'icon'              => 'id-alt',
                'keywords'          => array('hero'),
                'multiple'          => true,
                'mode'              => 'edit',
            )
        );

        /**
         * Post block
         */
        acf_register_block_type(
            array(
                'name'              => 'selected-pages',
                'title'             => __('Posts List'),
                'description'       => __('Posts list boxes'),
                'render_callback'   => 'render_postlist_block',
                'category'          => 'embed',
                'icon'              => 'excerpt-view',
                'keywords'          => array('posts'),
                'multiple'          => true,
                'mode'              => 'edit',
            )
        );

        /**
         * Carousel block
         */
        acf_register_block_type(
            array(
                'name'              => 'carousel',
                'title'             => __('Carousel' ),
                'description'       => __('List of images for an image carousel' ),
                'render_callback'   => 'render_carousel_block',
                'category'          => 'embed',
                'icon'              => 'images-alt',
                'keywords'          => array('carousel images'),
                'multiple'          => true,
                'mode'              => 'edit',
            )
        );

        /**
         * Image Gallery block
         */
        acf_register_block_type(
            array(
                'name'              => 'imagegallery',
                'title'             => __('Image Gallery' ),
                'description'       => __('Image Gallery block' ),
                'render_callback'   => 'render_imagegallery_block',
                'category'          => 'embed',
                'icon'              => 'format-gallery',
                'keywords'          => array('image gallery' ),
                'multiple'          => true,
                'mode'              => 'edit',
            )
        );

        /**
         * Сontacts block
         */
        acf_register_block_type(
            array(
                'name'              => 'contactswiget',
                'title'             => __('Сontacts' ),
                'description'       => __('Сontacts block' ),
                'render_callback'   => 'render_contactswiget_block',
                'category'          => 'embed',
                'icon'              => 'location-alt',
                'keywords'          => array('сontacts' ),
                'multiple'          => true,
                'mode'              => 'edit',
            )
        );

        /**
         * Info Grid block
         */
        acf_register_block_type(
            array(
                'name'              => 'infogrig',
                'title'             => __('Info Grid' ),
                'description'       => __('Info Grid block' ),
                'render_callback'   => 'render_infogrig_block',
                'category'          => 'embed',
                'icon'              => 'grid-view',
                'keywords'          => array('сontacts' ),
                'multiple'          => true,
                'mode'              => 'edit',
            )
        );

        /**
         * Call to Action block
         */
        acf_register_block_type(
            array(
                'name'              => 'calltoaction',
                'title'             => __('Call to Action' ),
                'description'       => __('Call to Action' ),
                'render_callback'   => 'render_calltoaction_block',
                'category'          => 'embed',
                'icon'              => 'megaphone',
                'keywords'          => array('сontacts' ),
                'multiple'          => true,
                'mode'              => 'edit',
            )
        );

        /**
         * Word Carousel block
         */
        acf_register_block_type(
            array(
                'name'              => 'wordcarousel',
                'title'             => __('Bloks Carousel' ),
                'description'       => __('List of blocks for an carousel' ),
                'render_callback'   => 'render_wordcarousel_block',
                'category'          => 'embed',
                'icon'              => 'images-alt',
                'keywords'          => array('bloks carousel'),
                'multiple'          => true,
                'mode'              => 'edit',
            )
        );

        /**
         * Testimonials block
         */
        acf_register_block_type(
            array(
                'name'              => 'testimonials',
                'title'             => __('Testimonials' ),
                'description'       => __('List of Testimonials' ),
                'render_callback'   => 'render_testimonials_block',
                'category'          => 'embed',
                'icon'              => 'format-chat',
                'keywords'          => array('testimonials'),
                'multiple'          => true,
                'mode'              => 'edit',
            )
        );

        /**
         * Team Members block
         */
        acf_register_block_type(
            array(
                'name'              => 'teammembers',
                'title'             => __('Team Members' ),
                'description'       => __('List of Team Members' ),
                'render_callback'   => 'render_teammembers_block',
                'category'          => 'embed',
                'icon'              => 'groups',
                'keywords'          => array('team members'),
                'multiple'          => true,
                'mode'              => 'edit',
            )
        );
    }
}

add_action('acf/init', 'acf_init_block_types');

/**
 * Hero Block Callback Function.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
function render_hero_block ( $block, $content = '', $is_preview = false, $post_id = 0 ) {

    // Load values and assing defaults.
    $hero_title = get_field('hero_title');
    $hero_text = get_field('hero_text');
    $hero_button = get_field('hero_button');
    $hero_button_link = get_field('hero_button_link');
    $hero_img = get_field('hero_img');

    ?>

      <div class="container is_hero">
        <div class="row">

          <div class="col-sm">
            <h1><?php echo $hero_title; ?></h1>
            <div class="hero_text"><?php echo $hero_text; ?></div>
            <a class="hero_btn" href="<?php echo $hero_button_link; ?>" target="_blanl"><?php echo $hero_button; ?></a>
          </div>
          <div class="col-sm" style="background: url(<?php echo $hero_img; ?>) 50% 50% no-repeat; background-size: contain;">
          </div>

        </div>
      </div>

    <?php
}


/**
 * Posts List Block Callback Function.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
function render_postlist_block ( $block, $content = '', $is_preview = false, $post_id = 0 ) {

    $posts_list_title = get_field('posts_list_title' );
    $number = get_field('numberposts' );
    $categoryname = get_field('categoryname' );
    $orderby = get_field('orderby' );
    $order = get_field('order' );
    $columns = get_field('posts_list_columns' );

    global $post;
    $myposts = get_posts( array(
        'posts_per_page'    => $number,
        'category_name'  => $categoryname,
        'orderby'        =>  $orderby,
        'order'          => $order,
    ));
    ?>

    <div class="container posts_list_block">
        <div class="row">
            <h3><?php echo $posts_list_title; ?></h3>
            <?php
            if ( have_posts()) :
            query_posts($myposts);
            while (have_posts()) : the_post();
            ?>
                <div class="<?php if ( get_field('posts_list_columns')) :?>col-sm-<?php echo $columns;?><?php endif ?> post">
                        <?php the_post_thumbnail(); ?>
                    <div>
                        <div class="date">
                            <span>
                                <strong><p><?php the_category(', '); ?></p></strong>
                            </span>
                            <span><?php the_date(); ?></span>
                        </div>

                        <div class="content">
                            <a href="<?php the_permalink(); ?>">
                                <h3 class="title">
                                    <?php the_title(); ?>
                                </h3>
                            </a>

                            <div class="text">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>

                    </div>
                </div>

            <?php  endwhile;
            endif;
            wp_reset_query();
            ?>
        </div>
    </div>
<?php
}


/**
 * Carousel Block Callback Function.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
function render_carousel_block ( $block, $content = '', $is_preview = false, $post_id = 0 ) {
    ?>

    <?php if( have_rows('carousel_images')): ?>
    <div class="carousel_images" id="base">
        <?php while ( have_rows('carousel_images')) : the_row(); ?>
        <div class="item">

            <img width="100%" src="<?php the_sub_field('image'); ?>">

            </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>

<?php
}


/**
 * Image Gallery Callback Function.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
function render_imagegallery_block ( $block, $content = '', $is_preview = false, $post_id = 0 ) {

    $gallery_title = get_field('gallery_title' );
    $gallery_columns = get_field('gallery_columns' );
    $gallery_fullwidth = get_field('gallery_fullwidth' );

    ?>

    <?php if( have_rows('image_gallery_block')): ?>
        <div class="image_gallery_block <?php if ( $gallery_fullwidth == 'fullwidth' ) :?>fullwidth<?php else:?>boxed<?php endif;?>">
        <div class="container">
            <div class="row">
                <h3><?php echo $gallery_title;?></h3>
                <?php while ( have_rows('image_gallery_block')) : the_row(); ?>
                    <div class="<?php if ( get_field('gallery_columns')) :?>col-sm-<?php echo $gallery_columns;?><?php else:?>col-sm<?php endif;?> item">
                        <img width="100%" src="<?php the_sub_field('image'); ?>">
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        </div>
      <?php endif; ?>

    <?php
}


/**
 * Contacts Callback Function.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
function render_contactswiget_block ( $block, $content = '', $is_preview = false, $post_id = 0 ) {

    $contactswiget_phones = get_field('contactswiget_show_phones' );
    $contactswiget_emails = get_field('contactswiget_show_emails' );
    $contactswiget_social = get_field('contactswiget_show_social' );
    $contactswiget_adress = get_field('contactswiget_show_adress' );
    $сontacts_list_columns = get_field('сontacts_list_columns' );
    ?>

        <div class="container contactswiget">
            <div class="row">

                <?php if ( $contactswiget_phones == 'show') :?>
                    <?php if( have_rows('topbarphones', 'option')): ?>
                        <div class="<?php if ( get_field('сontacts_list_columns')) :?>col-sm-<?php echo $сontacts_list_columns;?><?php else:?>col-sm<?php endif;?> phones_list">
                            <ul>
                                <?php while ( have_rows('topbarphones', 'option')) : the_row();
                                    $top_bar_phone_link = get_sub_field('top_bar_phone_link');
                                    $top_bar_phone = get_sub_field('top_bar_phone');
                                    ?>
                                    <li>
                                        <i class="bi bi-telephone-fill"></i>
                                        <a href="tel:<?php echo $top_bar_phone_link; ?>" target="_blank"><?php echo $top_bar_phone; ?></a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                <?php endif ?>

                <?php if ( $contactswiget_emails == 'show') :?>
                    <?php if( have_rows('topbaremails', 'option')): ?>
                        <div class="<?php if ( get_field('сontacts_list_columns')) :?>col-sm-<?php echo $сontacts_list_columns;?><?php else:?>col-sm<?php endif;?> emails_list">
                            <ul>
                                <?php while ( have_rows('topbaremails', 'option')) : the_row();
                                    $top_bar_email = get_sub_field('top_bar_email');
                                    $top_bar_email_link = get_sub_field('top_bar_email_link');
                                    ?>
                                    <li>
                                        <i class="bi bi-envelope"></i>
                                        <a href="mailto:<?php echo $top_bar_email_link; ?>" target="_blank"><?php echo $top_bar_email; ?></a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if ( $contactswiget_social == 'show') :?>
                    <?php if ( have_rows('accounts', 'option')) :  ?>
                        <div class="<?php if ( get_field('сontacts_list_columns')) :?>col-sm-<?php echo $сontacts_list_columns;?><?php else:?>col-sm<?php endif;?> socaccounts_list">
                            <ul>
                                <?php while ( have_rows('accounts', 'option')) : the_row();
                                    $service = get_sub_field('service');
                                    $service_ico = get_sub_field('service_ico');
                                    $url = get_sub_field('url');
                                    ?>
                                    <li>
                                        <i class="dashicons dashicons-<?php echo $service_ico; ?>"></i>
                                        <a href="<?php echo esc_url( $url ); ?>" target="_blank"><?php echo $service; ?></a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if ( $contactswiget_adress == 'show') :?>
                    <?php if( have_rows('physical_adress', 'option')): ?>
                        <div class="<?php if ( get_field('сontacts_list_columns')) :?>col-sm-<?php echo $сontacts_list_columns;?><?php else:?>col-sm<?php endif;?> aladress_list">
                            <ul>
                                <?php while ( have_rows('physical_adress', 'option')) : the_row();
                                    $short_physical_adress = get_sub_field('short_physical_adress');
                                    $googlemaps_code = get_sub_field('googlemaps_code');
                                    ?>
                                    <li>
                                        <i class="bi bi-geo-alt-fill"></i><p><?php echo $short_physical_adress; ?></p>
                                        <?php echo $googlemaps_code; ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                <?php endif ?>

            </div>
        </div>

    <?php
}

/**
 * Info Grid Callback Function.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
function render_infogrig_block ( $block, $content = '', $is_preview = false, $post_id = 0 ) {

    $infogrig_fullwidth = get_field('infogrig_fullwidth');
    $n_columns = get_field('n_columns');

    ?>

    <div class="container is_infogrig <?php if ( $infogrig_fullwidth == 'fullwidth' ) :?>fullwidth<?php else:?>boxed<?php endif;?>">
        <div class="row">
            <?php if( have_rows('infogrid')): ?>

                <?php while ( have_rows('infogrid')) : the_row(); ?>
                <?php $background_style = get_sub_field('background');
                    $background_order = strlen($background_style);?>

                    <div class="col-sm<?php if ( get_field('n_columns')) :?>-<?php echo $n_columns; ?><?php endif;?> <?php if ($background_order > 7):?>gridorder-1<?php else:?>gridorder-2<?php endif;?>"
                        <?php if ( get_sub_field('background')) :?>style="background:<?php the_sub_field('background'); ?>;"<?php endif;?> >
                        <h3><?php the_sub_field('title'); ?></h3>
                        <div class="grid_text" ><?php the_sub_field('text'); ?></div>
                        <?php if ( get_sub_field('button')) :?><a class="readmore_btn" href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button'); ?></a><?php endif; ?>
                    </div>
                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>

    <?php
}


/**
 * Call to Action Callback Function.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
function render_calltoaction_block ( $block, $content = '', $is_preview = false, $post_id = 0 ) {

    $call_title = get_field('call_title');
    $call_text = get_field('call_text');
    $call_bg = get_field('call_bg');
    $call_fullwidth = get_field('call_fullwidth');
    ?>

    <div class="container is_calltoaction <?php if ( $call_fullwidth == 'fullwidth' ) :?>fullwidth<?php else:?>boxed<?php endif;?>"
        <?php if ( get_field('call_bg')) :?>style="background: url(<?php echo $call_bg; ?>) 50% 50%; background-size: cover;"<?php endif;?>
    >
        <div class="row">

          <div class="col-sm call_contant">
            <h3 <?php if( have_rows('call_grid')): ?>style="text-align: center;"<?php endif;?> ><?php echo $call_title; ?></h3>
            <div class="calltoaction_text"><?php echo $call_text; ?></div>

                <?php if( have_rows('call_grid')): ?>
                <div class="row call_grid">
                    <?php $itemcol = 1; ?>
                    <?php while ( have_rows('call_grid')) : the_row(); ?>
                        <div class="col-sm<?php if ( get_field('call_columns')) :?>-<?php the_field('call_columns'); ?><?php endif?>" <?php if ( get_sub_field('bg_color')) :?>style="background: <?php the_sub_field('bg_color'); ?>;"<?php endif?>>
                            <i class="grid_item"><?php echo $itemcol++;?></i>
                            <i class="arrow"></i>
                            <h3><?php the_sub_field('title'); ?></h3>
                            <div class="grid_text"><?php the_sub_field('text'); ?></div>

                        </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>

          </div>

        </div>
      </div>

    <?php
}

/**
 * Blocks Carousel Block Callback Function.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
function render_wordcarousel_block ( $block, $content = '', $is_preview = false, $post_id = 0 ) {
    ?>

    <?php if( have_rows('blocks_carousel')): ?>
    <div class="blocks_carousel" id="base">
        <?php while ( have_rows('blocks_carousel')) : the_row(); ?>
            <div class="item" style="<?php the_sub_field('styles'); ?>">
                <?php the_sub_field('item'); ?>
            </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>

<?php
}


/**
 * Testimonials Block Callback Function.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
function render_testimonials_block ( $block, $content = '', $is_preview = false, $post_id = 0 ) {
    ?>

    <div class="container is_testimonials">
        <?php if( have_rows('testimonials_block')): ?>
            <div class="testimonials_block">
                <?php while ( have_rows('testimonials_block')) : the_row(); ?>
                    <div class="item col-sm">
                        <div class="row">
                            <div class="col-sm-3" <?php if ( get_sub_field('avatar')) :?>style="background: url(<?php the_sub_field('avatar'); ?>) 50% 50% no-repeat; background-size: contain;"<?php endif;?> >
                            </div>
                            <div class="col-sm-9" >
                                <div class="testimonials_text"><?php the_sub_field('text'); ?></div>
                                <?php if ( get_sub_field('name')) :?><div class="testimonials_name"><?php the_sub_field('name'); ?></div><?php endif; ?>
                                <?php if ( get_sub_field('position')) :?> <div class="testimonials_position"><?php the_sub_field('position'); ?></div><?php endif; ?>
                                <?php if ( get_sub_field('company')) :?><div class="testimonials_company"><?php the_sub_field('company'); ?></div><?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>

<?php
}


/**
 * Testimonials Block Callback Function.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
function render_teammembers_block ( $block, $content = '', $is_preview = false, $post_id = 0 ) {

    $team_title = get_field('team_title' );
    $team_width = get_field('team_width' );
    ?>

    <div class="container is_teammembers <?php if ( $team_width == 'fullwidth' ) :?>fullwidth<?php else:?>boxed<?php endif;?>">
        <div class="row">
            <h3><?php echo $team_title;?></h3>
            <?php if( have_rows('members')): ?>

                    <?php while ( have_rows('members')) : the_row(); ?>
                        <div class="col-sm-6">
                            <div class="row" style="background:<?php the_sub_field('bacg'); ?>;">
                                <div class="col-sm members_ava">
                                    <img src="<?php the_sub_field('avatar'); ?>">
                                </div>
                                <div class="col-sm" >
                                    <div class="team_name"><?php the_sub_field('name'); ?></div>
                                    <div class="team_position"><?php the_sub_field('position'); ?></div>
                                    <a class="team_mail" href="mailto:<?php the_sub_field('mail'); ?>"><?php the_sub_field('mail'); ?></a>
                                    <a class="team_phone" href="tel:<?php the_sub_field('phone'); ?>"><?php the_sub_field('phone'); ?></a>

                                    <?php if( have_rows('social_list')): ?>
                                        <?php while ( have_rows('social_list')) : the_row(); ?>
                                            <a class="team_socialink" href="<?php the_sub_field('link'); ?>"><i class="bi bi-<?php the_sub_field('social'); ?>"></i></a>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>

<?php
}
