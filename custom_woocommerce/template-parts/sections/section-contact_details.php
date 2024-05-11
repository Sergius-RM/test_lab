<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$domain_address = 'www.miamiagency.fi';
$link_address = 'https://miamiagency.fi';
?>


<section class="contact-page">
    <div class="container">
       <div class="contact-info-area mb-60">
           <div class="contact-info-item wow fadeInUp delay-0-2s">
               <?php if( get_sub_field('address') ): ?>
                   <i class="fas fa-map-marked-alt"></i>
                   <p><?php echo get_sub_field('address'); ?></p>
               <?php endif; ?>
           </div>
           <div class="contact-info-item wow fadeInUp delay-0-4s">
               <?php if( get_sub_field('email') ): ?>
                   <i class="fas fa-envelope"></i>
                   <p>
                       <a href="mailto:<?php echo get_sub_field('email'); ?>"><?php echo get_sub_field('email'); ?></a> <br>
                       <a href="<?php echo $link_address;?>" target="_blank"><?php echo $domain_address;?></a>
                   </p>
               <?php endif; ?>
           </div>
           <div class="contact-info-item wow fadeInUp delay-0-6s">
               <?php if( get_sub_field('phone') ): ?>
                   <i class="fas fa-phone-alt"></i>
                   <p></p>
                   <p><a href="callto:<?php echo get_sub_field('phone'); ?>"><?php echo get_sub_field('phone'); ?></a> <?php if( get_sub_field('phone_secondary') ): ?><br><a href="callto:<?php echo get_sub_field('phone_secondary'); ?>"><?php echo get_sub_field('phone_secondary'); ?></a><?php endif; ?></p>
               <?php endif; ?>
           </div>
       </div>
    </div>
</section>

