<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
	<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
    </head>
	    <body <?php body_class(); ?>>
<header>
<div class="container">
<div class="row">
<div class="col-lg-3">
<?php if(get_header_image() == '') {?>
<h1><a href="<?php get_home_url(); ?>"><?php bloginfo('name');?></a></h1>
<?php} else {?>
<a href="<?php get_home_url(); ?><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width; ?> alt="Logo" /></a>
<?php } ?>

</div>
<div class="col-lg-9">
<nav>
<p>navigation</p>
</nav>
</div>
</div>
</header>
