<?php snippet('header') ?>

<div class="content" role="main">

  <div class="d-flex flex-row">
    <div class="d-whole">
      <h2 class="s-big bold spacing-t-2"><?= $page->title() ?></h2>
    </div>
  </div>

  <div class="d-flex flex-row d-column">
    <form class="searchform d-half t-whole spacing-t-2 spacing-b-3 p-relative">
      <input type="search" aria-label="Search" name="q" value="<?= html($query) ?>">
      <button class="submit" type="submit"></button>
    </form>
  </div>

  <div class="d-flex flex-row d-column">
    <?php if($query): ?>
      <?php if ($results->count() != 0): ?>
        <?php foreach ($results as $result): ?>
          <div class="event-list d-two-thirds t-whole">
            <a class="bold" href="<?= $result->url() ?>" alt="<?= $result->title() ?>"><?= $result->title() ?></a>

            <?php 
            $template = $result->template()->name();
            if ($template == 'event'): 
              snippet('event-date', array('event' => $result));
            endif ?>
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