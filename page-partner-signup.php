<?php while (have_posts()) : the_post(); ?>
<div class="partner-nav">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-8 col-md-offset-1">
                <a style="margin-top:4px;font-size:19px;color:#fafafa;" href="/partners/" title="Become and EventHero Partner"><i class="fa fa-arrow-left"></i> Partner Listing</a>
            </div>
            <div class="col-xs-6 col-md-3">
               <a style="margin-top:4px;" href="/partner-login/" title="Login and manage EventHero Partner Account" target="_blank">Partner Login</a>
            </div>
        </div>
    </div>
</div>
<section id="page">
<div class="wrap container" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
     <?php the_content(); ?>

</main>
    </div>
</div>
</section>
<?php endwhile; ?>

