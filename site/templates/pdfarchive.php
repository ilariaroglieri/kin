<?php snippet('header') ?>

	<div class="content" role="main">

		<div class="d-flex flex-row">
  		<div class="d-whole">
  			<h2 class="s-big bold spacing-t-2 spacing-b-4"><?php echo t('pdf-archive');?></h2>
  		</div>
  	</div>

  	<div class="d-flex flex-row">
			<div class="d-ten-twelfth t-whole">
				<p><?= $site->archivetext()->kirbytext() ?></p>
			</div>
		</div>

  	<?php 
  		$catalogues = page('pdf-archive')->children()->listed();
	  	$list = $catalogues->paginate(30);
	  	$pagination = $list->pagination();
  	?>
		<nav class="d-half spacing-t-2 d-flex end">

	    <?php if ($pagination->pages() > 1): ?>
	      <ul class="pagination d-flex wrap">
	        <?php foreach ($pagination->range(100) as $r): ?>
	          <li <?= $pagination->page() === $r ? 'class="current" aria-current="page"' : '' ?>>
	            <a href="<?= $pagination->pageURL($r) ?>">
	              <?= $r ?>
	            </a>
	          </li>
	        <?php endforeach ?>
	      </ul>
	    <?php endif; ?>
		</nav>

  	<div class="d-flex flex-row wrap spacing-t-3">
		  <?php foreach($catalogues->paginate(30) as $catalogue): 
		  	snippet('catalogue-module', array('catalogue' => $catalogue));
			endforeach; ?>
    </div>


	</div>

<?php snippet('footer') ?>