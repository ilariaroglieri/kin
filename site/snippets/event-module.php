<div data-id="<?= $event->uid() ?>" class="event d-one-third t-half m-whole spacing-b-2">
	<a class="overall" href="<?= $event->url() ?>"></a>

	<?php if ($image = $event->c_image()->toFile()) { ?>
		<div class="cover_img" style="background: url('<?= $image->url(); ?>') no-repeat center center;">
		</div>
	<?php } ?>

	<div class="event-info">
		<?php snippet('event-date', array('event' => $event)) ?>
		<h2 class="s-big bold spacing-t-half"><?= $event->title()->html() ?></h2>
	</div>
</div>