<?php
class Plugin_days_hours_until extends Plugin
{
	public function index()
	{
		// $value = "Year-Month-Day"
		$date = $this->fetchParam('date');
		$interval = $this->core->getInterval($date);

		return array('years' => $interval->y,
					 'months' => $interval->m,
					 'days' => $interval->d,
					 'hours' => $interval->h);
	}
}
?>
