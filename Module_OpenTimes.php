<?php
namespace GDO\OpenTimes;

use GDO\Core\GDO_Module;
use GDO\Angular\Module_Angular;
use GDO\Core\Application;

/**
 * Include open times library.
 * If angular or material is used, angular ctrls will be loaded.
 * @author gizmore
 * @version 6.10.1
 * @since 6.3.0
 */
final class Module_OpenTimes extends GDO_Module
{
	public $module_priority = 20;
	public $module_license = "BSD";
	public function onLoadLanguage() { $this->loadLanguage('lang/open_times'); }
	
	public function onIncludeScripts()
	{
		if (module_enabled('Angular'))
		{
		    if (Module_Angular::instance()->cfgIncludeScripts() ||
		        Application::instance()->hasTheme('material'))
		    {
    			$this->addJavascript('js/gwf-open-hours-ctrl.js');
		    }
		}
		$this->addJavascript('bower_components/opening_hours/opening_hours.js');
	}

}
