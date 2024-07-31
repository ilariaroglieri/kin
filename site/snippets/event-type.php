<?php 
	$type = $event->blueprint()->field('type'); 
	$value = $event->type()->value();

	$t = $type['options'][$value][$kirby->language()->code()] ?? $value;
?>
<h3 class="type s-medium camelcase spacing-t-half-half"><?= $t ?></h3>