<?php $pagination = $list->pagination(); ?>
<nav class="d-half spacing-t-2">
  <ul class="pagination d-flex end">

    <?php if ($pagination): ?>
      <li><?php echo t('ev-pages'); ?></li>

      <?php if ($pagination->hasPrevPage()): ?>
        <li>
          <a href="<?= $pagination->prevPageURL() ?>">‹</a>
        </li>
      <?php endif ?>

      <?php foreach ($pagination->range(10) as $r): ?>
        <li <?= $pagination->page() === $r ? 'class="current" aria-current="page"' : '' ?>>
          <a href="<?= $pagination->pageURL($r) ?>">
            <?= $r ?>
          </a>
        </li>
      <?php endforeach ?>
    <?php endif; ?>

    <?php if ($pagination->hasNextPage()): ?>
      <li>
        <a href="<?= $pagination->nextPageURL() ?>">›</a>
      </li>
    <?php endif ?>

  </ul>
</nav>