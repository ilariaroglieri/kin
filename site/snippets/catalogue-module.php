<div data-id="<?= $catalogue->uid() ?>" class="catalogue d-one-fifth ht-one-third m-half spacing-b-3">

	<?php if($pdf = $catalogue->pdf()->toFile()): ?>
		<a class="overall" href="<?= $pdf->url(); ?>" alt="<?= $catalogue->title()->html()?>"><?= $catalogue->title()->html()?></a>
	<?php endif; ?>

	<?php if ($image = $catalogue->c_image()->toFile()): 
		$cropped = $image->crop(951, 1143); ?>
		<div class="cover_img" role="img" style="background: url('<?= $image->url(); ?>') no-repeat center center;">
		</div>
	<?php endif; ?>

	<div class="catalogue-info"> 
		<h2 class="s-small-2 spacing-t-2"><?= $catalogue->title()->html() ?></h2>
		<?php snippet('catalogue-date', array('catalogue' => $catalogue)) ?>
	</div>
</div>