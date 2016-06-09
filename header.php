<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container main-menu">
  <div class="site-branding">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>
   </div> 

    <?php wp_nav_menu( array(
      'container' => 'nav',
      'theme_location' => 'primary'
    )); ?>

    <?php wp_nav_menu( array(
      'container_class' => 'social',
      'theme_location' => 'social-links'
    )); ?>
  </div> <!-- /.container -->
</header><!--/.header-->

