<?php get_header(); ?>

<div id="banner">
  <div class="static">
    <h1>Times New Roman</h1>
  </div>
  <div class="typing">
    <h1>Times New Roman</h1>
  </div>
  <div class="banner-text">
    <p>
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, quas
      quaerat nam eligendi fugit sed aspernatur commodi omnis quibusdam
      corrupti nostrum adipisci unde asperiores.
    </p>
    <p>
      <button class="btn-readmore banner-readmore">Learn More</button>
    <p>
  </div>
</div>
<main>
  <div class="letter">
    <h2 class="large-text circle-div">Ciao!</h2>
    <section id="paragraph" class="left-text">
      <p>
        Welcome to my website! I’m Martha Miller a former retail executive who had been downsized twice and decided to take life into my own hands. My husband and I quit our “secure” jobs in Houston to move overseas, complete an education, experience another culture, and change the course of our lives. Now I’ve published book about the experience and I’d love to share it with you!<br><br> In Times New Roman, you will learn how we decided where to go and how we funded it ourselves. Using our experiences as a backdrop, Times New Roman focuses on modern life in the Eternal City. By adapting our lifestyle, we learned how to live, eat, shop, cook and dress as the Romans do. And either through osmosis or out of necessity, we picked up some Italian behaviors we never expected. <br><br>
I hope you’ll enjoy our story and be inspired to follow your own dreams, no matter how impossible they may seem. Let me know how it goes: Martha(at)MarthaMillerWrites.com<br><br>Grazie mille,
      </p>
      <p>     
        <div>
          <img id="martha-miller-handwriting" src="<?php echo get_template_directory_uri(); ?>/img/handwriting.png" alt="Martha Miller Signature" />
        </div>
      </p> 
  </div>
  <!-- header -->
  <div class ="new-header">
  <p class="line">
  <a href="<?php echo site_url('/blog'); ?>">
    <!-- <h2 class="section-heading">Blog</h2> -->
    <h2 class="">Blog</h2>
  </a>
  <p class="line">
  </div>
  <div id="blog-section">
      <?php

      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
      );

      $blogposts = new WP_Query($args);

      while ($blogposts->have_posts()) {
        $blogposts->the_post();


      ?>

      <div class="card-home">
        <div class="card-image-home">
          <a href="<?php echo the_permalink(); ?>">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="Card Image" class="card-image" />
          </a>
        </div>
        <div class="card-description">
          <a href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
          </a>
          <p>
            <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
          </p>
          <a href="<?php the_permalink(); ?>" class="btn-readmore">Read More</a>
        </div>
      </div>

      <?php  }
      wp_reset_query(); ?>
  </div>
</main>
<?php get_footer(); ?>