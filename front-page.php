<?php get_header();  ?>

<div class="header-image">
	<div class="main">
		<div class="container">
		    <div class="content home-header">
			    <div class="home-text"> 
			      <?php // Start the loop ?>
			      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			        <?php the_content(); ?>
			       <p class="more"><a href="<?php the_field('more_info')?>">More Info +</a></p>
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

<div class="portfolio-main">
  <div class="portfolio-container" id="portfolio">    
 		<h2 class="section-title">Portfolio</h2> 
		<div class="portfolio-items">		
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
					<div class="work-title">
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
		<div class="content">	
			<h2>Skills & Tools</h2>
			<div class="skills-tools clearfix">
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
	</div>
</section>	

<section class="contact">
	<div class="container">
		<div class="content">
			<h2>Get in Touch</h2>
			<p><?php the_field('contact_info') ?></p>
		</div>		
		<div class="contact-form">
			<form action="http://www.focuspocus.io/magic/d159296357e04e5248b1efb4d76227d8" method="POST" enctype="multipart/form-data">
			<fieldset class="clearfix">
				<div class="form-inputs">
				<div class="name">
				  <label for="fullName">Full Name</label>
				  <input type="text" name="Full Name" id="fullName">
				 </div>
				 <div class="email"> 
				  <label for="email">Email</label>
				  <input type="email" name="Email" id="email">
				 </div> 
				</div>  
				<div class="message">
					<div class="comment">
						<label for="message">Message</label>
						<textarea name="Message" id="message" rows="5"></textarea>
					 </div> 
					 <div class="submit">
				  		<input type="submit" value="Send">
				  	</div>
			  	</div>
			  </fieldset>	
			</form>
		</div>
	</div>
</section>


<?php get_footer(); ?>