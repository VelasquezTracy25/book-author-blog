<!-- NEWS -->

<?php get_header(); ?>

<body>
    <main>
      <a href="<?php echo site_url('/blog'); ?>">
        <h2 class="section-heading">Page Title</h2>
      </a>

      <section>

      <?php

      while (have_posts()){
        the_post();
      ?>

      <div class="card">
          <div class="card-image">
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
      <!-- <section id="source-section">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente
          laboriosam labore sit, odio iste, rerum officiis et soluta quis magni
          aliquid maxime nemo, aut ullam recusandae architecto eos. Laboriosam,
          debitis?Dolorum enim beatae blanditiis suscipit sapiente sit
          laudantium accusantium cumque deserunt hic error, quod adipisci
          reiciendis id velit iusto, quaerat eaque fugiat doloribus. Amet
          architecto vel sunt. Provident, perferendis laudantium.
        </p>
      </section> -->
      </main>
    <?php get_footer(); ?>

</body>
