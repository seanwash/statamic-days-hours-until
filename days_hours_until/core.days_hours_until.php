<?php
class Core_days_hours_until extends Core
{
	public function getInterval($date)
	{		
		// $date = "Year-Month-Day"
		$future_date = new DateTime($date);
		return($future_date->diff(new DateTime()));
	}
}