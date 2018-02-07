<?php
/*
Template Name: Subscriptions
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="row">
                <?php
                // WP_Query arguments
                $args = array (
                        'post_type'              => 'one_page',
                        'taxonomy' => 'one_page_page', 
                         'term' => 'subscriptions', 
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

<?php endwhile; ?>
<?php endif; ?>
