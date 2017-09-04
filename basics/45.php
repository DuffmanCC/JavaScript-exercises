Write a JavaScript program to check two given integer values and return true if one of the number is 15 or if their sum or difference is 15.
<hr>

<script>
	function check2numbers(a, b){
		var a;
		var b;
		return (a == 15 || b == 15 || a + b == 15 || a - b == 15 || b - a == 15);
	}

	console.log(check2numbers(15, 5));
	console.log(check2numbers(15, 15));
	console.log(check2numbers(5, 10));
	console.log(check2numbers(15, 0));
	console.log(check2numbers(32, 17));
	console.log(check2numbers(5, 6));
	console.log(check2numbers(25, 40));
</script>


<?php  

function check_2_numbers($a, $b){
	if ($a == 15 || $b == 15 || $a + $b == 15 || $a - $b == 15 || $b - $a == 15){
		echo 'true<br>';
	} else {
		echo 'false</br>';
	}
}

check_2_numbers(15, 5);
check_2_numbers(15, 15);
check_2_numbers(5, 10);
check_2_numbers(15, 0);
check_2_numbers(32, 17);
check_2_numbers(5, 6);
check_2_numbers(25, 40);

?>