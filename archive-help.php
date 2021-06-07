<?php get_header(); ?>
<body class="help-docs">
  <header id="header" class="help-docs shadow" style="background-image: url('<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_image.png');">
    <div class="px-4 container-fluid container-lg">
      <a href="/"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_logo.png" alt="" class="logo mb-3"></a>
      <h1 class="mb-4">Advice and answers from the Bonjoro Team</h1>
      <div class="searchbar rounded-lg">
        <div class="search-button d-flex align-items-center justify-content-center">
          <span class="icon material-icons">
            search
          </span>
        </div>
        <input type="text" placeholder="Search for articles...">
      </div>
    </div>
  </header>
  <!--  -->
  <main>
    <section class="px-4 container-fluid container-lg">
    <?php 
    if(have_posts()) : 
      while(have_posts()) : the_post();
      ?>
      <a href="" class="question-card">
        <div class="rounded-lg question-card__inner">
          <div class="d-flex flex-column flex-sm-row">
            <div class="icon">
              <div>
                <? the_post_thumbnail(); ?>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_icon.png" alt="">
              </div>
            </div>
            <div class="content">
              <h2><?php the_title(); ?></h2>
              <p><?php the_excerpt(); ?></p>
              <div class="author d-flex">
                <div>
                  <?php echo get_avatar( get_the_author_meta( 'ID' ) , 32 ); ?>
                </div>
                <div class="pl-2 d-flex align-items-center">
                  <!-- <span class="d-block text-unmuted">7 articles in this collection</span> -->
                  <span class="d-block">Written by <span class="text-unmuted"><?php the_author(); ?></span></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
      <?php
      endwhile; 
    endif;
    ?>
    </section>
  </main>
  <!--  -->
  <footer id="footer" class="help-docs">
    <div class="container d-flex justify-content-center">
      <a href="/">
        <img class="logo" src="<?php echo get_theme_file_uri(); ?>/assets/images/placeholder_logo.png" alt="" />
      </a>
    </div>
  </footer>

  <?php get_footer(); ?>