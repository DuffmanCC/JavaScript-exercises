Write a JavaScript function that reverse a number.
<hr>

<script>

	function reverseNumber(num){
		var result = num.toString();
		return parseInt(result.split('').reverse().join(''));
	}

	console.log(reverseNumber(356));

</script>