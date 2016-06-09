<?php get_header(); ?>

	<div class="main">
		<div class="home-container">
			<div class="content">
				<?php 
					if ( have_posts() ) {
						while (have_posts()){
							the_post();
							?>	
								<article class="work">
									<div class="work-image">
										<a href="<?php the_permalink(); ?>"><img src="<?php echo get_featured_image_url($post); ?>" alt=""></a>
									</div>	

									<a href="<?php the_permalink(); ?>">
										<div class="work-overlay">
											<h2> <?php the_title(); ?></h2>
										</div>
									</a>
								</article>
								
									
							<?php
						}
					}

				 ?>

			</div>
		</div>
	</div>
<?php get_footer(); ?>