<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fivehdstarter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

  <header id="masthead" class="site-header">
    <div class="logo">
      <?php echo file_get_contents( get_template_directory() . '/img/logo.svg' ); ?>
    </div>

    <nav id="site-navigation" class="main-navigation">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'main-navigation',
        ) );
      ?>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->

  <div id="content" class="site-content">
