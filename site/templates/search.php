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
          <div class="results-list event-list d-two-thirds t-whole p-relative">
            <?php 
              $template = $result->intendedTemplate()->name();
              $href = $result->pdf()->toFile() ? $result->pdf()->toFile()->url() : $result->url();
            ?>
            <a href="<?= $href; ?>" class="overall" alt="<?= $result->title()->html()?>"></a>
            <div class="result-info">
              <h2 class="bold s-regular"><?= $result->title() ?></h2>
              <?php if ($template == 'catalogue'): ?>
                <h3 class="type s-medium spacing-t-half-half">Pdf</h3>
                <h3 class="type s-medium spacing-t-half-half"><?= $result->published()->toDate('d.m.Y') ?></h3>
              <?php elseif ($template == 'event'): 
                snippet('event-type', array('event' => $result)); 
                snippet('event-date', array('event' => $result)); 
              endif ?>
            </div>
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