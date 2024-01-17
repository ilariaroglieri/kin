<?php 
	$starting_year = $exhibition->starting_date()->toDate('Y');
	$ending_year = $exhibition->starting_date()->toDate('Y');
	$start = $starting_year == $ending_year ? $exhibition->starting_date()->toDate('d m') : $exhibition->starting_date()->toDate('d m Y');
	$end = $exhibition->ending_date()->toDate('d m Y');
?>

<div data-id="<?= $exhibition->uid() ?>" class="exhibition d-one-third t-half m-whole">
	<a class="overall" href="<?= $exhibition->url() ?>"></a>

	<?php if ($image = $exhibition->c_image()->toFile()) { ?>
		<div class="cover_img">
			<img src="<?= $image->url(); ?>" />
		</div>
	<?php } ?>

	<h3 class="s-small uppercase spacing-t-2"><?= $start ?> - <?= $end ?></h3>
	<h2 class="s-medium bold italic spacing-t-half"><?= $exhibition->title()->html() ?></h2>
</div>