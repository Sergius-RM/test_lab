<?php
/**
 * Template Name: Blog
 *
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<main role="main">
   
    <div class="page-content">
	
       <div class="container">
		<div class="row">
			<div class="header_title_wrap">
				<h1><?php echo single_cat_title( '', 0); ?></h1>
			</div>
		</div>
        </div>
<?php $posts = get_posts ("category=11&orderby=date&numberposts=10"); ?> 
<?php if ($posts) : ?>
<?php foreach ($posts as $post) : setup_postdata ($post); ?>
 
    <div class="block">
	<?php the_post_thumbnail(); ?>
        <div class="name"> 
            <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a> 
		<p class="post_date"><?php the_time('j F Y'); ?> p., <?php the_time('G:i'); ?></p>
						<p class="post_excerpt"><?php the_excerpt(); ?></p>
        </div>
    </div>
 
<?php endforeach; ?>
<?php endif; ?> 
	   
    </div>

</main>

<?php get_footer(); ?>
