<?php
/**
 * Default Header Template
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="h-100">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <?php // Place favicon.ico and apple-touch-icon.png in the root of the domain ?>

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?= vite('main.js') ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class('d-flex flex-column h-100'); ?>>

<header class="site-header" role="banner">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= home_url( '/' ); ?>"><img id="navbar-logo" src="/wp-content/uploads/2022/01/logo-black.png" /></a>
      <ul class="nav justify-content-end">
        <?php h5bs_primary_nav(); ?>
      </ul>
    </div>
  </nav>
</header>
