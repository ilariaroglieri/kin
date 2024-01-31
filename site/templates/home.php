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
	  			<h4 class="uppercase spacing-b-2">Just nu<?php echo t('just-nu, Just nu'); ?></h4>
	  		</div>
	  	</div>
	  	<div class="d-flex flex-row m-column">
			  <?php foreach($home_events as $home_event): ?>
			  	<?php if (!($event->starting_date()->isEmpty()) && !($event->ending_date()->isEmpty()) ):
						
							$s = $event->starting_date()->toDate('d-m-Y');
							$startD = new DateTime($s);
							$e = $event->ending_date()->toDate('d-m-Y'); 
							$endD = new DateTime($e);
						?>

						  <?php if ($startD < $today && $today < $endD): ?>
								<?php snippet('event-module', array('event' => $event)) ?>
							<?php endif; ?>

						<?php endif;?>
				<?php endforeach ?>
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
