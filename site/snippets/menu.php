<?php 		
$items  = $pages->listed();
?>

<div id="logo-mobile" class="p-absolute t-visible">
  <a class="overall" href="<?= $site->url() ?>" alt="<?= $site->title() ?>"><?= $site->title() ?></a>
</div>

<div class="marquee p-absolute">
  <div class="track">
    <div class="inner">
      <h2 class="s-big bold">Museum för samtidskonst—Dáládáidaga Dávvirvuorká—Nykyaijan taitheen myseymmi—Museum of Contemporary Art—Museum för samtidskonst—Dáládáidaga Dávvirvuorká—Nykyaijan taitheen myseymmi—Museum of Contemporary Art—Museum för samtidskonst—Dáládáidaga Dávvirvuorká—Nykyaijan taitheen myseymmi—Museum of Contemporary Art—</h2>
    </div>
  </div>
</div>

<nav class="navigation d-flex d-column space-between" role="navigation">
  <div class="header">
  	<div id="logo" class="p-relative">
      <a class="s-big overall" href="<?= $site->url() ?>" alt="<?= $site->title() ?>"><?= $site->title() ?><?= $site->title() ?></a>
      <h1 class="s-big bold"><?= $site->title() ?></h1>
    </div>

    <ul class="menu">
      <?php foreach($items as $item): ?>
          <li <?php e($item->isActive(), ' class="active"') ?>><a alt="<?= html($item->title()) ?>" href="<?= $item->url() ?>"><?= html($item->title()) ?></a></li>
      <?php endforeach ?>
    </ul>
  </div>

  <?php snippet('general-info') ?>
</nav>

<div class="menu-toggle th-visible"></div>