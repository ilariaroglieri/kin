	<?php snippet('header') ?>

	<div class="content" id="content-single">
		<div class="d-flex ht-column">
			<div class="text d-five-twelfth ht-whole spacing-t-2 spacing-b-4">
				<h2 class="s-big bold spacing-b-2"><?= $page->title() ?></h2>

				<div class="wysiwyg s-medium">
					<?= $page->text()->kirbytext() ?>
				</div>
			</div>

			<div class="sidebar images d-half ht-whole">
				<?php if ($image = $page->images()->first()) :
					$caption = $image->caption()->inline(); 
					?>
					<figure class="image">
						<picture>
							<img src="<?= $image->url(); ?>" />
							<?php if (!(empty($caption))): ?>
								<figcaption>
									<h4 class="s-regular italic"><?= $caption; ?></h4>
								</figcaption>
							<?php endif; ?>
						</picture>
					</figure>
				<?php endif; ?>

				<?php
				$items = $page->link()->toStructure(); ?>
				<div class="link-list">

					<?php foreach ($items as $item): ?>
					  <a href="<?= $item->url(); ?>">— <?= $item->title() ?></a>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>

	<?php snippet('footer') ?>
