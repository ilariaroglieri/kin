	<?php snippet('header') ?>

	<div id="single-event" class="content" role="main">
		<div class="d-flex flex-row ht-column">
			<div class="text d-five-twelfth ht-whole spacing-p-t-2">
				<h1 class="s-big bold spacing-b-2"><?= $page->title() ?></h1>

				<?php snippet('event-date', array('event' => $page)) ?>

				<?php $addText = $page->add_text(); ?>
				<?php if (!($addText->isEmpty())): ?>
					<h3 class="additional-info s-medium"><?= $addText; ?></h3>
				<?php endif; ?>

				<div class="wysiwyg s-regular spacing-t-2">
					<?= $page->info()->kirbytext() ?>
				</div>
			</div>

			<div class="sidebar images d-half ht-whole">
				<?php if ($images = $page->gallery_images()->toFiles()) : 
					foreach ($images as $image): ?>
						<?php $caption = $image->caption()->inline(); ?>
						<figure class="image">
							<picture>
								<img src="<?= $image->url(); ?>" />
								<?php if (!(empty($caption))): ?>
									<figcaption>
										<p class="s-regular italic"><?= $caption; ?></p>
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