<?php get_header(); ?>
<body class="index">
  <?php get_template_part("template-parts/header/header-nav"); ?>
  <h1>archive.php</h1>
  <?php 
  if(have_posts()) : 
    while(have_posts()) : the_post();
      the_title();
      echo '<div class="entry-content">';
      the_content();
      echo '</div>';
    endwhile; 
  endif;
  ?>
  <?php get_template_part("template-parts/footer/footer-links"); ?>
  
  <?php get_footer(); ?>