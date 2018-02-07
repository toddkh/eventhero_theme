<div class="partner-nav">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-8">
                <a style="margin-top:4px;font-size:19px;color:#fafafa;" href="/partners/" title="Become and EventHero Partner">EventHero Partners</a>
            </div>
            <div class="col-xs-6 col-md-4">
               <a style="margin-top:4px;" href="/partner/" title="Become and EventHero Partner" target="_blank">Become a Partner</a> | <a style="margin-top:4px;color:#eee;" href="/partner-login/" title="Login and manage EventHero Partner Account" target="_blank">Partner Login</a>
            </div>
        </div>
    </div>
</div>
<section id="partners-page" class="<?php the_field('theme'); ?>">
<div class="wrap container" role="document">
    <?php the_field('partner_description_text','option'); ?>
    <div class="col-sm-12 col-md-12 partner">
        <div class="col-sm-3 col-md-3 col-lg-2">
            <h4>Filter Partners</h4>
            <div class="filters">
  <div class="ui-group">
    <h5>Integrations:</h5>
    <div class="filter-button-group js-radio-button-group" data-filter-group="integrations">
      <button class="filter-button is-checked" data-filter="">any</button>
      <button class="filter-button" data-filter=".rest-api">Rest API</button>
      <button class="filter-button" data-filter=".webhooks">Webhooks</button>
    </div>
  </div>
  <div class="ui-group">
    <h5>Export:</h5>
    <div class="filter-button-group js-radio-button-group" data-filter-group="export">
      <button class="filter-button is-checked" data-filter="">any</button>
      <button class="filter-button" data-filter=".csv">CSV</button>
    </div>
  </div>
  <div class="ui-group">
    <h5>Licensing:</h5>
    <div class="filter-button-group js-radio-button-group" data-filter-group="licensing">
      <button class="filter-button is-checked" data-filter="">any</button>
      <button class="filter-button" data-filter=".monthly-subscription">Monthly Subscription</button>
      <button class="filter-button" data-filter=".transaction-fee">Transaction Fee</button>
    </div>
  </div>
  <div class="ui-group">
    <h5>Deployment:</h5>
    <div class="filter-button-group js-radio-button-group" data-filter-group="deployment">
      <button class="filter-button is-checked" data-filter="">any</button>
      <button class="filter-button" data-filter=".saas">SaaS</button>
      <button class="filter-button" data-filter=".self-hosted">Self Hosted</button>
    </div>
  </div>
    <div class="ui-group">
    <h5>Payment:</h5>
    <div class="filter-button-group js-radio-button-group" data-filter-group="payment">
      <button class="filter-button is-checked" data-filter="">any</button>
      <button class="filter-button" data-filter=".my-payment-processor">Use my payment processor</button>
      <button class="filter-button" data-filter=".paypal">PayPal</button>
      <button class="filter-button" data-filter=".stripe">Stripe</button>
    </div>
  </div>
        <div class="ui-group">
    <h5>Other:</h5>
    <div class="filter-button-group js-radio-button-group" data-filter-group="other">
      <button class="filter-button is-checked" data-filter="">any</button>
      <button class="filter-button" data-filter=".speaker-management">Speaker Management</button>
      <button class="filter-button" data-filter=".abstract-management">Abstract Management</button>
      <button class="filter-button" data-filter=".schedule">Scheduling</button>
      <button class="filter-button" data-filter=".event-app">Event App</button>
    </div>
  </div>
</div>
        </div>
        <div class="col-sm-9 col-md-9 col-lg-10 grid">
            <?php 
            $args = array(
                    'post_type' => 'partners',
                    'posts_per_page' => '-1',
                    'orderby' => 'name',
                    'order' => 'asc'
            );
            $the_query = new WP_Query( $args ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <div class="panel panel-default partner-panel
                                    <?php
                                        $partnerfeatures = get_field('partner_features');
                                        if( $partnerfeatures ): ?>
                                            <?php foreach( $partnerfeatures as $partnerfeature ): ?>
                                            <?php echo $partnerfeature; ?>
                            <?php endforeach; ?>
                            <?php endif; ?>">
                      <div class="panel-body">
                            <div class="partner-panel-logo"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_field('partner_image'); ?>" style="width:150px;height:auto;"/></a></div>
                            <a class="partner-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                            <p><?php the_field('partner_short_description'); ?></p>
                            <a class="btn btn-primary btn-md partner-learn-more" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Learn More</a>
                       </div>
                     </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <?php endif; ?>
    </div>
    </div>
</div>
</section>
<script src="https://unpkg.com/isotope-layout@3.0/dist/isotope.pkgd.js"></script>

<script>
        jQuery(document).ready(function(){

var $grid = $('.grid').isotope({
    itemSelector: '.partner-panel',
  layoutMode: 'masonry',
  masonry: {
        columnWidth: 280,
        gutter: 10
    }
});


// store filter for each group
var filters = {};

$('.filters').on( 'click', '.filter-button', function() {
  var $this = $(this);
  // get group key
  var $buttonGroup = $this.parents('.filter-button-group');
  var filterGroup = $buttonGroup.attr('data-filter-group');
  // set filter for group
  filters[ filterGroup ] = $this.attr('data-filter');
  // combine filters
  var filterValue = concatValues( filters );
  // set filter for Isotope
  $grid.isotope({ filter: filterValue });
});

// change is-checked class on buttons
$('.filter-button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});
  
// flatten object by concatting values
function concatValues( obj ) {
  var value = '';
  for ( var prop in obj ) {
    value += obj[ prop ];
  }
  return value;
}
});

</script>

