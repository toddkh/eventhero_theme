<section id="page" class="yang">
<div class="wrap container" role="document">
    <div class="content row">
<?php while (have_posts()) : the_post(); ?>
  
  <article <?php post_class(); ?>>

    <div class="entry-content">
      
			<div class="superpower">
			      <?php
			      $post = get_field('superpower_service_1');
			      $service1_title = get_the_title();
			      $service1_logo = get_field('service_logo');
			      $service1_about = get_field('service_about');
			      wp_reset_postdata();
			      $post = get_field('superpower_service_2');
			      $service2_title = get_the_title();
			      $service2_logo = get_field('service_logo');
			      $service2_about = get_field('service_about');
			      ?>
			      <h1><?php the_field('page_title', 'option'); ?></h1>
			      <div class="powers">
			      <div class="power_1">
			      <img src="<?php echo $service1_logo; ?>" />
			      </div>
			      <div class="plus">
			      <div class="icon-plus plus"></div></div>
			      <div class="power_2">
			      <img src="<?php echo $service2_logo; ?>" />
			      </div>
			      </div>
			      <div class="explainer">
				    <h3>EventHero makes different apps that you use, like <?php echo $service1_title; ?> & <?php echo $service2_title; ?> work together.</h3>
			      </div>
			      
				   
			</div>
			<hr>
			      <div class="about_services row">
				    <div class="col-md-4 col-md-offset-2">
					  <h4>About <?php echo $service1_title; ?></h4>
					  <?php echo $service1_about; ?>
				    </div>
				    <div class="col-md-4 col-md-offset-1">
					  <h4>About <?php echo $service2_title; ?></h4>
					  <?php echo $service2_about; ?>
				    </div>
				
			      </div>
			     			       <hr>
							    
			      <div class="bottom_explainer row">
				    <div class="col-md-10 col-md-offset-1">
				    <?php the_field('explainer_text', 'option'); ?>
				    </div>
			      </div>

			 <?php /* <div class="superhero_form row">
			      
			      <div class="col-md-6 col-md-offset-3">
					  <?php 
                                    $form = get_field('superpower_form', 'option');
                                    gravity_form_enqueue_scripts($form->id, true);
                                    gravity_form($form->id, false, false, false, '', false, 1); 
                                ?>
			      </div>
			</div> */ ?>
			
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
    </div>
</div>
</section>
