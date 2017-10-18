Write a JavaScript function that accepts a string as a parameter and converts the first letter of each word of the string in upper case.
<hr>

<script>
	function capWord(str){
		return str[0].toUpperCase() + str.slice(1, str.length);
	}

	function capWords(str){
		var str = str.split(' ');
		var result = [];
		for (let i = 0; i < str.length; i++) {
			result.push(capWord(str[i]));
		}
		return result.join(' ');
	}

	console.log(capWords('En un lugar de la Mancha de cuyo nombre no quiero acordarme'));

</script>