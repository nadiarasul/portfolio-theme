<?php get_header();  ?>

<div class="header-image">
	<div class="main">
		<div class="container">
		    <div class="content home-header">
			    <div class="home-text"> 
			      <?php // Start the loop ?>
			      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			        <?php the_content(); ?>
			       <a href="<?php the_field('more_info')?>"><p class="more">More Info +</p></a>
			      <?php endwhile; // end the loop?>
			    </div> 
		    	<a data-scroll href="#portfolio">
					<div class="bounce"> 
			    		<img src="wp-content/themes/custom_portfolio/images/arrow.png">
					</div>	
				</a>	
		    </div> <!-- /.content -->
		</div> 
	</div>
</div>

<div class="main">
  <div class="home-container">    
		<div class="home-portfolio clearfix" id="portfolio">
         <?php 
            $workArgs = array(
              'post_type' => 'portfolio',
              'posts_per_page' => 12,
              );
            $workQuery = new WP_Query($workArgs);
            if( $workQuery->have_posts() ){
              while( $workQuery->have_posts() ){
                $workQuery->the_post();
                ?>
			<article class="work">
				<a href="<?php the_permalink(); ?>">
					<div class="work-image">
						<img src="<?php echo get_featured_image_url($post); ?>" alt="">
					</div>	
					<div class="work-overlay">
						<h2><?php the_title(); ?></h2>
						<p><?php the_field('work_tagline')?></p>
					</div>
				</a>
			</article>
            <?php
              }
            }
            wp_reset_postdata();
         ?> 
	  </div>	

  </div> <!-- /.container -->
</div> <!-- /.main -->

<section class="skills">
	<div class="container">
		<div class="skill-icons clearfix">	
			<h2>Skills</h2>
		    <?php 
		      while(has_sub_field('skills')){
		      ?>
		      	<div class="skill">  
					<div class="icon">
			          <?php the_sub_field('skill')?>
		    		</div>
					  <p><?php the_sub_field('skill_title')?></p>		
				 </div> 

		      <?php
		      } 
		    ?>
		</div>
	</div>
</section>	

<section class="contact">
	<div class="container">
		<div class="content">
			<div class="contact-details">
			<h2>Get in touch</h2>
			<p><?php the_field('contact_info') ?></p>
		</div>		
	</div>
</section>


<?php get_footer(); ?>