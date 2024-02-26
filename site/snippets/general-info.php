<div class="general-info">
	<div class="spacing-t-2 spacing-b-2 spacing-m-t-1 spacing-m-b-1">
		<p><?= $site->opening_hours()->kirbytext() ?></p>
	</div>
	<div class="spacing-b-2 spacing-m-b-1">
		<p><?= $site->address()->kirbytext() ?></p>
	</div>

	<?php if ($p = page('sok')): ?>
		<div class="spacing-t-2 spacing-b-2 spacing-m-t-1 spacing-m-b-1">
			<ul>
				<li <?php e($p->isActive(), ' class="active"') ?>>
	  			<a href="<?= $p->url() ?>" alt="<?= $p->title() ?>"><?= $p->title() ?></a>
	  		</li>
	  	</ul>
	  </div>
	<?php endif ?>

	<?php
		$langOrder = ['sv', 'ns', 'mk', 'en'];
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
		    <li<?php e($kirby->language() === $language, ' class="active"') ?>>
		      <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
		        <?= html($language->name()) ?>
		      </a>
		    </li>
		  <?php endforeach ?>
		</ul>

  </div>
</div>

