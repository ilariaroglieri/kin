	<?php snippet('header') ?>

	<div class="content">
		<div class="d-grid">
			<div class="text spacing-t-2 spacing-b-2">
				<h2 class="s-big bold spacing-b-2"><?= $page->title() ?></h2>

				<div class="wysiwyg">
					<?= $page->text()->kirbytext() ?>
				</div>
			</div>

			<div class="sidebar">
				<?php if ($image = $page->images()->first()) : ?>
					<img src="<?= $image->url(); ?>" />
				<?php endif; ?>

				<?php
				$items = $page->link()->toStructure(); ?>
				<div class="link-list spacing-t-2">

					<?php foreach ($items as $item): ?>
					  <a href="$item->url()">— <?= $item->title() ?></a>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>

	<?php snippet('footer') ?>
