<?php
namespace GDO\OpenTimes\Method;

use GDO\Core\MethodCronjob;
use GDO\Core\GDO;
use GDO\OpenTimes\GDT_OpenHour;
use GDO\OpenTimes\OpenHours;
use ReflectionClass;
/**
 * Precompute shop open times.
 * @author gizmore
 */
final class OpenHourCronjob extends MethodCronjob
{
	public function run()
	{
		foreach (get_declared_classes() as $className)
		{
			if (is_subclass_of($className, 'GDO\\Core\\GDO'))
			{
				$class = new ReflectionClass($className);
				if (!$class->isAbstract())
				{
					$table = GDO::tableFor($className);
					if (!$table->gdoAbstract())
					{
						$this->runForGDO($table);
					}
				}
			}
		}
	}
	
	private function runForGDO(GDO $table)
	{
		foreach ($table->gdoColumnsCache() as $gdoType)
		{
			if ($gdoType instanceof GDT_OpenHour)
			{
				$this->runForColumn($table, $gdoType);
			}
		}
	}
	
	private function runForColumn(GDO $table, GDT_OpenHour $column)
	{
		$result = $table->select()->exec();
		while ($gdo = $table->fetch($result))
		{
			$hoursText = $gdo->getVar($column->hoursColumn);
			$hours = new OpenHours($hoursText);
			$openClose = $hours->isOpen();
			if ($openClose === true)
			{
				$openClose = 'open';
			}
			elseif ($openClose === false)
			{
				$openClose = 'closed';
			}
			else
			{
				$openClose = 'unknown';
			}
			$gdo->saveVar($column->name, $openClose);
		}
	}

	
}


