	<?php snippet('header') ?>

	<div class="content">

		<?php 	
		$events = page('events')->children()->listed(); 
		$t = date("d-m-Y"); 
		$today = new DateTime($t);

		$archiveTime = $page->time();

	  if ($events->count() > 0): ?>
	  	<div class="d-flex flex-row">
	  		<div class="d-whole">
	  			<h2 class="s-big bold spacing-t-2 spacing-b-2"><?= $page->title() ?></h2>
	  		</div>
	  	</div>
	  	<div class="d-flex flex-row d-column">
			  <?php foreach($events as $event): 
					
					if ( $event->eventStateInTime() == $archiveTime):
					
						snippet('event-module-list', array('event' => $event));

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