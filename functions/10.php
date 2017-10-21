Write a JavaScript function which returns the n rows by n columns identity matrix.
<hr>

<script>
	var matrix = function(num){
		array = [];
		for (let i = 0; i < num; i++) {
			array.push([]);
			for (let j = 0; j < num; j++) {
				if (i === j) {
					array[i].push(1);
				} else {
					array[i].push(0);
				}			
			}
		}
		return array;
	}

	console.log(matrix(5));
</script>