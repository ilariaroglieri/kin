	<?php snippet('header') ?>

	<div class="content">

		<?php 	
		$events = page('events')->children()->listed(); 
		$t = date("d-m-Y"); 
		$today = new DateTime($t);

		// just nu
	  if ($events->count() > 0): ?>
	  	<div class="d-flex flex-row">
	  		<div class="d-whole">
	  			<h4 class="bold spacing-t-2 spacing-b-2">Just nu<?php echo t('just-nu, Just nu'); ?></h4>
	  		</div>
	  	</div>
	  	<div class="d-flex flex-row m-column">
			  <?php foreach($events as $event): 
					
					if (!($event->starting_date()->isEmpty()) && !($event->ending_date()->isEmpty()) ):
					
						$s = $event->starting_date()->toDate('d-m-Y');
						$startD = new DateTime($s);
						$e = $event->ending_date()->toDate('d-m-Y'); 
						$endD = new DateTime($e);
					?>

					  <?php if ($startD < $today && $today < $endD): ?>
							<?php snippet('event-module', array('event' => $event)) ?>
						<?php endif; ?>

					<?php endif;?>

	      <?php endforeach; ?>
	    </div>
	  <?php else: ?>
	  	<div class="d-flex flex-row">
	  		<div class="d-whole spacing-t-2">
	  			<h4 class="spacing-b-2">Nothing to display here.</h4>
	  		</div>
	  	</div>
	  <?php endif; ?>
	</div>

	<?php snippet('footer') ?>