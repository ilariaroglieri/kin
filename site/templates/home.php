	<?php snippet('header') ?>

	<div class="content">
		<div class="d-flex flex-row">
			<div class="d-whole spacing-t-2 spacing-b-2">
				<p><?= $page->text()->kirbytext() ?></p>
			</div>
		</div>

		<?php snippet('exhibition-module') ?>
	</div>
