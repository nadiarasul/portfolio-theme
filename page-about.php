
<?php get_header();  ?>

<div class="about-main">
  <div class="about-header" style="background: url('<?php echo get_featured_image_url($post); ?>') center top no-repeat; background-size:cover;">
  </div>
  <div class="container about-container clearfix">
    <div class="about-headshot">
        <?php
         $portfolioImage = get_field('headshot');
        ?>
        <img src="<?php echo $portfolioImage['url']?>" /> 
        <p class="credit"><?php the_field('photo_credit')?></p> 
    </div>
    <div class="about-content">
      <?php // Start the loop ?>
      <?php if( have_posts() ) {
        while( have_posts() ){
          the_post();
          ?>
          <div class="about-tagline">
           <h2><?php the_field('tagline')?></h2> 
          </div>
          <?php the_content(); ?>
          <?php 
        }// closes while loop
      } //closes if statement
      ?>
    <div class="process">  
        <?php 
          while(has_sub_field('process')){
          ?>  
          <div class="process-step">
            <div class="process-num"> 
              <h2><?php the_sub_field('process_number')?></h2>
            </div>
            <div class="process-info">
              <h2><?php the_sub_field('process_title')?></h2> 
              <p><?php the_sub_field('process_description')?></p>    
            </div>
          </div>
          <?php
          } 
        ?>
      </div>

    </div> <!-- /,content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>