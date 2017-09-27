Write a JavaScript program to create a new string without the first and last character of a given string.
<hr>

<script>
	function new_string(str){
		return str.slice(1, str.length -1);
	}

	console.log(new_string('holacaracola'));
</script>