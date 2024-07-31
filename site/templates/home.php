	<?php snippet('header') ?>

	<div class="content" role="main">

		<div class="d-flex flex-row">
			<div class="d-ten-twelfth t-whole spacing-t-2">
				<p><?= $site->text()->kirbytext() ?></p>
			</div>
		</div>

		<!-- selected events: see site.yml -->
	  <?php 
	  	// in frontend ended events will be hidden
	  	$archiveTime = 'ended';
	  	$home_events =  $site->related()->toPages()->filterBy('eventStateInTime', '!=', $archiveTime);;

	  	if ( $home_events->count() > 0): 
	  ?>

	  	<div class="d-flex flex-row">
	  		<div class="d-whole spacing-t-2">
	  			<p class="bold s-big spacing-b-2" role="heading"><?php echo t('ongoing'); ?></p>
	  		</div>
	  	</div>
	  	<div class="d-flex flex-row wrap m-column">
			  <?php foreach($home_events as $event): 
			  	snippet('event-module', array('event' => $event));
				endforeach; ?>
	    </div>

	  <?php else: ?>

	  	<div class="d-flex flex-row">
	  		<div class="d-whole spacing-t-2">
	  			<p class="spacing-b-2" role="heading"><?= t('no-event'); ?></p>
	  		</div>
	  	</div>
	  	
	  <?php endif; ?>

	  <div class="d-flex flex-row">
  		<div class="d-whole spacing-t-2">
  			<p class="bold s-big spacing-b-2" role="heading"><?php echo t('newsletter'); ?></p>
  		</div>
  	</div>
	  <div class="newsletterform spacing-m-b-4">
		 	<form action="https://kinmuseum.us17.list-manage.com/subscribe/post?u=f45fbdf5365540ac788f7e778&amp;id=10e8d16d74&amp;f_id=004bf3e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self" novalidate="">
        <div id="mc_embed_signup_scroll" class="d-flex flex-row m-column">
          <div class="mc-field-group d-three-twelfth m-whole spacing-m-b-2">
          	<input type="email" name="EMAIL" required aria-required="true" id="mce-EMAIL" placeholder="<?php echo t('subscribermail'); ?>*" value=""></div>
          <div class="mc-field-group d-three-twelfth m-whole spacing-m-b-2">
          	<input type="text" name="FNAME" placeholder="<?php echo t('subscribername'); ?>*" id="mce-FNAME" value="">
          </div>
          <div class="mc-field-group d-three-twelfth m-whole spacing-m-b-2 p-relative">
          	<input type="text" name="LNAME" placeholder="<?php echo t('subscribersurname'); ?>*" id="mce-LNAME" value="">
        		<button class="submit p-absolute" type="submit" aria-label="Subscribe to newsletter" value="Subscribe to the newsletter">Subscribe to the newsletter</button>
          </div>
          <div class="d-three-twelfth m-whole spacing-m-b-2">
				    <input type="checkbox" id="policyagree" required aria-required="true" name="policyagree" value="policyagree">
						<label class="s-regular" for="policyagree">
							<?= t('policyagreement'); ?><?php if ($p = page('integritetspolicyn')): ?>
							  <a alt="Link to <?= $p->title() ?>" href="<?= $p->url() ?>"><?= $p->title() ?></a>
							<?php endif ?>
						</label>
					</div>
	        <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display: none;"></div>
            <div class="response" id="mce-success-response" style="display: none;"></div>
        	</div>
        	<div aria-hidden="true" style="position: absolute; left: -5000px;">
        		<input type="text" name="b_f45fbdf5365540ac788f7e778_10e8d16d74" tabindex="-1" value="">
        	</div>
    		</div>
			</form>
		</div>

	</div>

	<?php snippet('footer') ?>
