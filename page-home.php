<?php
/*
Template Name: Home
*/
?>


<section id="home" class="hero_v3">
<img src="<?php the_field('hero_image', 'option'); ?>" class="hidden-sm hidden-xs"/>
    <div class="hero_content">
        <div class="row">
            <div class="hero_copy col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
                <?php the_field('hero_copy', 'option'); ?>
            </div>
            <div class="hero_cta col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2">
                <?php the_field('hero_cta', 'option'); ?>
            </div>
        </div>
    </div>
        
</section>

<section id="testimonial" class="dark">
    <div class="wrap container" role="document">
                        <div class="content row">
                            <blockquote class="testimonial"><?php the_field('home_testimonial', 'option'); ?></blockquote>
                            
                        </div>
    </div>
</section>
<?php /*
<section id="about" class="yin">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="wrap container" role="document">
    <div class="content row home_sub_boxes ">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
<div class="row">
    <div class="col-lg-4 home_sub_box">
        <?php the_field('sub_box_1'); ?>
    </div>
    <div class="col-lg-4 home_sub_box">
        <?php the_field('sub_box_2'); ?>

    </div>
    <div class="col-lg-4 home_sub_box">
        <?php the_field('sub_box_3'); ?>

    </div>
</div>
    </div><!-- /.content -->
  </div><!-- /.wrap -->
  </main><!-- /.main -->
<?php endwhile; ?>
<?php endif; ?>
</section>
*/ ?>
    
                <?php
                // WP_Query arguments
                $args = array (
                        'post_type'              => 'one_page',
                        'taxonomy' => 'one_page_page', 
                         'term' => 'features', 
                        'posts_per_page'         => '-1',
                        'order'                  => 'ASC',
                        'orderby'                => 'menu_order',
                );
                
                // The Query
                $query1 = new WP_Query( $args ); ?>
                
                   <?php while ( $query1->have_posts() ) : $query1->the_post(); ?>
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
                
                <?php endwhile; ?>

              <?php  wp_reset_postdata(); ?>
              
              
              
<section id="blog" class="yang">
    <div class="wrap container" role="document">
                        <div class="content row">
                            <?php
                // WP_Query arguments
                $args = array ( 
                        'posts_per_page'         => '6'
                );
                
                // The Query
                $query1 = new WP_Query( $args ); ?>
               
                 <ul class="home_blog">
 <h1 style="text-align: center;">EventHero Blog</h1><br /><br />
                   <?php while ( $query1->have_posts() ) : $query1->the_post(); ?>
                        <li class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="well well-md">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h4><?php the_title(); ?></h4></a>
                            <time class="published" datetime="<?php echo get_the_time('c'); ?>"><strong style="color:#fff;"><?php echo get_the_date(); ?></strong></time>

                            <?php the_excerpt(); ?>
                            </div>
                        </li>
                <?php endwhile; ?>
              <?php  wp_reset_postdata(); ?>
              <a class="btn btn-success btn-lg pull-right" href="/weblog/" title="EventHero Blog">More Posts</a>
                            </ul>
                        </div>
    </div>
</section>              

