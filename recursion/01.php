Write a JavaScript program to calculate the factorial of a number.
<hr>

<script>
	var getFactorial = function(num){

		var tmp = num;

		while(num > 2){ // no hace falta multiplicarlo por 1
			num--; // la primera iteración no es consigo mismo	
			tmp *= num;	// same as tmp = tmp * num;
		}

		return tmp;
	}

	console.log(getFactorial(8));
	console.log(getFactorial(7));
	console.log(getFactorial(6));
	console.log(getFactorial(5));
	console.log(getFactorial(4));
	console.log(getFactorial(3));
	console.log(getFactorial(2));


	var getFactorialWithFor = function(num){

		var tmp = num;

		for (var i = num - 1; i >= 1; i--) {
			tmp = tmp * i;
		}

		return tmp;
	}

	console.log(getFactorialWithFor(8));
	console.log(getFactorialWithFor(7));
	console.log(getFactorialWithFor(6));
	console.log(getFactorialWithFor(5));
	console.log(getFactorialWithFor(4));
	console.log(getFactorialWithFor(3));
	console.log(getFactorialWithFor(2));
</script>