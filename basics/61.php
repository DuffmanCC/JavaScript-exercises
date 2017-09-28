Write a JavaScript program to concatenate two strings except their first character.
<hr>

<script>
	function concat(str1, str2){
		return str1.slice(1, str1.length) + str2.slice(1, str2.lenght);
	}

	console.log(concat('hola', 'hola'));
</script>