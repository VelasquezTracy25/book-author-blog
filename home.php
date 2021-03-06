<!-- Blogs Index -->
<?php get_header(); ?>

    <main>
    <h1 class="page-heading">All Blogs</h1>

      <section>
      <?php

      while (have_posts()){
        the_post();
      ?>
      
        <div class="card">
            <div class="card-image" style="margin-top: 15px;">
              <a href="<?php echo the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="Card Image" class="card-image" />
              </a>
            </div>
            <div class="card-description">
              <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
              </a>
              <div class="card-meta">
              <?php the_time('F j, Y'); ?> in <a href="#"><?php echo get_the_category_list(',')?></a>
              </div>
              <p>
              <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
              </p>
              <a href="<?php the_permalink(); ?>" class="btn-readmore">Read More</a>
              </div>
        </div>
        <?php  } wp_reset_query(); ?>
      </section>
      <div class="pagination">
        <?php echo paginate_links(); ?>
      </div>
      </main>
      <?php get_footer(); ?>
