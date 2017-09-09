Write a JavaScript program to convert a given number to hours and minutes.
<hr>

<script>
	function numberToHoursAndMinutes(number){
		var hours = Math.trunc(number / 60).toString();
		var minutes = (number % 60).toString();
		return hours + ' hours and ' + minutes + ' minutes';
	}

	console.log(numberToHoursAndMinutes(1354));
	console.log(numberToHoursAndMinutes(90));
	console.log(numberToHoursAndMinutes(244));
	console.log(numberToHoursAndMinutes(54));
</script>

<?php 

function number_to_hours_and_minutes($number){
	$hours = floor($number / 60);
	$minutes = $number % 60;
	return $hours.' hours and '.$minutes.' minutes';
}

 ?>

 <p><?php echo number_to_hours_and_minutes(1354); ?></p>
 <p><?php echo number_to_hours_and_minutes(90); ?></p>
 <p><?php echo number_to_hours_and_minutes(244); ?></p>
 <p><?php echo number_to_hours_and_minutes(54); ?></p>