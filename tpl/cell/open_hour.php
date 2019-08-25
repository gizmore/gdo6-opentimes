<?php
use GDO\OpenTimes\GDT_OpenHour;

$field instanceof GDT_OpenHour;
?>
<?php
switch ($field->getValue())
{
	case 'open': echo t('enum_open'); break;
	case 'closed': echo t('enum_closed'); break;
	case 'unknown': echo t('enum_unknown'); break;
}
