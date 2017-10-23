Write a JavaScript function to compute the value of bn where n is the exponent and b is the bases. Accept b and n from the user and display the result.
<hr>

<script>
	var exponent = function(b, n){
		var base = b;
		for (var i = 1; i < n; i++) {
			b = base * b;
		}
		return b;
	}

	console.log(exponent(3, 3));
	console.log(exponent(2, 5));
	console.log(exponent(10, 4));
</script>