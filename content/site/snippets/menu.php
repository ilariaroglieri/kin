<?php 		
$items  = $pages->listed();
?>

<div id="logo-mobile" class="p-absolute t-visible">
  <h1><a class="s-big bold" href="<?= $site->url() ?>"><?= $site->title() ?></a></h1>
</div>

<div class="marquee p-absolute">
  <div class="track">
    <div class="inner">
      <h2 class="s-big bold">museum för samtidskonst—Dáládáidaga dávvirvuorká—Nykyaijantaitemyseymmi—Museum of Contemporay Art—museum för samtidskonst—Dáládáidaga dávvirvuorká—Nykyaijantaitemyseymmi—Museum of Contemporay Art—museum för samtidskonst—Dáládáidaga dávvirvuorká—Nykyaijantaitemyseymmi—Museum of Contemporay Art—</h2>
    </div>
  </div>
</div>

<nav class="navigation d-flex d-column space-between" role="navigation">
  <div class="header">
  	<div id="logo">
      <h1><a class="s-big" href="<?= $site->url() ?>"><?= $site->title() ?></a></h1>
    </div>

    <ul class="menu">
      <?php foreach($items as $item): ?>
          <li <?php e($item->isActive(), ' class="active"') ?>><a href="<?= $item->url() ?>"><?= html($item->title()) ?></a></li>
      <?php endforeach ?>
    </ul>
  </div>

  <?php snippet('general-info') ?>
</nav>

<div class="menu-toggle th-visible"></div>