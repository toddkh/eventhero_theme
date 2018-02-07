 <section id="content" class="<?php the_field('blog_theme', 'option'); ?>">
<div class="wrap container" role="document">
    <div class="content row">
       <main class="main <?php echo roots_main_class(); ?>" role="main">
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
<header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">asdasdasd
      <?php if (get_field('display_fi')) 
                {
                echo the_post_thumbnail();
                 }
                 ?>
                 
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>

</main>
