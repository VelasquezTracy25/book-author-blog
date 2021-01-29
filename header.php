<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
  </head>
  <body>
    <nav>
      <div>
        <ul id="main-menu">
          <li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
          <li><a href="<?php echo site_url('/book'); ?>">Book</a></li>
          <div id="logo">
            <a href="<?php echo site_url(''); ?>">
              <img
                id="logo-img"
                src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
                alt="Martha Miller Writes Logo"
              />
            </a>
          </div>
          <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
          <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
        </ul>
      </div>
      <!-- mobile -->
      <div id="menu-icon">
        <i class="fas fa-bars"></i>
      </div>
      <ul id="slideout-menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="bloglist.php">Blog</a></li>
        <li><a href="book.php">Book</a></li>
        <li><a href="page-about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>