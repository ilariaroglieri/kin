	<?php snippet('header') ?>

	<div id="single-exhibition" class="content">
		<div class="d-grid">
			<div class="text spacing-t-2 spacing-b-2">
				<h1 class="s-medium bold spacing-b-2"><?= $page->title() ?></h1>

				<?php snippet('exhibition-date', array('exhibition' => $page)) ?>

				<div class="txt spacing-t-2">
					<p><?= $page->info()->kirbytext() ?></p>
				</div>
			</div>

			<div class="sidebar images">
				<?php if ($image = $page->images()->first()) : ?>
					<img src="<?= $image->url(); ?>" />
				<?php endif; ?>
			</div>
		</div>
	</div>

	<?php snippet('footer') ?>