<?php 
/*
 * posts.php
 */  

get_header(); ?>
<div class="container">
<div class="row-page">

<?php
if (have_posts()) {
	while (have_posts()) {
		the_post(); ?>
<div class="col-md-8">
	<h2><?php echo get_the_title(); ?></h2>
<?php echo get_the_content(); 
	}
}
?>

</div> <!-- end row -->
</div> <!-- end container -->

<?php get_footer(); ?>
