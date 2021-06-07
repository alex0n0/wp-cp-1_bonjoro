<?php get_header(); ?>

<body class="blog-page">
  <?php get_template_part("template-parts/header/header-nav"); ?>
  <!--  -->
  <section class="px-4 container hero-section">
    <div class="content">
      <div class="mb-4 breadcrumb-links">
        <a href="/blog" class="link-2">BLOG</a>
        <?php
        $articleid;
        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post(); 
            $articleid = get_the_ID();
            echo get_the_category_list();
          }
        }
        wp_reset_postdata();
        ?>
      </div>
      <div class="mx-auto">
        <?php 
          if ( have_posts() ) {
          while ( have_posts() ) {
            the_post();
            ?>
            <div class="mb-5 featured-image">
              <?php if (has_post_thumbnail()) {
                  the_post_thumbnail();
              } ?>
              <div class="spacer"></div>
            </div>

            <h1 class="mb-3 text-center b-7"><?php the_title(); ?></h1>
            <div class="d-flex justify-content-center author">
              <div>
                <?php echo get_avatar( get_the_author_meta( 'ID' ) , 40 ); ?>
                <a href="" class="link-1 b-7"><?php the_author(); ?></a>
                wrote this on <?php the_time("F j, Y"); ?>
              </div>
            </div>
          <?php }
        }
        wp_reset_postdata(); ?>

      </div>
    </div>
  </section>
  <!--  -->
  <section class="px-4 container post-section">
    <div class="mt-5 content">
      <?php if ( have_posts() ) {
        while ( have_posts() ) {
          the_post(); 
          the_content();
        }
      }
      wp_reset_postdata(); ?>
    </div>

    <div class="mt-5 content author-section">
      <div class="d-flex flex-column align-items-center">
      <p class="mb-2 text-muted">About the author</p>
        <?php if ( have_posts() ) {
          while ( have_posts() ) {
            the_post(); 
            echo get_avatar( get_the_author_meta( 'ID' ) , 100 ); ?>

            <a href="" class="link-1 b-7"><?php the_author(); ?></a>
            <p class="alias"><?php echo get_the_author_meta( 'description' ); ?></p>
          <?php }
        }
        wp_reset_postdata(); ?>
      </div>
    </div>

    <div class="mt-4 content other-articles">
      <?php
        $other_posts = new WP_Query( array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'post__not_in' => array($articleid)
        ) );
        if ($other_posts -> have_posts() ) { ?>
          <h2 class="mb-3 b-7">You might also like:</h2>
            <div class="container-fluid">
              <div class="row">
        <?php }
            while ( $other_posts -> have_posts() ) { $other_posts -> the_post(); ?>
              <div class="mb-3 col-12 col-lg-4 text-center">
                <a href="<?php the_permalink(); ?>" class="d-block">
                  <div class="mb-2 article-image mx-auto">
                    <?php the_post_thumbnail(); ?>
                    <div class="spacer"></div>
                  </div>
                  <h3 class="b-7"><?php the_title();?></h3>
                </a>
              </div>
            <?php }
            wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
    <div class="mt-60 pb-5 content">
      <div class="d-flex justify-content-center">
        <div class="subscribe-group">
          <div class="mb-1 rounded d-flex border border-secondary overflow-hidden">
            <input type="text" placeholder="Enter Email address" class="px-3 flex-grow-1 flex-shrink-1 border-0">
            <button class="btn flex-grow-0 flex-shrink-0 b-8">SUBSCRIBE</button>
          </div>
          <p class="px-4 text-center text-muted small">Receive monthly tips on how to convert more customers, tackle churn, and spark a little #CustomerDelight</p>
        </div>
      </div>
    </div>
  </section>
  <!--  -->

  <div class="social-media-panel">
    <span class="small my-3 d-block">SHARES</span>
    <button class="btn tw rounded-0"><i class="fab fa-twitter"></i></button>
    <button class="btn fb rounded-0"><i class="fab fa-facebook-f"></i></button>
    <button class="btn lk rounded-0"><i class="fab fa-linkedin-in"></i></button>
  </div>
  <!--  -->
  <?php get_template_part("template-parts/footer/footer-links"); ?>
  <?php get_template_part("template-parts/floating-components/chat"); ?>
  <?php get_template_part("template-parts/floating-components/mailing-list"); ?>
  <?php get_footer(); ?>