	<?php snippet('header') ?>

	<div class="content">

		<?php 	
		$exhibitions = page('events')->children()->listed(); 
		$t = date("d-m-Y"); 
		$today = new DateTime($t);

		// just nu
	  if ($exhibitions->count() > 0) { ?>
	  	<div class="d-flex flex-row">
	  		<div class="d-whole">
	  			<h4 class="bold spacing-t-2 spacing-b-2">Just nu<?php echo t('just-nu, Just nu'); ?></h4>
	  		</div>
	  	</div>
	  	<div class="d-flex flex-row m-column">
			  <?php foreach($exhibitions as $exhibition): 
					
					if (!($exhibition->starting_date()->isEmpty()) && !($exhibition->ending_date()->isEmpty()) ):
					
						$s = $exhibition->starting_date()->toDate('d-m-Y');
						$startD = new DateTime($s);
						$e = $exhibition->ending_date()->toDate('d-m-Y'); 
						$endD = new DateTime($e);
					?>

					  <?php if ($startD < $today && $today < $endD): ?>
							<?php snippet('exhibition-module', array('exhibition' => $exhibition)) ?>
						<?php endif; ?>

					<?php endif;?>

	      <?php endforeach; ?>
	    </div>
	  <?php } ?>
	</div>

	<?php snippet('footer') ?>