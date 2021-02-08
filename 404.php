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
        <li>
          <a href="<?php echo site_url('/blog'); ?>" <?php if (get_post_type() == 'post') echo 'class="active"' ?>>Blog</a>
        </li>
        <li>
          <a href="<?php echo site_url('/book'); ?>" <?php if (is_page('about')) echo 'class="active"' ?>>Book</a>
        </li>
        <li>
          <div id="logo">
            <a href="<?php echo site_url(''); ?>" <?php if (is_front_page()) echo 'class="active"' ?>>
              <img id="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Martha Miller Writes Logo" />
            </a>
          </div>
        </li>
        <li>
          <a href="<?php echo site_url('/about'); ?>" <?php if (is_page('about')) echo 'class="active"' ?>>About</a>
        </li>
        <li><a href="<?php echo site_url('/contact'); ?>" <?php if (is_page('contact')) echo 'class="active"' ?>>Contact</a>
        </li>
      </ul>
    </div>
    <!-- mobile -->
    <div id="menu-icon">
      <i class="fas fa-bars"></i>
    </div>
    <ul id="slideout-menu">
      <li><a href="<?php echo site_url(''); ?>">Home</a>
      <li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
      <li><a href="<?php echo site_url('/book'); ?>">Book</a></li>
      <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
      <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
    </ul>
  </nav>
<div id="banner">
<div class="banner-text">
    <h2 class="page_heading">Uh-oh! 404?</h2>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/lost-in-desert.jpg" alt="Person walking in the desert" width="100%" height="600px"/>
</div>
<footer>
            <div id="left-footer">
                <h3>Quick Links</h3>
                <p>
          <ul>
          <li><a href="<?php echo site_url(''); ?>">Home</a>
          <li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
          <li><a href="<?php echo site_url('/book'); ?>">Book</a></li>
          <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
          <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
          </ul>
        </p>
    </div>
        <div id="right-footer">
            <h3>Follow me on</h3>
                <div id="social-media-footer">
          <ul>
            <li>
              <a href="#">
                <i class="fab fa-linkedin"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
          </ul>
        </div>
        <?php wp_footer(); ?>
      </footer>
      <p id="footer-fine-print">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti iste
          modi unde vero delectus! 2021 &#169
      </p>
    <script src="main.js"></script>
  </body>
</html>