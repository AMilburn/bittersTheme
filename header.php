<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300|Quattrocento:400,700' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <?php wp_head(); ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>

<!-- Start of Body Styles -->

<body <?php body_class(); ?>>
  <div class="container">
    <nav class="main-nav-bar"> <!-- Start of navigation bar -->
      <div class="nav-logo"> <!-- Start of customizable logo (top left corner) -->
          <?php if ( get_theme_mod( 'bitters_logo' ) ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">             
              <img src="<?php echo get_theme_mod( 'bitters_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            </a>
            <?php else : ?>
            <h1>
              <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
                <?php bloginfo( 'name' ); ?>
              </a>
            </h1>
          <?php endif; ?> 
      </div> <!-- End of customizable logo -->
      <div class="navigation"> <!-- Start of customizable navigation -->
        <?php  wp_nav_menu(array(
          'container' => 'nav', 
          'container_id' => 'nav',
          'theme_location' => 'primary'
        ));?>
      </div> <!-- End of customizable navigation -->
    </nav> <!-- End of navigation bar -->
</div>
  



