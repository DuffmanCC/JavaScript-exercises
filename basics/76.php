Write a JavaScript program to create a new array taking the first and last elements from a given array of integers and length must be greater or equal to 1.
<hr>

<script>
	function newArray(array){
		if(array.length > 1){
			return [array[0], array[array.length - 1]];
		}
		return false;
	}

	console.log(newArray([1, 2, 3, 4]));
</script>
