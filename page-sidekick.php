<?php
/*
Template Name: Sidekick
*/
?>

<section id="home" class="hero_v3">
<img src="<?php the_field('sidekick_hero_image', 'option'); ?>" class="hidden-sm hidden-xs"/>
    <div class="row hero_content">
    <div class="hero_copy col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1">
        <?php the_field('sidekick_hero_copy', 'option'); ?>
    </div>
    <div class="hero_cta col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 col-lg-offset-3">
        <?php the_field('sidekick_hero_cta', 'option'); ?>
    </div>
    </div>
        
</section>

<section id="testimonial" class="dark">
    <div class="wrap container" role="document">
                        <div class="content row">
                            <blockquote class="testimonial"><?php the_field('sidekick_home_testimonial', 'option'); ?></blockquote>
                            
                        </div>
    </div>
</section>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="row">
                <?php
                // WP_Query arguments
                $args = array (
                        'post_type'              => 'one_page',
                        'taxonomy' => 'one_page_page', 
                         'term' => 'sidekick', 
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
</div>
<br /><br />

<?php endwhile; ?>
<?php endif; ?>
