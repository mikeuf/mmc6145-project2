<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
	<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
    </head>
	    <body <?php body_class(); ?>>
<div id="header-container">
<div class="container">
<header>
<div class="row justify-content-between">
<div class="col-sm">
<?php if (get_header_image() == '') { ?>
<h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
<?php } else { ?>
<a href="<?php echo get_home_url(); ?>"><img src="<?php header_image(); ?>" id="logo" alt="Logo" /></a>
<?php } ?>
</div> 
<!-- end col -->
<div class="col-sm align-self-end">
 <div id="nav">
	      <nav class="navbar navbar-expand-md navbar-light" role="navigation">
		<div class="container">
		  <!-- Brand and toggle get grouped for better mobile display -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
		      <span class="navbar-toggler-icon"></span>
		  </button>
<?php
wp_nav_menu( array(
	'theme_location'    => 'primary',
	'depth'             => 2,
	'container'         => 'div',
	'container_class'   => 'collapse navbar-collapse',
	'container_id'      => 'bs-example-navbar-collapse-1',
	'menu_class'        => 'nav navbar-nav',
	'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
	'walker'            => new WP_Bootstrap_Navwalker(),
) );
?>
		  </div>
	      </nav>
	 </div> <!-- end nav -->
</div> <!-- end col -->
</div> <!-- end row -->
</header>
</div> <!--end container -->
</div><!--end headercontainer -->

