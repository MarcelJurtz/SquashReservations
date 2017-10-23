<?php

	include 'daysConstants.inc.php';

	class Day {
		private $_date;
		private $daysOfWeek = array(DAY_SUNDAY, DAY_MONDAY, DAY_TUESDAY, DAY_WEDNESDAY, DAY_THURSDAY, DAY_FRIDAY, DAY_SATURDAY);
		private $dayOfWeek;

  		public function __construct($date) {
    		$this->_date = $date;
    		$this->dayOfWeek = $this->daysOfWeek[$date->format('w')];
  		}

  		public function getFormattedDate() {
    		return $this->dayOfWeek . ", " . $this->_date->format('d.m.Y');
  		}
	}
?>