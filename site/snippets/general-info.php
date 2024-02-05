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
		
		<ul class="language-menu">
		  <?php foreach($kirby->languages() as $language): ?>
		    <li<?php e($kirby->language() === $language, ' class="bold"') ?>>
		      <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
		        <?= html($language->name()) ?>
		      </a>
		    </li>
		  <?php endforeach ?>
		  </ul>
  </div>
</div>

