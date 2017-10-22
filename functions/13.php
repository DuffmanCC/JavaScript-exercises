Write a JavaScript function to compute the factors of a positive integer.
<hr>

<script>
	var factors = function(num){
		var divisores = [];
		for (let i = 1; i <= num; i++) {
			if (num % i === 0) {
				divisores.push(i);
			}
		}
		return divisores;
	}

	console.log(factors(37));
	console.log(factors(37453));
	console.log(factors(353457));
	console.log(factors(373322));
</script>