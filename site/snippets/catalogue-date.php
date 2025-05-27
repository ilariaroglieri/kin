<?php 

	$starting_year = $catalogue->starting_date()->toDate('Y');
	$ending_year = $catalogue->ending_date()->toDate('Y');

	$start_fullDate = $catalogue->starting_date()->toDate('d.m.Y');
	$end_fullDate = $catalogue->ending_date()->toDate('d.m.Y');

	// THIS TRANSLATES BUT BREAKS MEANKIELI
	$start = $starting_year == $ending_year ? $catalogue->starting_date()->toDate('d.m.') : $catalogue->starting_date()->toDate('d.m.Y');
	$end = $catalogue->ending_date()->toDate('d.m.');

	$duration = $start_fullDate == $end_fullDate ? $end : $start.'—'.$end.' '.$ending_year;
?>

<?php if (isset($start_fullDate) && isset($end_fullDate)): ?>
	<h3 class="dates s-small-3 italic spacing-t-half"><?= $duration; ?></h3>
<?php endif; ?>
