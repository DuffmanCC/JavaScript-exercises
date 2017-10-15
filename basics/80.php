Write a JavaScript program to swap the first and last elements of a given array of integers. The array length should be at least 1.
<hr>

<script>
	function swapElements(array){
		if(array.length < 1){
			return false;
		}
		var firstElement = array[0];
		var lastElement = array[array.length - 1];
		var restArray = array.slice(1, array.length - 1);

		var result = [];

		result.push(lastElement);
		for (let i = 0; i < restArray.length; i++) {
			result.push(restArray[i]);
		}
		result.push(firstElement);

		return result;
	}

	console.log(swapElements([1, 2, 3, 4, 5]));
	console.log(swapElements([1, 2, 3, 4, 5, 6, 7]));
	console.log(swapElements([-1, 0, 1, 2, 3, 4, 5]));
</script>