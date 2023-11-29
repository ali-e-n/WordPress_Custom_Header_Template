<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 
   <?php wp_head() ?> 
</head>
<body <?php body_class(); ?>>
<header>
      
      
        <nav class="navbar navbar-expand-sm bg-light justify-content-center "> 
        <div class="container">
        <h1 class="navbar-brand">
          <a href="<?php echo site_url() ?>"><strong>Binary</strong> Colabs</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
        <diV class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav me-auto">
              <li <?php if (is_page('about-us') or wp_get_post_parent_ID(0) == 6) echo 'class="nav-link"' ?> 
              ><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
              <li <?php if (get_post_type() == 'program') echo 'class="nav-link"'?>><a href="<?php echo get_post_type_archive_link('program') ?>">Programs</a></li>
              <li <?php if (get_post_type() == 'event' OR is_page('past-events')) echo 'class="nav-link"' ?>><
              <a href="<?php echo get_post_type_archive_link('event'); ?>">Events</a></li>
              <li <?php if (get_post_type() == 'campus') echo 'class="nav-link"' ?>><a href="<?php echo get_post_type_archive_link('campus'); ?>">Campuses</a></li>
              <li <?php if (get_post_type() =='post') echo 'class="nav-link"' ?>><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
            </ul> 
          
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
        
          </div>
        </div>
      </div>
      </nav>
    </header>

