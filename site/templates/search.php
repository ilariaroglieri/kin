<?php snippet('header') ?>

<div class="content">

  <div class="d-flex flex-row">
    <div class="d-whole">
      <h2 class="s-big bold spacing-t-2"><?= $page->title() ?></h2>
    </div>
  </div>

  <div class="d-flex flex-row d-column">
    <form class="searchform d-two-thirds t-whole spacing-t-2 spacing-b-3 p-relative">
      <button class="submit p-absolute" type="submit"></button>
      <input type="search" aria-label="Search" name="q" value="<?= html($query) ?>">
    </form>
  </div>

  <div class="d-flex flex-row d-column">
    <?php if($query): ?>
      <?php if ($results->count() != 0): ?>
        <?php foreach ($results as $result): ?>
          <div class="event-list d-two-thirds t-whole">
            <a class="bold" href="<?= $result->url() ?>"><?= $result->title() ?></a>
          </div>
        <?php endforeach ?>
      <?php else: ?>
        <div class="no-results d-two-thirds t-whole">
          <p class="s-regular"><?= t('no-results'); ?></p>
        </div>
      <?php endif; ?>
    <?php endif; ?>
</div>
</div>

<?php snippet('footer') ?>