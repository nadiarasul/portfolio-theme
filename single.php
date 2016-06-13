<?php get_header(); ?>

<div class="main">
  <div class="container container-single">
    <div class="content post-content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          

          <div class="post-header">
            <h2 class="entry-title">
                  <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                      <?php the_title(); ?>

                  </a>
                </h2> 
                <p><?php the_date(); ?></p>     
          </div>
          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="entry-utility">
            <?php hackeryou_posted_in(); ?>
            <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="post-navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; Previous post: %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', 'Next post: %title &rarr;'); ?></p>
        </div><!-- #nav-below -->
  
         <?php comments_template( '', true ); ?>
             
      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>