	<?php snippet('header') ?>

	<div class="content">

		<?php 	
		$events = page('events')->children()->listed(); 
		$t = date("d-m-Y"); 
		$today = new DateTime($t);

		$archiveTime = $page->time(); echo $archiveTime;

	  if ($events->count() > 0): ?>
	  	<div class="d-flex flex-row">
	  		<div class="d-whole">
	  			<h4 class="bold spacing-t-2 spacing-b-2"><?= $page->title() ?></h4>
	  		</div>
	  	</div>
	  	<div class="d-flex flex-row m-column">
			  <?php foreach($events as $event): 
			  	$eventTime = $event->eventStateInTime(); echo $eventTime;
					
					if ( $eventTime == $archiveTime):
					
						snippet('event-module', array('event' => $event));

					endif;?>

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