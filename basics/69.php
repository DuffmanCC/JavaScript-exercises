Write a JavaScript program to compute the sum of three elements of a given array of integers of length 3.
<hr>

<script>
	function computeElements(sum){
		return sum[0] + sum[1] + sum[2];
	}

	console.log(computeElements([1, 2, 3]));
	console.log(computeElements([3, 2, 3]));
	console.log(computeElements([1, 5, 3]));
</script>