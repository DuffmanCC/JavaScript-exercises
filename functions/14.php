Write a JavaScript function to convert an amount to coins. Go to the editor
Sample function : amountTocoins(46, [25, 10, 5, 2, 1])
<hr>

<script>
	var amountTocoins = function(amount, coins){
		var result = [];

		for (let i = 0; i < coins.length; i++) {
			while (amount / coins[i] >= 1) {
				result.push(coins[i]);
				amount = amount - coins[i];
			}
		}
		return result;
	}

	console.log(amountTocoins(52, [25, 10, 5, 2, 1]));
	console.log(amountTocoins(521, [100, 20, 10, 2, 1]));

</script>