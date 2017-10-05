Write a JavaScript program to check if the first and last elements are equal of a given array of integers length 3. 
<hr>

<script>
	function areEqual(array){
		if (array.length != 3) {
			return false;
		}
		for (let i = 0; i < array.length; i++) {
			if(!Number.isInteger(array[i])){
				return false;
			}
		}
		return (array[0] === array[array.length -1]);
	}

	console.log(areEqual([1, 2, 1]));
	console.log(areEqual([1, 2, 5]));
	console.log(areEqual([1, 2, 2]));
	console.log(areEqual([2, 2, 2]));
	console.log(areEqual('hola'));
	console.log(areEqual(5));
	console.log(areEqual([5, 4]));
	console.log(areEqual([4, 4, 4, 4]));
</script>