<?php snippet('header') ?>

	<?php 	
		$t = date("d-m-Y"); 
		$today = new DateTime($t);

		$archiveTime = $page->time();

		$catfield = page('events')->children()->first()->blueprint()->field('cat');
		$cats = $catfield['options']; 


		$events = page('events')->children()->listed()->filterBy('eventStateInTime', $archiveTime)->filterBy('type', '!=', 'news'); // category news is hidden

		if ($archiveTime == 'ongoing' || $archiveTime == 'future'):
			$orderedEvents = $events->sortBy('starting_date','ASC'); 
		else: 
			$orderedEvents = $events->sortBy('starting_date','DESC'); 
		endif;
	?>
	<div class="content" role="main">

  	<div class="d-flex flex-row">
  		<div class="d-whole">
  			<h2 class="s-big bold spacing-t-2"><?= $page->title() ?></h2>
  		</div>
  	</div>


  	<?php if (!($archiveTime == 'ended')):
			
			$allcatsarray = [];
			foreach($cats as $cat => $key):
				$catname = $key[$kirby->language()->code()];
				$catarray = [];

				foreach($events as $event): 
					if ( $event->cat()->value() ==  $cat ):
					$catarray[] = $event;
					endif;
				endforeach;

				if (!empty($catarray)): 
					$allcatsarray[] = $catarray;
				endif; 

				if (!empty($catarray)):?>
					<div class="d-flex flex-row">
			  		<div class="d-whole">
			  			<h3 class="cat-title s-regular spacing-t-2 spacing-b-1"><?= $catname; ?></h3>
			  		</div>
			  	</div>

			  	<div class="events-row d-flex flex-row d-column">
					  <?php foreach($orderedEvents as $event): 
							
							if ( $event->cat()->value() == $cat ):
								snippet('event-module-list', array('event' => $event));
							endif;?>

			      <?php endforeach; ?>
			    </div>
				<?php endif; ?>
			<?php endforeach; ?>

			<?php if (empty($allcatsarray)): ?>
				<div class="d-flex flex-row">
		  		<div class="d-whole">
		  			<h3 class="cat-title s-regular spacing-t-2 spacing-b-1"><?= t('no-events'); ?></h3>
		  		</div>
		  	</div>
		  <?php endif; ?>

		<!-- past archive has pagination and no categories division -->
		<?php else: ?>

			<?php 
				$list = $orderedEvents->paginate(20);
				snippet('pagination', array('list' => $list)); ?>

			<div class="events-row d-flex flex-row d-column spacing-t-2">
			  <?php foreach($orderedEvents->paginate(20) as $event): 
					
					snippet('event-module-list', array('event' => $event));

	      endforeach; ?>
	    </div>

	    <?php snippet('pagination', array('list' => $list)); ?>
		<?php endif; ?>

	</div>

<?php snippet('footer') ?>