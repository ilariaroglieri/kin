<?php 		
$items  = $pages->listed();
$needle = $items->findBy('title', 'Exhibitions');
?>


<nav class="navigation d-flex d-column" role="navigation">
	<div id="logo">
    <a href="<?= $site->url() ?>"><?= $site->title() ?></a>
  </div>

  <ul class="menu">

    <?php foreach($items as $item): ?>
      <?php if($item != $needle): ?>
        <li <?php e($item->isActive(), ' class="bold"') ?>><a href="<?= $item->url() ?>"><?= html($item->title()) ?></a></li>
      <?php endif; ?>
    <?php endforeach ?>
  </ul>
</nav>