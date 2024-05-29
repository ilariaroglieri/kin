	<?php snippet('header') ?>

	<div class="content" role="main">

		<div class="d-flex flex-row">
			<div class="d-ten-twelfth t-whole spacing-t-2">
				<p><?= $site->text()->kirbytext() ?></p>
			</div>
		</div>

		<!-- just nu -->
	  <?php 
	  	$home_events =  $site->related()->toPages();
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
		  <form class="d-flex flex-row m-column" action="https://subscribe.minutemailer.com/mKYqgEKP" method="post">
		  	<div class="d-one-third m-whole spacing-m-b-2">
			    <input type="email" name="email" aria-label="email" required aria-required="true" placeholder="<?php echo t('subscribermail'); ?>*">
			  </div>
			  <div class="d-one-third m-whole spacing-m-b-2 p-relative">
			    <input type="text" name="name" aria-label="name" required aria-required="true" placeholder="<?php echo t('subscribername'); ?>*">
			    <button class="submit p-absolute" type="submit" aria-label="Subscribe to newsletter" value="Subscribe to the newsletter">Subscribe to the newsletter</button>
		    </div>
			  <div class="d-one-third m-whole spacing-m-b-2">
			    <input type="checkbox" id="policyagree" required aria-required="true" name="policyagree" value="policyagree">
					<label class="s-regular" for="policyagree">
						<?= t('policyagreement'); ?><?php if ($p = page('integritetspolicyn')): ?>
						  <a alt="Link to <?= $p->title() ?>" href="<?= $p->url() ?>"><?= $p->title() ?></a>
						<?php endif ?>
					</label>
				</div>
			</form>
		</div>

	</div>

	<?php snippet('footer') ?>
