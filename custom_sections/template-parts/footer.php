<?php
/**
 * The template for displaying footer.
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<footer id="site-footer" class="site-footer" role="contentinfo">

    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-3 site-branding">
                <?php
                    $site_name = get_bloginfo( 'name' );
                    $tagline   = get_bloginfo( 'description', 'display' ); ?>

                <?php the_custom_logo();?>
                <p><?php echo esc_html( $site_name ); ?></p>
            </div>

            <div class="col-sm-3 footer_contacts">
                <?php if (have_rows('physical_adress', 'option')) {
                    while (have_rows('physical_adress', 'option')) {
                        the_row(); ?>
                            <p ><?php the_sub_field('short_physical_adress');?></p>
                    <?php } ?>
                <?php } ?>
            </div>

            <div class="col-sm-3 footer_socials">
                <?php if ( get_field( 'facebook_link', 'option') ) :?>
                    <a href="<?php the_field('facebook_link', 'option'); ?>"><i class="fab fa-facebook-f"></i></a>
                <?php endif;?>
                <?php if ( get_field( 'linkedin_link', 'option') ) :?>
                    <a href="<?php the_field('linkedin_link', 'option'); ?>"><i class="fab fa-linkedin-in"></i></a>
                <?php endif;?>
                <?php if ( get_field( 'instagram_link', 'option') ) :?>
                    <a href="<?php the_field('instagram_link', 'option'); ?>"><i class="fab fa-instagram"></i></a>
                <?php endif;?>
            </div>

            <div class="col-sm-3 footer_ordering">
                <?php if (have_rows('topbaremails', 'option')) {
                    while (have_rows('topbaremails', 'option')) {
                        the_row(); ?>
                            <a href="<?php the_sub_field('top_bar_email_link');?>" target="_blank"><?php the_sub_field('top_bar_email');?></a>
                    <?php } ?>
                <?php } ?>
            </div>

        </div>
    </div>

</footer>
