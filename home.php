<?php get_header(); ?>

<body class="blog">
  <?php get_template_part("template-parts/header/header-nav"); ?>
  <!--  -->
  <section class="px-4 container hero-section">
    <div class="mb-4 d-flex flex-wrap justify-content-center text-nowrap category-links">
      <!-- <a href="#" class="link-2 mx-3 b-7">PRODUCT NEWS</a>
      <a href="#" class="link-2 mx-3 b-7">SUCCESS STORIES</a>
      <a href="#" class="link-2 mx-3 b-7">GROWTH TIPS</a>
      <a href="#" class="link-2 mx-3 b-7">VIDEO TIPS</a>
      <a href="#" class="link-2 mx-3 b-7">GUIDES</a>
      <a href="#" class="link-2 mx-3 b-7">COMPARISONS</a> -->
      <?php
      $categories = get_categories( array(
          'orderby' => 'name',
          'order' => 'ASC',
          'hide_empty' => false,
      ) );
      
      foreach( $categories as $category ) {
          $category_link = sprintf( 
              '<a href="%1$s" alt="%2$s">%3$s</a>',
              esc_url( get_category_link( $category->term_id ) ),
              esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
              esc_html( $category->name )
          );
          
          echo $category_link;
      } 
      ?>
    </div>
    <div class="d-flex justify-content-center">
      <div class="subscribe-group">
        <div class="mb-1 rounded d-flex border border-secondary overflow-hidden">
          <input type="text" placeholder="Enter Email address" class="px-3 flex-grow-1 flex-shrink-1 border-0">
          <button class="btn flex-grow-0 flex-shrink-0 b-8">SUBSCRIBE</button>
        </div>
        <p class="px-4 text-center text-muted small">Receive monthly tips on how to convert more customers, tackle churn, and spark a little #CustomerDelight</p>
      </div>
    </div>
  </section>
  <!--  -->
  <section class="mt-4 container article-section">
    <div class="row">
      <?php 
      if ( have_posts() ) {
        while ( have_posts() ) { the_post(); ?>
          <div <?php post_class("col-12 col-md-6 blog-article"); ?>>
            <a href="<?php the_permalink();?>" class="d-block pb-3 mb-80">
              <span class="mb-3 d-block date b-7 text-secondary"><?php the_time("F j, Y");?></span>
              <div class="mb-3 image">
                <?php 
                if (has_post_thumbnail()) {
                  the_post_thumbnail();
                }
                ?>
                <div class="spacer"></div>
              </div>
              <div class="px-2">
                <h2 class="mb-3 b-7"><? the_title(); ?></h2>
                <p class="m-0 b-7"><? the_excerpt(); ?></p>
              </div>
            </a>
          </div>
        <?php }
      } ?>
    </div>
    <div class="d-flex pb-3">
      <a href="#" class="btn btn-secondary mx-auto b-7 btn-more">See Older Posts</a>
    </div>
  </section>
  <!--  -->
  <?php get_template_part("template-parts/footer/footer-links"); ?>
  <?php get_template_part("template-parts/floating-components/chat"); ?>
  <?php get_footer(); ?>