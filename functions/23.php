Write a JavaScript function to find the first not repeated character. 
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

	var getFirstNotRepeatCharacter = function(str){

		var array = str.split('');
		var coincidences = {};

		// creo el objeto coincidences con todas las coincidencias
		// mirar ejercicio 17
		for (let i = 0; i < array.length; i++) {
			coincidences[array[i]] = countElement(array, array[i]);
		}

		var numberOfKeys = Object.keys(coincidences).length
		
		// la primera key que tenga valor 1 será el resultado
		for (var i = 0; i < numberOfKeys; i++) {
			if ( coincidences[Object.keys(coincidences)[i]] === 1 ) {
				return Object.keys(coincidences)[i];
			}
		}

		return coincidences;
	}

	console.log(getFirstNotRepeatCharacter('abcdefabd'));
	console.log(getFirstNotRepeatCharacter('abcdefacbd'));
	console.log(getFirstNotRepeatCharacter('abcdefabdxdce'));
</script>