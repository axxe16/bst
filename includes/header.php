<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="fakeLoader"></div>
<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->
<?php $logo 	= get_field('logo', 'option'); ?>
<?php $fb 		= get_field('facebook', 'option'); ?>
<?php $tw 		= get_field('twitter', 'option'); ?>
<?php $ist 		= get_field('instagram', 'option'); ?>
<?php $you 		= get_field('youtube', 'option'); ?>
<div class="topWrap bgRed">
    <div class="container">
        <div class="row">
        	<div class="col-ms-2 col-md-offset-10 socalBadges">
                <?php if ($fb != '') echo '<a href="'. $fb .'" target="_blank"><i class="fa fa-facebook"></i></a>'; ?>
                <?php if ($tw != '') echo '<a href="'. $tw .'" target="_blank"><i class="fa fa-twitter"></i></a>'; ?>
                <?php if ($ist != '') echo '<a href="'. $ist .'" target="_blank"><i class="fa fa-instagram"></i></a>'; ?>
                <?php if ($you != '') echo '<a href="'. $you .'" target="_blank"><i class="fa fa-youtube"></i></a>'; ?>
            </div>
        </div>
    </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
		<?php 
		//stampo logo img se caricato altrimenti testo
		if ($logo != '') { echo '<img class="imgLogo" width="300" src="'. $logo .'">';?>
		<?php } else bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>


<nav class="navbar ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
      <?php
            wp_nav_menu( array(
                'theme_location'    => 'main-navbar',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
        <?php get_template_part('includes/navbar-search'); ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>