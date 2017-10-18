Write a JavaScript function that generates all combinations of a string.
<hr>

<script>
	function allCombinationsString(str){
		var results = [];
		var strLength = str.length;
		str = str.split('');
		for (let i = 0; i <= strLength; i++) {
			for (let j = 1; j <= strLength; j++) {
				results.push(str.slice(i,j).join(''));
			}	
		}
		console.log(results); // array sin limpiar

		// limpio el array de los valores vacíos
		for (let i = 0; i < results.length; i++) {
			if (results[i] === ""){
				results.splice(i, 1);
				i--; // cuando se elimina un elemento del array se actualiza el índice, para evitar que se salte índices le resto uno
			}
		}
		return results;
	}

	console.log(allCombinationsString('sargento'));
</script>