<?php
namespace GDO\OpenTimes;

use GDO\DB\GDT_Enum;

final class GDT_OpenHour extends GDT_Enum
{
	public $editable = false;
	
	protected function __construct()
	{
		$this->enumValues('open', 'closed', 'unknown');
	}
	
	public $hoursColumn;
	public function hoursColumn($columnName)
	{
		$this->hoursColumn = $columnName;
		return $this;
	}
}
