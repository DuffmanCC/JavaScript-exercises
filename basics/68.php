Write a JavaScript program to create a new string using the first and last n characters from a given sting. The string length must be greater or equal to n
<hr>

<script>
	function newString(str, n){
		if( str.length <= n){
			return false;
		}
		return str[0] + str.slice(str.length - n, str.length);
	}

	console.log(newString('hola', 2));
	console.log(newString('mortadelo', 5));
	console.log(newString('quepasatio', 8));
</script>