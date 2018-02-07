<?php
/*
Template Name: Features
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="row">
    <?php query_posts( array ( 
                         'post_type' => 'one_page',
                          'taxonomy' => 'one_page_page', 
                         'term' => 'features', 
                         'posts_per_page' => '-1',
                         'orderby' => 'menu_order',
                         'order'     => 'ASC'
                         ) ); ?>
                     <?php while (have_posts()) : the_post(); ?>
                     <a name="<?php the_field('section_anchor'); ?>"></a> 
    <div class="col-lg-12 one_section" style="background-image:url('<?php the_field('section_background'); ?>')">
        <div class="section_content">
        <?php the_field('section_content'); ?>
        </div>
    </div>
    <hr />
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</div>
<br /><br />

<?php endwhile; ?>
<?php endif; ?>
