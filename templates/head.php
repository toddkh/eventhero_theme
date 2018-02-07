<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/wp-content/themes/eventherov3/assets/css/app.css">
		

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
  <script>
jQuery(document).ready(function(){
	jQuery('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    jQuerytarget = jQuery(target);

	    jQuery('html, body').stop().animate({
	        'scrollTop': jQuerytarget.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});
</script>
<!--<script type="text/javascript">(function() {var walkme = document.createElement('script'); walkme.type = 'text/javascript'; walkme.async = true; walkme.src = 'https://d3b3ehuo35wzeh.cloudfront.net/users/8939/walkme_8939_https.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(walkme, s);})();</script>--!>

	
	<?php if( is_page('request-received') || is_page('thanks-for-contacting-us')): ?>
    		<script type="text/javascript">
      var capterra_vkey = 'db035ba234841b20e30649cfcd05a260',
      capterra_vid = '2100684',
      capterra_prefix = (('https:' == document.location.protocol) ? 'https://ct.capterra.com' : 'http://ct.capterra.com');

      (function() {
      var ct = document.createElement('script'); ct.type = 'text/javascript'; ct.async = true;
      ct.src = capterra_prefix + '/capterra_tracker.js?vid=' + capterra_vid + '&vkey=' + capterra_vkey;
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ct, s);
      })();
      </script>
<?php endif; ?>
</head>
