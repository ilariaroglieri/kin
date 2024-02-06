	<?php snippet('header') ?>

	<?php 
		$introtxt = $page->text()->kirbytext(); 
	?>


	<div class="content">

		<div class="d-flex flex-row">
			<div class="d-two-thirds spacing-t-2">
				<p><?= $page->text()->kirbytext() ?></p>
			</div>
		</div>

		<!-- just nu -->
	  <?php 
	  	$home_events =  $page->related()->toPages();
	  	if ( $home_events->count() > 0): 
	  ?>

	  	<div class="d-flex flex-row">
	  		<div class="d-whole spacing-t-2">
	  			<h4 class="bold spacing-b-2"><?php echo t('ongoing'); ?></h4>
	  		</div>
	  	</div>
	  	<div class="d-flex flex-row m-column">
			  <?php foreach($home_events as $event): 
			  	snippet('event-module', array('event' => $event));
				endforeach; ?>
	    </div>

	  <?php else: ?>

	  	<div class="d-flex flex-row">
	  		<div class="d-whole spacing-t-2">
	  			<h4 class="spacing-b-2">Nothing to display in home.</h4>
	  		</div>
	  	</div>
	  	
	  <?php endif; ?>

	</div>

	<?php snippet('footer') ?>
