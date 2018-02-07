<?php while (have_posts()) : the_post(); ?>
<div class="partner-nav">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-8 col-md-offset-1">
                <a style="margin-top:4px;font-size:19px;color:#fafafa;" href="/partners/" title="Become and EventHero Partner"><i class="fa fa-arrow-left"></i> Back to Partners</a>
            </div>
            <div class="col-xs-6 col-md-3">
               <a style="margin-top:4px;" href="/partner/" title="Become and EventHero Partner" target="_blank">Become a Partner</a>
            </div>
        </div>
    </div>
</div>
<section id="page">
<div class="wrap container" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
      <div class="col-md-10 col-md-offset-1 partner">
        <div class="partner-info pull-left">
      <h2 class="partner-title"><?php the_title(); ?></h2>
      <div class="partner-logo"><img src="<?php the_field('partner_image'); ?>" style="width:300px;height:auto;"/></div>
      <p><?php the_field('partner_description'); ?></p>
        </div>
              <div class="feature-box pull-right">
        <h2>Partner Status</h2>
        <h3>EventHero Integration</h3>
        <p>Rest-API:
                    <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'rest-api', $features ) ): ?>
                        <span class="feature-yes">Yes</span></p>
                <?php else: ?>
                        <span class="feature-no">No</span></p>
                <?php endif; ?>
            <p>Webhooks:
                    <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'webhooks', $features ) ): ?>
                        <span class="feature-yes">Yes</span></p>
                <?php else: ?>
                        <span class="feature-no">No</span></p>
                <?php endif; ?>
        <p>Schedule: 
        <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'scheduling', $features ) ): ?>
                        <span class="feature-yes">Yes</span></p>
                <?php else: ?>
                        <span class="feature-no">No</span></p>
                <?php endif; ?>
        <h3>Export Data to EventHero</h3>
        <p>CSV:
        <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'csv', $features ) ): ?>
                        <span class="feature-yes">Yes</span></p>
            <?php else: ?>
                        <span class="feature-no">No</span></p>
                <?php endif; ?>
      </div>
        <div style="clear: both"></div>
               <div class="row">
            <div class="col-md-12">
                <h3><?php the_title(); ?> Features</h3>
                <ul class="partner-features">
            <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'rest-api', $features ) ): ?>
                <li class="tick">Rest-API</li>
            <?php endif; ?>
            <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'webhooks', $features ) ): ?>
                <li class="tick">Webhooks</li>
            <?php endif; ?>
            <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'schedule', $features ) ): ?>
                <li class="tick">Schedule</li>
            <?php endif; ?>
            <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'csv', $features ) ): ?>
                <li class="tick">CSV</li>
            <?php endif; ?>
            <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'saas', $features ) ): ?>
                <li class="tick">SaaS</li>
            <?php endif; ?>
            <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'self-hosted', $features ) ): ?>
                <li class="tick">Self Hosted</li>
            <?php endif; ?>
            <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'transaction-fees', $features ) ): ?>
                <li class="tick">Transaction Fees</li>
            <?php endif; ?>
            <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'monthly-subscription', $features ) ): ?>
                <li class="tick">Monthly Subscription</li>
            <?php endif; ?>
            <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'international-currency', $features ) ): ?>
                <li class="tick">International Currency</li>
            <?php endif; ?>
            <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'my-payment-processor', $features ) ): ?>
                <li class="tick">Use my payment processor</li>
            <?php endif; ?>
            <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'stripe', $features ) ): ?>
                <li class="tick">Stripe</li>
            <?php endif; ?>
            <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'paypal', $features ) ): ?>
                <li class="tick">Paypal</li>
            <?php endif; ?>
            <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'event-app', $features ) ): ?>
                <li class="tick">Event App</li>
            <?php endif; ?>
            <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'scheduling', $features ) ): ?>
                <li class="tick">Scheduling</li>
            <?php endif; ?>
            <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'speaker-management', $features ) ): ?>
                <li class="tick">Speaker Management</li>
            <?php endif; ?>
            <?php
            $features = get_field('partner_features');
            if( is_array($features) && in_array( 'abstract-management', $features ) ): ?>
                <li class="tick">Abstract Management</li>
            <?php endif; ?>
                </ul>
            </div>
      <div class="row">
        <div class="col-md-4">
          <a class="gallery" href="<?php the_field('partner_screenshot_1'); ?>"  data-rel="lightbox"><img src="<?php the_field('partner_screenshot_1'); ?>" /></a>
        </div>
        <div class="col-md-4">
          <a class="gallery" href="<?php the_field('partner_screenshot_2'); ?>"  data-rel="lightbox"><img src="<?php the_field('partner_screenshot_2'); ?>" /></a>
        </div>
        <div class="col-md-4">
          <a class="gallery" href="<?php the_field('partner_screenshot_3'); ?>"  data-rel="lightbox"><img src="<?php the_field('partner_screenshot_3'); ?>" /></a>
        </div>
      </div>

            <div class="col-md-6">
                <div class="partner-video">
                <?php if( get_field('partner_video') ): ?>
                 <?php the_field('partner_video'); ?>
                <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="partner-buttons">
                <a class="btn btn-lg btn-primary partner-button" href="/get-started/" title="Get started with EventHero and <?php the_title(); ?>">Get started with EventHero<br /> and <?php the_title(); ?></a>
                <a class="btn btn-lg btn-default partner-button" href="<?php the_field('partner_link'); ?>" title="Visit <?php the_title(); ?> Web Site">Visit <?php the_title(); ?> Web Site</a>
                </div>
            </div>
        </div>
</main>
    </div>
</div>
</section>
<?php endwhile; ?>

