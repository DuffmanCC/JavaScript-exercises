Write a JavaScript program to find the larger value between the first or last and set all the other elements with that value. Display the new array. 
<hr>

<script>
	function largerValue(array){
		if (array[0] > array[array.length - 1]) {
			for (var i = 0; i < array.length; i++) {
				array[i] = array[0];
			}
		} else {
			for (var i = 0; i < array.length; i++) {
				array[i] = array[array.length - 1];
			}			
		}
		return array;
	}

	console.log(largerValue([1, 2, 3]));
	console.log(largerValue([15, 2, 3]));
	console.log(largerValue([1, 2, 1]));
	console.log(largerValue([3, 2, 3]));
</script>