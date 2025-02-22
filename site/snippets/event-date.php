<?php 

	$archiveTime = $page->time();

	$starting_year = $event->starting_date()->toDate('Y');
	$ending_year = $event->ending_date()->toDate('Y');

	$start_fullDate = $event->starting_date()->toDate('d m Y');
	$end_fullDate = $event->ending_date()->toDate('d m Y');
	$hour = $event->hour()->toDate('H:i');

	// THIS TRANSLATES BUT BREAKS MEANKIELI
	$start = $starting_year == $ending_year ? $event->starting_date()->toFormattedPattern('d LLLL') : $event->starting_date()->toFormattedPattern('d LLLL Y');
	$end = $event->ending_date()->toFormattedPattern('d LLLL');
	$onlyStart = $event->starting_date()->toFormattedPattern('d LLLL Y');

	$duration = $start_fullDate == $end_fullDate ? $end : $start.'—'.$end.' '.$ending_year;
?>

<?php if (isset($start_fullDate) && isset($end_fullDate)): ?>
	<?php if ($archiveTime == 'ongoing'): ?>
		<h3 class="dates s-medium spacing-t-half-half"><?php echo t('until'); ?> <?= $end; ?> <?= $ending_year; ?></h3>
	<?php elseif ($archiveTime == 'permanent'): ?>
	<?php else: ?>
		<h3 class="dates s-medium spacing-t-half-half"><?= $duration; ?></h3>
	<?php endif; ?>
<?php elseif (isset($start_fullDate) && !(isset($end_fullDate))): ?>
	<!-- whole day event: only starting date -->
	<h3 class="dates s-medium spacing-t-half-half"><?= $onlyStart; ?><?php if ($hour): echo ', ' . $hour; endif; ?></h3>
<?php endif; ?>