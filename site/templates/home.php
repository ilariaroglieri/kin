	<?php snippet('header') ?>

	<div class="content">
		<div class="d-flex flex-row">
			<div class="d-whole spacing-t-2 spacing-b-2">
				<p><?= $page->text()->kirbytext() ?></p>
			</div>
		</div>

		<?php 	
		$exhibitions = page('exhibitions')->children()->listed(); 
		$t = date("d-m-Y"); 
		$today = new DateTime($t);

		// just nu
	  if ($exhibitions->count() > 0) { ?>
	  	<div class="d-flex flex-row">
	  		<div class="d-whole">
	  			<h4 class="uppercase spacing t-2 spacing-b-2"><?php echo t('just-nu, Just nu'); ?></h4>
	  		</div>
	  	</div>
	  	<div class="d-flex flex-row">
			  <?php foreach($exhibitions as $exhibition): 
					
					$s = $exhibition->starting_date()->toDate('d-m-Y');
					$startD = new DateTime($s);
					$e = $exhibition->ending_date()->toDate('d-m-Y'); 
					$endD = new DateTime($e);
					?>

			  	<?php if ($startD < $today && $today < $endD): ?>
						<?php snippet('exhibition-module', array('exhibition' => $exhibition)) ?>
					<?php endif; ?>

	      <?php endforeach; ?>
	    </div>
	  <?php } ?>
	</div>
