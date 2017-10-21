Write a JavaScript function which will take an array of numbers stored and find the second lowest and second greatest numbers, respectively.
<hr>

<script>
	var getMaxOfArray = function(numArray) {
	  return Math.max.apply(null, numArray);
	}

	var getMinOfArray = function(numArray) {
	  return Math.min.apply(null, numArray);
	}

	var deleteMinMax = function(numArray){
		numArray.splice(numArray.indexOf(getMaxOfArray(numArray)), 1);
		numArray.splice(numArray.indexOf(getMinOfArray(numArray)), 1);
		return numArray;
	}

	var secondLowestGreates = function(numArray){
		var result = [];
		// nueva array sin el min y el max
		var arr = deleteMinMax(numArray);
		result.push(Math.max.apply(null, arr));
		result.push(Math.min.apply(null, arr));
		return result;
	}

	console.log(secondLowestGreates([1, 2, 3, 4, 5, -1, 8, -4, 23]));
</script>