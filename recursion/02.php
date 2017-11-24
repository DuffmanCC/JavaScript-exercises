Write a JavaScript program to find the greatest common divisor (gcd) of two positive numbers.
<hr>

<script>

	var getGreatestNumber = function(num1, num2){

		if (num1 === num2) {
			return num1;
		}

		if(num1 > num2){
			return num1;
		}

		return num2;
	}

	var getLowestNumber = function(num1, num2){

		if (num1 === num2) {
			return num1;
		}

		if(num1 > num2){
			return num2;
		}

		return num1;
	}

	var getGreatestCommonDivisor = function(num1, num2){

		var maxNum = getGreatestNumber(num1, num2);
		var minNum = getLowestNumber(num1, num2);

		var tmp = minNum;

		while(tmp > 1){
			tmp--;
			if(maxNum % tmp === 0 && minNum % tmp === 0){				
				return tmp;
			}
		}
	}


	//console.log(getGreatestCommonDivisor(20, 15));
	//console.log(getGreatestCommonDivisor(2154, 458));



	var gcd = function(a, b) {
		var result;
	    if ( !b ) {
	        return a;
	    }

	    result = gcd(b, a % b);
	    console.log(result);
	    return result;
	};

	//console.log(gcd(20, 15));
	console.log(gcd(2154, 459));
	console.log('-------------');


	var gcdx = function(a, b) {
		var result;
	    result = gcdx(a, b + a);
	    console.log(result);
	    return result;
	};

	console.log(gcdx(1, 2));

	
</script>