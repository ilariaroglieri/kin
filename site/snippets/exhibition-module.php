<div data-id="<?= $exhibition->uid() ?>" class="exhibition d-one-third t-half m-whole spacing-b-2">
	<a class="overall" href="<?= $exhibition->url() ?>"></a>

	<?php if ($image = $exhibition->c_image()->toFile()) { ?>
		<div class="cover_img">
			<img src="<?= $image->url(); ?>" />
		</div>
	<?php } ?>

	<?php snippet('exhibition-date', array('exhibition' => $exhibition)) ?>
	<h2 class="s-medium bold italic spacing-t-half"><?= $exhibition->title()->html() ?></h2>
</div>