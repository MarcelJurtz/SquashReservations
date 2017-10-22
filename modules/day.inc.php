<?php
	class day {
		private $_date;

  		public function __construct($date) {
    		$this->_date = $date;
  		}

  		public function getFormattedDate() {
    		return $this->_date->format('d.m.Y');
  		}
	}
?>