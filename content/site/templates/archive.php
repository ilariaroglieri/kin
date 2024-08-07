<?php snippet('header') ?>

	<?php 	
		$events = page('events')->children()->listed(); 
		$t = date("d-m-Y"); 
		$today = new DateTime($t);

		$archiveTime = $page->time();

		$catfield = page('events')->children()->first()->blueprint()->field('cat');
		$cats = $catfield['options']; 
	?>
	<div class="content">

  	<div class="d-flex flex-row">
  		<div class="d-whole">
  			<h2 class="s-big bold spacing-t-2"><?= $page->title() ?></h2>
  		</div>
  	</div>

		<?php 
			$allcatsarray = [];
			foreach($cats as $cat => $key):
				$catname = $key[$kirby->language()->code()];
				$catarray = [];

				foreach($events as $event): 
					if ( $event->eventStateInTime() == $archiveTime && $event->cat()->value() ==  $cat ):
					$catarray[] = $event;
					endif;
				endforeach;

				if (!empty($catarray)): 
					$allcatsarray[] = $catarray;
				endif; 

				if (!empty($catarray)):?>
					<div class="d-flex flex-row">
			  		<div class="d-whole">
			  			<h2 class="cat-title s-regular spacing-t-2 spacing-b-1"><?= $catname; ?></h2>
			  		</div>
			  	</div>

			  	<div class="events-row d-flex flex-row d-column">
					  <?php foreach($events as $event): 
							
							if ( $event->eventStateInTime() == $archiveTime && $event->cat()->value() ==  $cat ):
								snippet('event-module-list', array('event' => $event));
							endif;?>

			      <?php endforeach; ?>
			    </div>
				<?php endif; ?>
			<?php endforeach; 
		?>

		<?php if (empty($allcatsarray)): ?>
			<div class="d-flex flex-row">
	  		<div class="d-whole">
	  			<h2 class="cat-title s-regular spacing-t-2 spacing-b-1"><?= t('no-events'); ?></h2>
	  		</div>
	  	</div>
	  <?php endif; ?>
	</div>

<?php snippet('footer') ?>