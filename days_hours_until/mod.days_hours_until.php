<?php
class Modifier_days_hours_until extends Modifier
{
	public function index($value, $parameters=array())
	{
		// $value = "Year-Month-Day"
		$interval = $this->core->getInterval($value));

		return $interval->format('%a days, %h hours');
	}
}