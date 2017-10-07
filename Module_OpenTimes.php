<?php
namespace GDO\OpenTimes;

use GDO\Core\GDO_Module;

final class Module_OpenTimes extends GDO_Module
{
    public $module_priority = 20;
    public function onLoadLanguage() { $this->loadLanguage('lang/open_times'); }
    
    public function onIncludeScripts()
    {
        $this->addJavascript('bower_components/opening_hours/opening_hours.js');
        if (module_enabled('Angular'))
        {
            $this->addJavascript('js/gwf-open-hours-ctrl.js');
        }
    }
}
