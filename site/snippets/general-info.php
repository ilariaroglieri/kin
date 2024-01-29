<?php 
	$infopage = $pages->findBy('title', 'General info');
?>

<div class="general-info">
	<div class="spacing-b-2">
		<p><?= $infopage->address()->kirbytext() ?></p>
	</div>
	<div class="spacing-b-2">
		<p><?= $infopage->opening_hours()->kirbytext() ?></p>
	</div>
	<div>
		Sok<br/>
		Languages
	</div>
</div>

