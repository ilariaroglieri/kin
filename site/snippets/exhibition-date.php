<?php 
	$starting_year = $exhibition->starting_date()->toDate('Y');
	$ending_year = $exhibition->starting_date()->toDate('Y');
	$start = $starting_year == $ending_year ? $exhibition->starting_date()->toDate('d m') : $exhibition->starting_date()->toDate('d m Y');
	$end = $exhibition->ending_date()->toDate('d m Y');
?>

<h3 class="dates s-small uppercase spacing-t-2"><?= $start ?> - <?= $end ?></h3>
