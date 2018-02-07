<footer class="global dark">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
	
    
      </div>
      <div class="col-lg-4">
         
      </div>
      <div class="col-lg-4">
        
  
      </div>
      <div class="col-lg-12">
      <?php
        if (has_nav_menu('footer_main')) :
          wp_nav_menu(array('theme_location' => 'footer_main', 'menu_class' => 'footer_main'));
        endif;
      ?>
      </div>
    </div>
  

</div>
</div>
<div id="footer" role="contentinfo">
    <div class="container">
    <div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6">
	<p>
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/eventhero_logo_small.png" alt="EventHero" />
	<?php the_field('footer_address_text', 'option'); ?>
	<br /><br />
	<?php
        if (has_nav_menu('footer_sub')) :
          wp_nav_menu(array('theme_location' => 'footer_sub', 'menu_class' => 'footer_sub'));
        endif;
      ?>
	</p>

	<p style="color: #025683;">
		Proudly Powered by <a href="https://wordpress.org/" style="color:#df6314;">WordPress</a>

	</p>
  </div>
</div>
     </div>
    </div>

  </footer>

