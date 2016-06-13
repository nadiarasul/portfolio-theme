<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

		 <div class="post-details">
		 	<div class="post-header">
				<h2 class="entry-title">
		        	<a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
		          		<?php the_title(); ?>

		        	</a>
		        </h2>	
		        <p><?php the_date(); ?></p>	 		
		 	</div>

		 <div class="post-image">
			<?php $image_id = get_post_thumbnail_id($post_id);
              	$image_url = wp_get_attachment_url($image_id);
        	?>			
			<img src="<?php echo $image_url; ?>" alt="">
		 </div>
			<div class="entry-content excerpts">
				<?php the_excerpt('Continue reading <span class="meta-nav">&rarr;</span>'); ?>
				<?php wp_link_pages( array(
		          'before' => '<div class="page-link"> Pages:',
		          'after' => '</div>'
		        )); ?>
			</div><!-- .entry-content -->
		 </div>


		</article><!-- #post-## -->
	
	<?php comments_template( '', true ); ?>

<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
