Write a JavaScript function to extract unique characters from a string.
<hr>

<script>
	var extractUniqueCharacters = function(str){
		var array = str.split('');
		var unique = '';
		for (var i = 0; i < array.length; i++) {
			unique = array[i];
			for (var j =  i + 1; j < array.length; j++) {
				if (unique === array[j] ) {
					array.splice(j, 1);
				}
			}
		}
		return array.join('');
	}

	console.log(extractUniqueCharacters('thequickbrownfoxjumpsoverthelazydog'));
	console.log('thequickbrownfxjmpsvlazydg');

	// continuar...
</script>