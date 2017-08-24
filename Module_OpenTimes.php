<?php
namespace GDO\OpenTimes;

use GDO\Core\Module;

final class Module_OpenTimes extends Module
{
    public $module_priority = 20;
    public function onLoadLanguage() { $this->loadLanguage('lang/open_times'); }
    
    public function onIncludeScripts()
    {
        $this->addJavascript('bower_components/opening_hours/opening_hours.js');
        $this->addJavascript('js/gwf-open-hours-ctrl.js');
    }
}
