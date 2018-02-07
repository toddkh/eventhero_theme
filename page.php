<?php while (have_posts()) : the_post(); ?>

<section id="page" class="<?php the_field('theme'); ?>">
<div class="wrap container" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
  <?php get_template_part('templates/content', 'page'); ?>
</main>
    </div>
</div>
</section>
<?php endwhile; ?>

