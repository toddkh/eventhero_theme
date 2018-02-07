<?php
/*
Template Name: Features Single
*/
?>


<section id="feature" class="hero_v3">
<img src="<?php the_field('feature_background'); ?>" class="hidden-sm hidden-xs"/>
    <div class="row hero_content">
    <div class="hero_copy col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
        <?php the_field('feature_cta'); ?>
    </div>
    <div class="hero_cta col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-3">
        <?php the_field('feature_cta', 'option'); ?>
    </div>
    </div>
        
</section>
<div id="more"></div>
<?php if(get_field('feature_have_video')): ?>
<section id="video" class="<?php the_field('video_theme'); ?>">
<div class="wrap container" role="document">

         <div class="content row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <?php the_field('feature_video_intro_text'); ?><br /><br />
<div class="embed-container">
	<?php the_field('feature_video'); ?>
</div>
            </div>
         </div>
</div>
</section>
 <?php endif; ?>
 
 <section id="highlights" class="<?php the_field('feature_theme'); ?>">
     <div class="wrap container" role="document">

         <div class="content row">
    <?php if( have_rows('feature_highlights') ):
        while ( have_rows('feature_highlights') ) : the_row(); ?>
        <div class="highlight col-xs-12 col-sm-6 col-md-4">
            <div class="well well-lg">
            <i class="feature_icon fa <?php the_sub_field('highlight_icon'); ?>"></i>
            <h3><?php the_sub_field('highlight_name'); ?></h3>
            <?php the_sub_field('highlight_description'); ?>
            </div>
        </div>

  <?php  endwhile; ?>

<?php endif; ?>
         </div>
     </div>
 </section>
 
     <?php if( have_rows('additional_details') ):
     while ( have_rows('additional_details') ) : the_row(); ?>
     
     <section id="details" class="<?php the_sub_field('detail_theme'); ?>">
     <div class="wrap container" role="document">

         <div class="content row">
     <?php the_sub_field('detail_content'); ?>
        </div>
     </div>
     </section>
     <?php  endwhile; ?>

<?php endif; ?>
    
<?php

$post_object = get_field('feature_closer');

if( $post_object ):  ?>

    <?php // override $post
	$post = $post_object;
	setup_postdata( $post ); 

	?>
    <section id="<?php the_field('section_id'); ?>" class="<?php the_field('section_theme'); ?> home" style="background-image:url('<?php the_field('section_background'); ?>')">
                   <div class="wrap container" role="document">
                        <div class="content row">
                    <a name="<?php the_field('section_anchor'); ?>"></a> 
    <div class="col-lg-12 one_section">
        <div class="section_content">
        <?php the_field('section_content'); ?>
        </div>
    </div>
                        </div><!-- /.content -->
                    </div><!-- /.wrap -->
                   </section>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>



    
               
              
              
              
             

