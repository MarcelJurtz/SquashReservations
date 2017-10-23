<?php
	function getOpeningTimesForWeekDay($index) {

		$openSunday = new DateTime();
		$openMonday = new DateTime();
		$openTuesday = new DateTime();
		$openWednesday = new DateTime();
		$openThursday = new DateTime();
		$openFriday = new DateTime();
		$openSaturday = new DateTime();

		return array(
			$openSunday,
			$openMonday,
			$openTuesday,
			$openWednesday,
			$openFriday,
			$openSaturday
		);
	}
?>