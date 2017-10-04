Write a JavaScript program to create a new string from a given string, removing the first and last characters of the string if the first or last character are 'P'. Return the original string if the condition is not satisfied.
<hr>

<script>
	function newString(str){
		if( str[0] == 'P' && str[str.length - 1] == 'P'){
			return str.slice(1, str.length - 1);
		}
		return str;
	}

	console.log(newString('PamplonaP'));
	console.log(newString('Pamplona'));
	console.log(newString('hep'));
	console.log(newString('hola'));
	console.log(newString('PoPs'));
</script>