Write a JavaScript program to check if 1 appears in first or last position of a given array of integers. The array length must be greater or equal to 1.
<hr>

<script>
	function is1FirstOrLast(integers){
		if (integers.length < 1 ) {
			return false;
		}
		return (integers[0] === 1 || integers[integers.length - 1] === 1);
	}

	console.log(is1FirstOrLast([1, 2, 3]));
	console.log(is1FirstOrLast([1, 2, 1]));
	console.log(is1FirstOrLast([3, 2, 3]));
	console.log(is1FirstOrLast([5, 2, 1]));
</script>