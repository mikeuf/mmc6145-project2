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
<h1><a href="<?php get_home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
<?php } else { ?>
<a href="<?php get_home_url(); ?>"><img src="<?php header_image(); ?>" id="logo" alt="Logo" /></a>
<?php } ?>
</div> 
<!-- end col -->
<div class="col-sm align-self-end">
<nav>
<p>test</p>
</nav>
</div> 
<!-- end col -->
</div> 
<!-- end row -->
</header>
</div> 
<!--end container -->
</div>

<!--end headercontainer -->
