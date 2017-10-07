<?php
namespace GDO\OpenTimes;

use GDO\Core\GDT_Template;
use GDO\DB\GDT_String;

class GDT_OpenHours extends GDT_String
{
    public function defaultLabel() { return $this->label('open_times'); }
    
    public $editable = true;
    public $writable = true;

    public function render()
    {
        return GDT_Template::php('OpenTimes', 'form/open_hours.php', ['field' => $this]);
    }
    
    public function isOpen($time=null)
    {
        $time = $time === null ? time() : $time;
        $oh = $this->getValue();
        $oh->isOpen($time);
    }
    
//     public function initJSON()
//     {
//         return $this->getValue();
//     }
    
//     public function getValue()
//     {
//         return new OpenHours($this->getValue());
//     }
    
    public function validate($value)
    {
        if (!parent::validate($value))
        {
            return false;
        }
        if ($value === null)
        {
            return true;
        }
        $ot = new OpenHours($value);
        return $ot->isOpen() !== null;
    }
}
