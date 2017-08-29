<?php
namespace GDO\OpenTimes;

use GDO\Form\GDT_Enum;

final class GDT_OpenHour extends GDT_Enum
{
    public $editable = false;
    
    public function __construct()
    {
        $this->enumValues('open', 'closed', 'unknown');
    }
    
    public $hoursColumn;
    public function hoursColumn(string $columnName)
    {
        $this->hoursColumn = $columnName;
        return $this;
    }
}
