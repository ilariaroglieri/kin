<div data-id="<?= $event->uid() ?>" class="event d-one-third t-half m-whole spacing-b-2">
	<a class="overall" href="<?= $event->url() ?>" alt="<?= $event->title()->html()?>"><?= $event->title()->html()?></a>

	<?php if ($image = $event->c_image()->toFile()): 
		$cropped = $image->crop(951, 1143); ?>
		<div class="cover_img" role="img" style="background: url('<?= $cropped->url(); ?>') no-repeat center center;">
		</div>
	<?php endif; ?>

	<div class="event-info">
		<?php snippet('event-date', array('event' => $event)) ?>
		<h2 class="s-big bold spacing-t-half"><?= $event->title()->html() ?></h2>

		<?php 
			$type = $event->blueprint()->field('type'); 
			$value = $event->type()->value();

			$t = $type['options'][$value][$kirby->language()->code()] ?? $value;
		?>
		<h3 class="cat s-medium spacing-t-half"><?= $t ?></h3>

	</div>
</div>