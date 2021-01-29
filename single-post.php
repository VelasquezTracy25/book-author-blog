<?php get_header(); ?>  
<body>
    <main>
    <?php
    while(have_posts()){
      the_post();
    ?>
        <h2 class="page-heading">Blog Post Heading</h2>
        <div id="post-container">
            <section id="blogpost">
              <div class="card">
                <div class="card-meta-blogpost">
                  Posted by <?php the_author();?> on 01/01/2018 in
                  <a href="#">Web Dev</a>
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
              <div id="comments-section">
                Comments Section
              </div>
            </section>
            <aside id="sidebar">
              <h3>Sidebar Heading</h3>
              <p>Sidebar 1</p>
            </aside>
          </div>
          <?php get_footer();?>
    </main>
    <script src="/js/main.js"></script>
  </body>
</html>
    