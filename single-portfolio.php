<?php get_header(); ?>

	<div class="main">
		<div class="single-container container">
			<div class="content">
				<?php 
					if ( have_posts() ) {
						while (have_posts()){
							the_post();
							?>

							<div class="portfolio-entry-content">
								<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2> 

								<?php
									$url = get_field('site_link');
								    if ($url) {
										echo '<a href="'.$url.'" target="_blank"><button class="live-link">View Live Site</button></a>';
									} else {
										echo '';
									}
								?>

								  <?php the_content(); ?>
								  <?php wp_link_pages(array(
								    'before' => '<div class="page-link"> Pages: ',
								    'after' => '</div>'
								  )); ?>
								  	<div class="technologies">  
								  	<p><span class="title-medium">Technologies used:</span>
								  	    <?php 
								  	      while(has_sub_field('technologies_used')){
								  	      ?>

								  				  <?php the_sub_field('technologies')?>

								  	      <?php
								  	      } 
								  	    ?></p> 
								  	</div> 

						  		<div id="nav-below" class="navigation">
						            <p class="nav-previous"><?php previous_post_link('%link', '&larr;  Previous item: %title'); ?></p>
						            <p class="nav-next"><?php next_post_link('%link', 'Next item: %title &rarr;'); ?></p>
						          </div><!-- #nav-below -->
							</div><!-- .portfolio-entry-content -->

			</div>
		</div>
	</div>

	<div class="portfolio-main">
		<div class="single-container container">
			<div class="content">
				<div class="portfolio-entry-image">
					<?php 
						while(has_sub_field('portfolio_image')){
					?>	
					<?php 
						$workImage = get_sub_field('image');
					?>
						<img src="<?php echo $workImage['url']?>" />
					<?php
					}	
					?>
							</div>	<!-- .portfolio-entry-image -->

					<?php
					}
					}
					?>
			</div>
		</div>
		
	</div>
<?php get_footer(); ?>