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


	<?php
		$langOrder = ['sv', 'en', 'ns', 'mk'];
		$languages = $kirby->languages();
		$orderedLanguages = new Kirby\Cms\Languages();

		foreach($langOrder as $code) {
		  $language = $languages->findBy('code', $code);
		  $orderedLanguages->add($language);

		}

		foreach($orderedLanguages as $language) {
		  $language->code();
		}
	?>

	<div>
		<ul class="language-menu">
		  <?php foreach($orderedLanguages as $language): ?>
		    <li<?php e($kirby->language() === $language, ' class="bold"') ?>>
		      <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
		        <?= html($language->name()) ?>
		      </a>
		    </li>
		  <?php endforeach ?>
		</ul>

  </div>
</div>

