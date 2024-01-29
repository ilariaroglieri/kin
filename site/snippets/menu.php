<?php 		
$items  = $pages->listed();
?>


<nav class="navigation d-flex d-column space-between" role="navigation">
  <div class="header">
  	<div id="logo">
      <a href="<?= $site->url() ?>"><?= $site->title() ?></a>
    </div>

    <ul class="menu">
      <?php foreach($items as $item): ?>
          <li <?php e($item->isActive(), ' class="bold"') ?>><a href="<?= $item->url() ?>"><?= html($item->title()) ?></a></li>
      <?php endforeach ?>
    </ul>
  </div>

  <?php snippet('general-info') ?>
</nav>

<div class="menu-toggle th-visible"></div>