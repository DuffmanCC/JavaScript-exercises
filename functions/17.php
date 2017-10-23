Write a JavaScript function to get the number of occurrences of each letter in specified string.
<hr>

<script>
	var countElement = function(str, element){
		var count = 0;
		for(let i = 0; i < str.length; ++i){
		    if(str[i] == element)
		        count++;
		}
		return count;
	}

	var numberOccurrences = function(str){
		var result = {};
		// la key se genera de forma dinámica por eso usamos []
		// al repetirse la key no hay duplicados en el objeto
		// faltaría limpiar el objeto con los elementos que no fueran letras
		for (let i = 0; i < str.length; i++) {
			result[str[i]] = countElement(str, str[i]);
		}
		return result;
	}

	console.log(numberOccurrences('The quick brown fox jumps over the lazy dog'));

</script>