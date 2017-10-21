Write a JavaScript function that accepts a number as a parameter and check the number is prime or not.
<hr>

<script>
	var isPrime = function(num){
		if (num === 2) {
			return true;
		}
		if (num % 2 === 0 || num === 1) {
			return false;
		}
		for (let i = num - 1; i > 2; i--) {
			if (num % i === 0) {
				return false;
			}
		}
		return true;
	}

	console.log(isPrime(2));
</script>