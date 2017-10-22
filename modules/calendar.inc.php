<?php
	/*
		Draws the calendar for the current day
		Arguments:
		* TimeInterval - How long is one unit?
	*/

		include 'day.inc.php';

		function drawCalendar($startTimeHours, $endTimeHours, $unitLengthInMinutes) {
			$day0 = new DateTime();
			$day1 = new DateTime();
			$day2 = new DateTime();
			$day3 = new DateTime();
			$day4 = new DateTime();
			$day5 = new DateTime();
			$day6 = new DateTime();
			$day1->add(new DateInterval('P1D'));
			$day2->add(new DateInterval('P2D'));
			$day3->add(new DateInterval('P3D'));
			$day4->add(new DateInterval('P4D'));
			$day5->add(new DateInterval('P5D'));
			$day6->add(new DateInterval('P6D'));

			$currentWeekItems = array(
  				new day($day0),
  				new day($day1),
  				new day($day2),
  				new day($day3),
  				new day($day4),
  				new day($day5),
  				new day($day6)
			);

			echo '<table>';
				echo '<tr>';
					echo '<td></td>';
					for($i = 0; $i < sizeof($currentWeekItems); $i++) {
  						echo '<td>';
							echo $currentWeekItems[$i]->getFormattedDate();
						echo '</td>';
					}
				echo '</tr>';
			echo '</table>';
		}

?>