<?php 
	$infopage = $pages->findBy('title', 'General info');
?>

<div class="general-info">
	<div class="spacing-b-2">
		<p><?= $infopage->address()->kirbytext() ?></p>
	</div>
	<div class="spacing-b-2">
		<p><?= $infopage->opening_hours()->kirbytext() ?></p>
	</div>
	<div>
		Sok<br/>
		
		<ul class="language-menu">
		  <?php foreach($kirby->languages() as $language): ?>
		    <li<?php e($kirby->language() === $language, ' class="bold"') ?>>
		      <a href="<?php e($page->translation($language->code())->exists(), $page->url($language->code()), page('error')->url($language->code())) ?>"><?php echo $language->name(); ?></a>
		    </li>
		  <?php endforeach ?>
		  </ul>
  </div>
</div>

