Write a JavaScript function that accepts a string as a parameter and counts the number of vowels within the string.
<hr>

<script>
	var numberOfVowels = function(str){
		// por cada coincidencia agrega un valor al array.
		var array = str.match(/[aeiou]{1}/gi);
		return array.length;
	}

	console.log(numberOfVowels('En un lugar de la Mancha de cuyo nombre no quiero acordarme...'));
</script>