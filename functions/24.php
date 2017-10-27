Write a JavaScript function to apply Bubble Sort algorithm.
<hr>

<script>
	var applyBubble = function(array){

		var currentElement;

		// necesitaremos hacer tantas iteraciones como longitud del array menos 1.

		for (let j = 0; j < array.length - 1; j++) {
			for (let i = 0; i < array.length; i++) {
				
				if (array[i] < array[i + 1]) {

					currentElement = array[i];
					array[i] = array[i + 1];
					array[i + 1] = currentElement;
				}
			}			
		}

		return array;

	}

	console.log(applyBubble([12, 345, 4, 546, 122, 84, 98, 64, 9, 1, 3223, 455, 23, 234, 213]));
</script>