<?php $pagination = $list->pagination(); ?>
<nav class="d-half spacing-t-2 d-flex end">

    <?php if ($pagination): ?>
      <p><?php echo t('ev-pages'); ?></p>

      <ul class="pagination d-flex wrap">
        <?php foreach ($pagination->range(10) as $r): ?>
          <li <?= $pagination->page() === $r ? 'class="current" aria-current="page"' : '' ?>>
            <a href="<?= $pagination->pageURL($r) ?>">
              <?= $r ?>
            </a>
          </li>
        <?php endforeach ?>
      </ul>
    <?php endif; ?>

</nav>