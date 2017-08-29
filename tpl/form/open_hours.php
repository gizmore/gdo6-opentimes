<?php
use GDO\OpenTimes\GDT_OpenHours;
use GDO\UI\GDT_Icon;
$field instanceof GDT_OpenHours;
?>
<md-input-container
 class="md-block md-float md-icon-left<?= $field->classError(); ?>"
 flex
 ng-controller="GDOOpenHoursCtrl"
 ng-init='initJSON(<?=json_encode($field->initJSON()); ?>)'>

  <label for="form[<?= $field->name; ?>]"><?= $field->label; ?></label>
  <?= GDT_Icon::iconS('schedule'); ?>
<!--   <input type="text" ng-model="data.openHours.display" nag-click="openHoursDialog($event)" /> -->

  <input
   type="text"
   name="form[<?= $field->name; ?>]"
   value="<?= $field->displayVar(); ?>"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlPattern(); ?>
   <?= $field->htmlDisabled(); ?>/>
  <div class="gdo-form-error"><?= $field->error; ?></div>
</md-input-container>
