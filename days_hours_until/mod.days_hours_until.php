<?php
class Modifier_days_hours_until extends Modifier
{
	public function index($value, $parameters=array())
	{
		// $value = "Year-Month-Day"
		$now = new DateTime();
		$future_date = new DateTime($value);
		$interval = $future_date->diff($now);

		return $interval->format('%a days, %h hours');
	}
}
?>
