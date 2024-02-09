	<?php snippet('header') ?>

	<div id="single-event" class="content">
		<div class="d-grid">
			<div class="text spacing-t-2 spacing-b-4">
				<h1 class="s-medium bold spacing-b-2"><?= $page->title() ?></h1>

				<?php snippet('event-date', array('event' => $page)) ?>

				<div class="wysiwyg s-regular spacing-t-2">
					<?= $page->info()->kirbytext() ?>
				</div>
			</div>

			<div class="sidebar images">
				<?php 
					$c_image = $page->c_image()->toFile();
				?>

				<?php if ($c_image): 
					$c_caption = $c_image->caption()->inline(); 
					?>
					<figure class="project">
						<picture>
							<img src="<?= $c_image->url(); ?>" />
							<?php if (!(empty($c_caption))): ?>
								<figcaption>
									<h4 class="s-regular italic"><?= $c_caption; ?></h4>
								</figcaption>
							<?php endif; ?>
						</picture>
					</figure>
				<?php endif; ?>

				<?php if ($images = $page->gallery_images()->toFiles()) : 
					foreach ($images as $image): ?>
						<?php $caption = $image->caption()->inline(); ?>
						<figure class="project">
							<picture>
								<img src="<?= $image->url(); ?>" />
								<?php if (!(empty($caption))): ?>
									<figcaption>
										<h4 class="s-regular italic"><?= $caption; ?></h4>
									</figcaption>
								<?php endif; ?>
							</picture>
						</figure>
					<?php endforeach;
				endif; ?>
			</div>
		</div>
	</div>

	<?php snippet('footer') ?>