<?php
use GDO\OpenTimes\GDT_OpenHours;
use GDO\UI\GDT_Icon;
$field instanceof GDT_OpenHours;
?>
<md-input-container
 class="md-block md-float md-icon-left<?= $field->classError(); ?>"
 flex
 ng-controller="GDOOpenHoursCtrl"
 ng-init='initJSON(<?=json_encode($field->configJSON()); ?>)'>

  <label for="form[<?= $field->name; ?>]"><?= $field->displayLabel(); ?></label>
  <?= GDT_Icon::iconS('schedule'); ?>
<!--   <input type="text" ng-model="data.openHours.display" nag-click="openHoursDialog($event)" /> -->

  <input
   ng-click="openHoursDialog($event)"
   ng-model="data.openHours.display"
   type="text"
   name="form[<?= $field->name; ?>]"
   value="<?= $field->displayVar(); ?>"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlPattern(); ?>
   <?= $field->htmlDisabled(); ?> />
  <?= $field->htmlError(); ?>
</md-input-container>
