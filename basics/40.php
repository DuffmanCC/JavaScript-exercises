Write a JavaScript program to check from two given integers if either one is 8 or their sum or difference is 8.
<hr>

<script>
	function checkEight(a, b){
		return ( a == 8 || b == 8 || a + b == 8 || a - b == 8);
	}
	console.log(checkEight(8, 5));
	console.log(checkEight(3, 5));
	console.log(checkEight(7, 5));
	console.log(checkEight(20, 12));
</script>

<?php 

function checkEight($a, $b){

	return ( $a == 8 || $b == 8 || $a + $b == 8 || $a - $b == 8);
}

if (checkEight(8, 5)) {
	echo 'true'.'<br>';
} else {
	echo 'false'.'<br>';
}

if (checkEight(3, 5)) {
	echo 'true'.'<br>';
} else {
	echo 'false'.'<br>';
}

if (checkEight(7, 5)) {
	echo 'true'.'<br>';
} else {
	echo 'false'.'<br>';
}

if (checkEight(20, 12)) {
	echo 'true'.'<br>';
} else {
	echo 'false'.'<br>';
}

 ?>