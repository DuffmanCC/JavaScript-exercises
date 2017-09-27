Write a JavaScript program to divide two positive numbers and return a string with properly formatted commas.
<hr>

<script>
	function divideNumbers(a, b){

		var result = Math.round(a / b);

		return result.toString().split('');

	}

console.log(divideNumbers(80, 6));

</script>

<?php 

function divide_numbers($a, $b){

	$result = round($a / $b);

	return str_split(strval($result), 1);
}

 ?>


 <pre><?php print_r(divide_numbers(80, 6))?></pre>