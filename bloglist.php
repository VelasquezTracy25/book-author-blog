<?php get_header(); 
?>
  <body>
    <main>
      <h2 class="page-heading">Blogs</h2>

      <section>
      <?php 
      
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 2,
      );

      $blogposts = new WP_Query($args);

      while ($blogposts->have_posts()){
        $blogposts->the_post();
      }
      
      ?>

      <div class="card">
          <div class="card-image">
            <a href="<?php echo the_permalink(); ?>">
              <img src="<?php echo get_the_post_thumbnail_url('get_the_ID()') ?>" alt="Card Image" class="card-image" />
            </a>
          </div>
          <div class="card-description">
            <a href="<?php echo the_permalink(); ?>">
              <h3><?php echo the_title(); ?></h3>
            </a>
            <p>
            <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
            </p>
            <a href="<?php echo the_permalink(); ?>" class="btn-readmore">Read More</a>
    }
                  </div>
      </div>

    <?php wp_reset_query(); ?>
      </section>

      <div class="pagination">
          <a href="#">Prev</a>
          <a href="#">1</a>
          <a href="#">1</a>
          <a href="#">1</a>
          <a href="#">Next</a>
      </div>
      <?php get_footer(); ?>
    </main>
    <script src="/js/main.js"></script>
  </body>
</html>
