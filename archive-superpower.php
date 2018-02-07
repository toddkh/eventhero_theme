<section id="page" class="<?php the_field('general_pages_theme', 'option'); ?>">
<div class="wrap container" role="document">
    <div class="content row">
<h3>Superpowers:</h3>
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>
<ul>
 
      <?php query_posts( array ( 
                         'post_type' => 'superpower',  
                         'posts_per_page' => '-1',
                         'orderby' => 'name',
                         'order' => 'ASC'
                         ) ); ?>
                     <?php while (have_posts()) : the_post(); ?>
    <li class="col-md-3" style="padding:8px;text-align: center;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;background:#005785;float: left;margin-right:10px;margin-bottom:10px;list-style: none;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

<?php endwhile; ?>
</ul>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
    </div>
</div>
</section>
