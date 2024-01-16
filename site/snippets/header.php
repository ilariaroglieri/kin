<!doctype html>
<html lang="en">
	<head>

	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width,initial-scale=1.0">

	  <title><?= $site->title() ?> | <?= $page->title() ?></title>

	  <?= css(['assets/css/style.css', '@auto']) ?>

	  <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,500;0,700;1,500;1,700&display=swap" rel="stylesheet">
	</head>

	
	
	<body class="<?= $page->parents()->count() ? $page->parent()->uid() . ' ' . $page->uid() : $page->uid(); ?>">