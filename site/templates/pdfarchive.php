<?php snippet('header') ?>

	<div class="content" role="main">

		<div class="d-flex flex-row">
  		<div class="d-whole">
  			<h2 class="s-big bold spacing-t-2 spacing-b-4">Arkiv</h2>
  		</div>
  	</div>

  	<div class="d-flex flex-row">
			<div class="d-ten-twelfth t-whole">
				<p><?= $site->archivetext()->kirbytext() ?></p>
			</div>
		</div>

  	<?php $catalogues = page('pdf-archive')->children()->listed(); ?>


  	<div class="d-flex flex-row wrap m-column spacing-t-3">
		  <?php foreach($catalogues as $catalogue): 
		  	snippet('catalogue-module', array('catalogue' => $catalogue));
			endforeach; ?>
    </div>


	</div>

<?php snippet('footer') ?>