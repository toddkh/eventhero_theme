<?php
/*
Template Name: Gallery Archive
*/
?>
<section id="page" class="<?php the_field('general_pages_theme', 'option'); ?>">
<div class="wrap container" role="document">
    <div class="content row">
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
<div class="col-md-6">
  <article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
       <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
<hr />
</div>

<?php endwhile; ?>

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
