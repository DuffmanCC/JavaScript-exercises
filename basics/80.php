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
	console.log(swapElements([5]));
	console.log(swapElements([]));

	// no entiendo esta solución
	function swap(arra) {
	    [arra[0], arra[arra.length - 1]] = [arra[arra.length - 1], arra[0]];
	    return arra;
	}
	console.log(swap([1, 2, 3, 4]));  
	console.log(swap([0, 2, 1]));  
	console.log(swap([3]));


	function swap2(arra) {
		var firstElement = arra[0];
	    arra[0] = arra[arra.length - 1];
	    arra[arra.length - 1] = firstElement;
	    return arra;
	}
	console.log(swap2([1, 2, 3, 4]));  
	console.log(swap2([0, 2, 1]));  
	console.log(swap2([3]));
</script>