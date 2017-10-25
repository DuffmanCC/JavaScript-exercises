Write a JavaScript function to get all possible subset with a fixed length (for example 3) combinations in an array. 
<hr>

<script>
	var allCombinationArray = function(array){

		var result = [];
		var element = '';

		for (let i = 0; i < array.length; i++) {
			for (let j = 0; j < array.length; j++) {
				for (let k = 0; k < array.length; k++) {
					element = array[i] + array[j] + array[k];
					result.push(element);
				}
			}
		}
		return result;
	}

	console.log(allCombinationArray(['a', 'b', 'c']));

</script>