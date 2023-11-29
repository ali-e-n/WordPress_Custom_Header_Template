<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <?php wp_head(); ?>

  <style>
  .navbar-brand a {
    text-decoration: none;
    color: inherit; /* Inherit the color from its parent */
  }

  .navbar-brand a:hover,
  .navbar-brand a:focus {
    text-decoration: none;
    color: inherit; /* Inherit the color from its parent */
  }
</style>

</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
  <div class="container-fluid">
    <h1 class="navbar-brand">
      <a href="<?php echo esc_url(home_url('/')); ?>"><strong>Binary</strong> Colabs</a>
    </h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="mynavbar">
      <ul class="navbar-nav">
        <li <?php if (is_page('about-us') || wp_get_post_parent_ID(0) == 6) echo 'class="nav-item active"' ?>><a class="nav-link" href="<?php echo esc_url(site_url('/about-us')); ?>">About Us</a></li>
        <li <?php if (get_post_type() == 'program') echo 'class="nav-item active"' ?>><a class="nav-link" href="<?php echo esc_url(get_post_type_archive_link('program')); ?>">Programs</a></li>
        <li <?php if (get_post_type() == 'event' || is_page('past-events')) echo 'class="nav-item active"' ?>><a class="nav-link" href="<?php echo esc_url(get_post_type_archive_link('event')); ?>">Events</a></li>
        <li <?php if (get_post_type() == 'campus') echo 'class="nav-item active"' ?>><a class="nav-link" href="<?php echo esc_url(get_post_type_archive_link('campus')); ?>">Campuses</a></li>
        <li <?php if (get_post_type() == 'post') echo 'class="nav-item active"' ?>><a class="nav-link" href="<?php echo esc_url(site_url('/blog')); ?>">Blog</a></li>
      </ul>
      </div><!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <?php wp_head(); ?>

  <style>
  .navbar-brand a {
    text-decoration: none;
    color: inherit; /* Inherit the color from its parent */
  }

  .navbar-brand a:hover,
  .navbar-brand a:focus {
    text-decoration: none;
    color: inherit; /* Inherit the color from its parent */
  }
</style>

</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
  <div class="container-fluid">
    <h1 class="navbar-brand">
      <a href="<?php echo esc_url(home_url('/')); ?>"><strong>Binary</strong> Colabs</a>
    </h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="mynavbar">
      <ul class="navbar-nav">
        <li <?php if (is_page('about-us') || wp_get_post_parent_ID(0) == 6) echo 'class="nav-item active"' ?>><a class="nav-link" href="<?php echo esc_url(site_url('/about-us')); ?>">About Us</a></li>
        <li <?php if (get_post_type() == 'program') echo 'class="nav-item active"' ?>><a class="nav-link" href="<?php echo esc_url(get_post_type_archive_link('program')); ?>">Programs</a></li>
        <li <?php if (get_post_type() == 'event' || is_page('past-events')) echo 'class="nav-item active"' ?>><a class="nav-link" href="<?php echo esc_url(get_post_type_archive_link('event')); ?>">Events</a></li>
        <li <?php if (get_post_type() == 'campus') echo 'class="nav-item active"' ?>><a class="nav-link" href="<?php echo esc_url(get_post_type_archive_link('campus')); ?>">Campuses</a></li>
        <li <?php if (get_post_type() == 'post') echo 'class="nav-item active"' ?>><a class="nav-link" href="<?php echo esc_url(site_url('/blog')); ?>">Blog</a></li>
      </ul>
      </div><!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <?php wp_head(); ?>

  <style>
  .navbar-brand a {
    text-decoration: none;
    color: inherit; /* Inherit the color from its parent */
  }

  .navbar-brand a:hover,
  .navbar-brand a:focus {
    text-decoration: none;
    color: inherit; /* Inherit the color from its parent */
  }
</style>

</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
  <div class="container-fluid">
    <h1 class="navbar-brand">
      <a href="<?php echo esc_url(home_url('/')); ?>"><strong>Binary</strong> Colabs</a>
    </h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="mynavbar">
      <ul class="navbar-nav">
        <li <?php if (is_page('about-us') || wp_get_post_parent_ID(0) == 6) echo 'class="nav-item active"' ?>><a class="nav-link" href="<?php echo esc_url(site_url('/about-us')); ?>">About Us</a></li>
        <li <?php if (get_post_type() == 'program') echo 'class="nav-item active"' ?>><a class="nav-link" href="<?php echo esc_url(get_post_type_archive_link('program')); ?>">Programs</a></li>
        <li <?php if (get_post_type() == 'event' || is_page('past-events')) echo 'class="nav-item active"' ?>><a class="nav-link" href="<?php echo esc_url(get_post_type_archive_link('event')); ?>">Events</a></li>
        <li <?php if (get_post_type() == 'campus') echo 'class="nav-item active"' ?>><a class="nav-link" href="<?php echo esc_url(get_post_type_archive_link('campus')); ?>">Campuses</a></li>
        <li <?php if (get_post_type() == 'post') echo 'class="nav-item active"' ?>><a class="nav-link" href="<?php echo esc_url(site_url('/blog')); ?>">Blog</a></li>
      </ul>
      </div>
      <div class="site-header__util ms-auto">
        <a href="#" class="btn btn-outline-info">Login</a>
        <a href="#" class="btn btn-outline-info">Sign Up</a>
        <span class="search-trigger js-search-trigger ms-2"><i class="fa fa-search" aria-hidden="true"></i></span>
      </div>
    
  </div>
</nav>



      <div class="site-header__util ms-auto">
        <a href="#" class="btn btn-outline-info">Login</a>
        <a href="#" class="btn btn-outline-info">Sign Up</a>
        <span class="search-trigger js-search-trigger ms-2"><i class="fa fa-search" aria-hidden="true"></i></span>
      </div>
    
  </div>
</nav>

      <div class="site-header__util ms-auto">
        <a href="#" class="btn btn-outline-info">Login</a>
        <a href="#" class="btn btn-outline-info">Sign Up</a>
        <span class="search-trigger js-search-trigger ms-2"><i class="fa fa-search" aria-hidden="true"></i></span>
      </div>
    
  </div>
</nav>


