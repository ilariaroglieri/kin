<div data-id="<?= $event->uid() ?>" class="event-list d-half t-whole">
	<a class="bold" href="<?= $event->url() ?>" alt="<?= $event->title()->html() ?>"><?= $event->title()->html() ?></a>
	<?php snippet('event-type', array('event' => $event)) ?>
	<?php snippet('event-date', array('event' => $event)) ?>

</div>