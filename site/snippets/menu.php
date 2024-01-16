<?php 		
$exhibitions = page('exhibitions')->children()->listed(); 
?>


<nav class="navigation d-flex d-column" role="navigation">
	<div id="logo">
    <a href="<?= $site->url() ?>"><?= $site->title() ?></a>
  </div>

  <ul class="menu">
   
    <li id="<?= page('om-kin')->slug(); ?>">
      <a href="<?= page('om-kin')->url(); ?>"><?= page('om-kin')->title(); ?></a>
    </li>
  </ul>
</nav>