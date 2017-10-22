<?php
	include('modules/calendar.php');

	include('modules/header.html');
	print(getDateHeader(1));
	drawCalendar(30);

	function getDateHeader($weeks) {
		$today = new DateTime();
		$nextWeek = new DateTime();
		$nextWeek->add(new DateInterval('P7D'));
		return ($today->format('d.m.Y') . " - " . $nextWeek->format('d.m.Y'));
	}
?>