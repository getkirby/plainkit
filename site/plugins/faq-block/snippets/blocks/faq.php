<div class="faq">
  <h2><?= $block->headline() ?></h2>
  <p><?= $block->text() ?></p>
  <dl>
    <?= $block->blocks()->toBlocks() ?>
  </dl>
</div>
