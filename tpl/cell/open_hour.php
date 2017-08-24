<?php
use GDO\OpenTimes\GDO_OpenHour;

$field instanceof GDO_OpenHour;
?>
<?php
switch ($field->getValue())
{
    case 'open': echo t('enum_open'); break;
    case 'closed': echo t('enum_open'); break;
    case 'unknown': echo t('enum_unknown'); break;
}
