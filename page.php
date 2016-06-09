<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if( have_posts() ) {
        while( have_posts() ){
          the_post();
          ?>
          <h3><?php the_title(); ?></h3>
          <?php the_content(); ?>
          <?php 
        }// closes while loop
      } //closes if statement
      ?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>