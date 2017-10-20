Write a JavaScript function that accepts a string as a parameter and find the longest word within the string.
<hr>

<script>
	function longestWord(str){
		var array =  str.split(' ');
		result = array[0];

		for (let i = 1; i < array.length; i++) {
			if (array[i].length > result.length ) {
				result = array[i];
			}
		}
		return result;
	}

	// si hay dos palabras con la misma longitud devuelve la primera.
	// si hay signos de puntuación las palabras no son separadas correctamente
	// utilizar regex para crear el array de palabras

	console.log(longestWord('En un lugar de la Mancha de cuyo nombre no quiero acordarme'));

</script>

