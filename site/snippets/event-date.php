<?php 
	$starting_year = $event->starting_date()->toDate('Y');
	$ending_year = $event->starting_date()->toDate('Y');
	$start = $starting_year == $ending_year ? $event->starting_date()->toDate('d m') : $event->starting_date()->toDate('d m Y');
	$end = $event->ending_date()->toDate('d m Y');
?>

<?php if (isset($start) && isset($end)): ?>
	<h3 class="dates s-medium"><?= $start ?>&mdash;<?= $end ?></h3>
<?php endif; ?>