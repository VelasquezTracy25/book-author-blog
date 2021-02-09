<!-- About -->
<!-- Books-->

<?php get_header();

while (have_posts()) {
  the_post();

?>

  <body>
    <main>
      <h1 class="page-heading"><?php the_title(); ?></h1>
      <div id="post-container">
        <section id="blogpost">
          <div class="card">
            <?php if (has_post_thumbnail()) { ?>
              <div class="card-image">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
              </div>
            <?php } ?>
            <br>
            <div class="card-description">
              <?php echo get_the_content(); ?>
            </div>
          </div>
        </section>
      <?php } ?>
      <div id="contact-form">
        <?php 
          if ( is_page('contact')) { 
            echo do_shortcode('[contact-form-7 id="42 contact-form" title="Contact"]');
          } 
        ?>
      </div>
      <aside id="sidebar">
        <?php dynamic_sidebar('main_sidebar') ?>
      </aside>
      </div>
    </main>
    <?php get_footer(); ?>
    <script src="/js/main.js"></script>
  </body>
</html>