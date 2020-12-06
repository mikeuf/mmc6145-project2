<?php
/**
 * single.php - template for displaying pages and posts
 */

get_header(); ?>
	<div class="container">

	<div class="row-single">

<?php
if (have_posts()) {
	while(have_posts()) {
		the_post(); ?>
		<div class="col-md-8">
			<h2><?php echo get_the_title(); ?></h2>
<?php echo get_the_content(); ?>
			</div>
<?php } 
 } ?>

    </div>
</div>
<?php get_footer(); ?>

