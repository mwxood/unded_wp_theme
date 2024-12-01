<?php

defined("ABSPATH") || exit(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="container">
      <header class="header-bg d-flex align-items-center justify-content-between">
        <a href="/">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/12/logo.svg" alt="Logo" class="logo">
        </a>
        <nav class="navigation">
          <ul class="nav d-flex">
            <li class="active"><a href="#">home</a></li>
            <li><a href="#">pages</a></li>
            <li><a href="#">portfolio</a></li>
            <li><a href="#">blog</a></li>
            <li><a href="#">contact</a></li>
          </ul>
        </nav>

        <div class="search-nav-section d-flex align-items-center justify-content-between">
          <button class="search-button">
              <img width="40" height="40" src="<?php echo get_template_directory_uri(); ?>/assets/img/search-icon.svg" alt="Search">
          </button>
          <button class="mobile-nav"><span></span></button>
        </div>
      </header>  
</div>