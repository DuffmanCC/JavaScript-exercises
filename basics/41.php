Write a JavaScript program to check three given numbers, if the three numbers are same return 30 otherwise return 40 and if two numbers are same return 20. 
<hr>

<script>
	function check3numbers(a, b, c){
		if ( a == b && a == c) {
			return 30;
		} else {
			if ( (a == b && a != c) || (a == c && a != b ) || (b == c && a != b )) {
				return 20;
			}
			return 40;
		}
	}

	console.log(check3numbers(10, 10, 10));
	console.log(check3numbers(10, 20, 30));
	console.log(check3numbers(10, 10, 20));
	console.log(check3numbers(10, 20, 10));
	console.log(check3numbers(10, 10, 20));
</script>


<?php 
	
	function check3numbers($a, $b, $c){
		if ( $a == $b && $a == $c) {
			echo '30'.'<br>';
		} else {
			if ( ($a == $b && $a != $c) || ($a == $c && $a != $b ) || ($b == $c && $a != $b )) {
				echo '20'.'<br>';
			} else {
				echo '40'.'<br>';
			}	
		}		
	}

	check3numbers(10, 10, 10);
	check3numbers(10, 20, 30);
	check3numbers(10, 10, 20);
	check3numbers(10, 20, 10);
	check3numbers(10, 10, 20);

 ?>