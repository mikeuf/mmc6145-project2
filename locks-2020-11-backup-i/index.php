<?php
/**
 * Main index for Locks template 
 */
?>

<?php get_header(); ?>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">Cash Buyouts for Estates</h1>
    <p class="lead">15 Years of Successful Estate Sales Throughout Central Florida</p>
  </div>
</div>
<div class="container">
<div class="row post-snippets">
<?php
if (have_posts()) {
	while (have_posts()) {
		the_post(); ?>
<div class="col-4 post-snippet">
<?php the_post_thumbnail('medium'); ?>
</div>
<div class="col-6 post-snippet">
<h2>
<?php echo get_the_title(); ?>
</h2>
	<p><?php echo get_the_excerpt(); ?></p>
	<a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>">Learn More</a>

</div>
<!-- end col -->
<?php 
	} // end while
} // end if
?>
</div>
<!-- end container -->
</div>
<!-- end row -->
<?php get_footer(); ?>
