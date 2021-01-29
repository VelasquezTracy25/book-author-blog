<?php get_header(); ?>
  <body>
    <nav>
      <div>
        <ul id="main-menu">
            <li><a href="bloglist.php">Blog</a></li>
            <li><a href="book.php">Book</a></li>
            <div id="logo">
              <a href="index.php">
                <img
                  id="logo-img"
                  src="/img/logo.png"
                  alt="Martha Miller Writes Logo"
                />
              </a>
            </div>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
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
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
    <main>
        <h2 class="page-heading">About Martha Miller</h2>
        <div id="post-container">
            <section id="blogpost">
              <div class="card">
                <div class="card-image">
                  <img src="/img/beach-1.jpg" alt="Card Image">
                </div>
                <br>
                <div class="card-description">
                  <h3>The Introduction</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique omnis fugiat sapiente corrupti iure vitae
                    tempora magnam laboriosam eligendi voluptatem? Quisquam similique officia eum? Ullam ex iste in officia eveniet
                    blanditiis quae iure ducimus explicabo dicta molestias, reiciendis quidem unde.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique omnis fugiat sapiente corrupti iure vitae
                    tempora magnam laboriosam eligendi voluptatem? Quisquam similique officia eum? Ullam ex iste in officia eveniet
                    blanditiis quae iure ducimus explicabo dicta molestias, reiciendis quidem unde.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique omnis fugiat sapiente corrupti iure vitae
                    tempora magnam laboriosam eligendi voluptatem? Quisquam similique officia eum? Ullam ex iste in officia eveniet
                    blanditiis quae iure ducimus explicabo dicta molestias, reiciendis quidem unde.</p>
                </div>
              </div>
            </section>
      
            <aside id="sidebar">
              <h3>Sidebar Heading</h3>
              <p>Sidebar 1</p>
            </aside>
          </div>

          <?php get_footer(); ?>


    </main>
    <script src="/js/main.js"></script>
  </body>
</html>
