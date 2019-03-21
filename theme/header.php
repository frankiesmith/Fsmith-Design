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
      <div class="hamburger-wrapper">
      <a class="hamburger-icon" href="#" title="Menu">
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </a>
      </div>
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
