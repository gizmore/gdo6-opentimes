<?php
use GDO\OpenTimes\GDT_OpenHours;
use GDO\UI\GDT_Icon;
$field instanceof GDT_OpenHours;
?>
<div class="gdo-container<?= $field->classError(); ?>">
  <?=$field->htmlTooltip()?>
  <?= $field->htmlIcon(); ?>
  <label for="form[<?= $field->name; ?>]"><?= $field->displayLabel(); ?></label>
  <textarea
   name="form[<?=$field->name?>]"
   <?=$field->htmlRequired()?>
   <?=$field->htmlDisabled()?> /><?=$field->displayVar()?></textarea>
  <?= $field->htmlError(); ?>
</div>
