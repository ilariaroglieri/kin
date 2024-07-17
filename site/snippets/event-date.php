<?php 
	$starting_year = $event->starting_date()->toDate('Y');
	$ending_year = $event->ending_date()->toDate('Y');

	$start_fullDate = $event->starting_date()->toDate('d.m Y');
	$end_fullDate = $event->ending_date()->toDate('d.m Y');
	$start = $starting_year == $ending_year ? $event->starting_date()->toDate('d.m') : $event->starting_date()->toDate('d.m Y');
	$end = $event->ending_date()->toDate('d.m Y');

	$duration = $start_fullDate == $end_fullDate ? $end : $start.'—'.$end;
?>

<?php if (isset($start) && isset($end)): ?>
	<h3 class="dates s-medium"><?= $duration; ?></h3>
<?php elseif (isset($start) && !(isset($end))): ?>
	<!-- whole day event: only starting date -->
	<h3 class="dates s-medium"><?= $start; ?></h3>
<?php endif; ?>