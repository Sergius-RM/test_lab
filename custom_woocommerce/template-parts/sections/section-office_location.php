<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$location = get_sub_field('google_map');
$mapicon = get_sub_field('map_icon');

if( $location ) {

    // Loop over segments and construct HTML.
    $address = '';
    foreach( array('street_number', 'street_name', 'city', 'state', 'post_code', 'country') as $i => $k ) {
        if( isset( $location[ $k ] ) ) {
            $address .= sprintf( '<span class="segment-%s">%s</span>, ', $k, $location[ $k ] );
        }
    }

    // Trim trailing comma.
    $address = trim( $address, ', ' );

    // Display HTML.
    // echo '<p>' . $address . '.</p>';
}
?>

<div class="contact-page-map">
    <?php if( $location ): ?>
        <div class="our-location acf-map" data-zoom="14">
            <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>" data-icon="<?php echo $mapicon['url']; ?>"></div>
        </div>
    <?php endif; ?>
</div>



