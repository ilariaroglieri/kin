	<?php snippet('header') ?>

	<div class="content">
		<div class="d-grid">
			<div class="text spacing-t-2 spacing-b-2">
				<p><?= $page->text()->kirbytext() ?></p>
			</div>

			<div class="sidebar">
				<?php if ($image = $page->images()->first()) : ?>
					<img src="<?= $image->url(); ?>" />
				<?php endif; ?>
			</div>
		</div>
	</div>
