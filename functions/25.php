Write a JavaScript function that accept a list of country names as input and returns the longest country name as output.
<hr>

<script>
	var getLongestCountryName = function(array){
		var countryLenth = []
		var indexOfResult;

		for (var i = 0; i < array.length; i++) {
			countryLenth.push(array[i].length);
		}

		indexOfResult = Math.max.apply( Math, countryLenth );

		console.log('longitud mas larga de nombre de pais: ' + indexOfResult);
		console.log('posicion del pais en el array: ' + countryLenth.indexOf(indexOfResult))

		return array[countryLenth.indexOf(indexOfResult)];

	}

	console.log(getLongestCountryName(["Australia", "Germany", "United States of America"]));
</script>