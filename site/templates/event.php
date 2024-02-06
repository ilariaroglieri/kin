	<?php snippet('header') ?>

	<div id="single-event" class="content">
		<div class="d-grid">
			<div class="text spacing-t-2 spacing-b-2">
				<h1 class="s-medium bold spacing-b-2"><?= $page->title() ?></h1>

				<?php snippet('event-date', array('event' => $page)) ?>

				<div class="txt spacing-t-2">
					<p><?= $page->info()->kirbytext() ?></p>
				</div>
			</div>

			<div class="sidebar images">
				<?php 
					$c_image = $page->c_image()->toFile();
					$c_caption = $c_image->caption(); 
				?>

				<?php if ($c_image): ?>
					<figure class="project">
						<picture>
							<img src="<?= $c_image->url(); ?>" />
						</picture>
						<?php if (!(empty($c_caption))): ?>
							<figcaption>
								<h4 class="s-small italic"><?= $c_caption; ?></h4>
							</figcaption>
						<?php endif; ?>
					</figure>
				<?php endif; ?>

				<?php if ($images = $page->gallery_images()->toFiles()) : 
					foreach ($images as $image): ?>
						<?php $caption = $image->caption(); ?>
						<figure class="project">
							<picture>
								<img src="<?= $image->url(); ?>" />
							</picture>
							<?php if (!(empty($caption))): ?>
								<figcaption>
									<h4 class="s-small italic"><?= $caption; ?></h4>
								</figcaption>
							<?php endif; ?>
						</figure>
					<?php endforeach;
				endif; ?>
			</div>
		</div>
	</div>

	<?php snippet('footer') ?>