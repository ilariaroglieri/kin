<!doctype html>
<html lang="en">
	<head>

	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width,initial-scale=1.0">

	  <title><?= $site->title() ?> | <?= $page->title() ?></title>

	  <?= css(['assets/css/style.css', '@auto']) ?>

	  <link rel="icon" type="image/x-icon" href="https://kinmuseum.se/favicon.ico">
	  <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	</head>

	
	
	<body class="<?= $page->parents()->count() ? $page->parent()->uid() . ' ' . $page->uid() : $page->uid(); ?>">

		<div class="container">
			<?php snippet('menu') ?>
			