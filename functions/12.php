Write a JavaScript function which says whether a number is perfect. 
<hr>

<script>

	var sum = function(total, n){
		return total + n;
	}

	var isPerfect = function(num){
		var divisores = [];
		for (let i = 1; i <= num; i++) {
			if (num % i === 0) {
				divisores.push(i);
			}
		}

		// The reduce() method reduces the array to a single value.
		// The reduce() method executes a provided function for each value of the array (from left-to-right).
		// The return value of the function is stored in an accumulator (result/total).
		var suma = divisores.reduce(sum);

		// a perfect number is a positive integer that is equal to the sum of its proper positive divisors, 
		// that is, the sum of its positive divisors excluding the number itself
		return suma / 2 === num;
	}

	console.log(isPerfect(28));
	console.log(isPerfect(496));
	console.log(isPerfect(8128));
	console.log(isPerfect(456487));
</script>