Write a JavaScript function that returns array elements larger than a number.
<hr>

<script>
	function biggerElementes(array, number){
		var position;
		array.sort(function(a, b){return a-b});
		for (let i = 0; i < array.length; i++) {
			if(array[i] === number){
				position = i + 1;
			}
		}
		return array.slice(position, array.length);
	}

	console.log(biggerElementes([11, 45, 4, 31, 64, 10], 11));
</script>

