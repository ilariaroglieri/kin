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
            <?php 
            $template = $result->intendedTemplate()->name();
            if ($template == 'catalogue'): ?>
              <?php if($pdf = $result->pdf()->toFile()): ?>
                <a class="bold" href="<?= $pdf->url(); ?>" alt="<?= $result->title()->html()?>"><?= $result->title() ?></a>
              <?php endif; ?>
              <h3 class="type s-medium">Pdf</h3>
            <?php else: ?>
              <a class="bold" href="<?= $result->url() ?>" alt="<?= $result->title() ?>"><?= $result->title() ?></a>
              <?php if ($template == 'event'): 
                snippet('event-type', array('event' => $result)); 
                snippet('event-date', array('event' => $result)); 
              endif;
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