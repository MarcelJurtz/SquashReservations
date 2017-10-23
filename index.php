<?php
	include('modules/calendar.inc.php');

	include('modules/header.inc.html');

	$daysDifference = 7;
	$today = getMinDate();
	$nextWeek = getMaxDate($today, $daysDifference);

	print(getDateHeader($today, $nextWeek));
	drawCalendar(10, 20, 30);

	function getDateHeader($min, $max) {
		return ($min->format('d.m.Y') . " - " . $max->format('d.m.Y'));
	}

	function getMinDate() {
		return new DateTime();
	}

	function getMaxDate($minDate, $days) {
		$date = new DateTime();
		$date->add(new DateInterval('P'.$days.'D'));
		return $date;
	}
?>