<div data-id="<?= $event->uid() ?>" class="event d-one-third t-half m-whole spacing-b-2">
	<a class="overall" href="<?= $event->url() ?>"></a>

	<?php if ($image = $event->c_image()->toFile()) { ?>
		<div class="cover_img">
			<img src="<?= $image->url(); ?>" />
		</div>
	<?php } ?>

	<?php snippet('event-date', array('event' => $event)) ?>
	<h2 class="s-medium bold italic spacing-t-half"><?= $event->title()->html() ?></h2>
</div>