Write a JavaScript program to create a new string of 4 copies of the last 3 characters of a given original string. The length of the given string must be 3 and above.
<hr>

<script>
	function new_string(str){
		if (str.length < 3) {
			return false;
		}

		var last_3 = str.slice(str.length - 3, str.length);
		return str + last_3.repeat(4);
	}

	console.log(new_string('abcdefg'));
</script>