<?php 

	$archiveTime = $page->time();

	$starting_year = $event->starting_date()->toDate('Y');
	$ending_year = $event->ending_date()->toDate('Y');

	$start_fullDate = $event->starting_date()->toDate('d m Y');
	$end_fullDate = $event->ending_date()->toDate('d m Y');
	$hour = $event->hour()->toDate('H:i');

	// THIS TRANSLATES BUT BREAKS MEANKIELI
	$start = $starting_year == $ending_year ? $event->starting_date()->toFormattedPattern('d LLLL') : $event->starting_date()->toFormattedPattern('d LLLL Y');
	$end = $event->ending_date()->toFormattedPattern('d LLLL Y');
	$onlyStart = $event->starting_date()->toFormattedPattern('d LLLL Y');


	// $start = $starting_year == $ending_year ? $event->starting_date()->toDate('d M') : $event->starting_date()->toDate('d M Y');
	// $end = $event->ending_date()->toDate('d M Y');

	$duration = $start_fullDate == $end_fullDate ? $end : $start.'—'.$end;
?>

<?php if (isset($start_fullDate) && isset($end_fullDate)): ?>
	<?php if ($archiveTime == 'ongoing'): ?>
		<h3 class="dates s-medium"><?php echo t('until'); ?> <?= $end; ?></h3>
	<?php elseif ($archiveTime == 'future'): ?>
		<h3 class="dates s-medium"><?= $onlyStart; ?></h3>
	<?php elseif ($archiveTime == 'permanent'): ?>
	<?php else: ?>
		<h3 class="dates s-medium"><?= $duration; ?></h3>
	<?php endif; ?>
<?php elseif (isset($start_fullDate) && !(isset($end_fullDate))): ?>
	<!-- whole day event: only starting date -->
	<h3 class="dates s-medium"><?= $onlyStart; ?><?php if ($hour): echo ', ' . $hour; endif; ?></h3>
<?php endif; ?>