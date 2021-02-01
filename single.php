<!-- Single Blog Post -->

<?php get_header(); ?>  

    <?php
    while(have_posts()){
      the_post();
    ?>

<body>
    <main>
        <h2 class="page-heading"><?php the_title()?></h2>
        <div id="post-container">
            <section id="blogpost">
              <div class="card">
                <div class="card-meta-blogpost">
                  Posted on <?php the_time('F j, Y'); ?> in <a href="#"><?php echo get_the_category_list(',')?></a>
                </div>
                <div class="card-image">
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="Card Image">
                </div>
                <br>
                <div class="card-description">
                  <h3><?php the_title();?> </h3>
    <?php } the_content();?>
                </div>
    </div>
            </section>
            <aside id="sidebar">
              <?php dynamic_sidebar('main_sidebar'); ?>
            </aside>
          </div>
          <?php get_footer();?>
    </main>
    <script src="/js/main.js"></script>
  </body>
</html>
    