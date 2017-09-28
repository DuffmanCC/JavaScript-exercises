Write a JavaScript program to concatenate two strings and return the result. If the length of the strings are not same then remove the characters from the longer string. 
<hr>

<script>
	function concat(str1, str2){
		if(str1.length > str2.length){
			return str1.slice(0, str2.length) + str2;
		}
		if(str1.length < str2.length){
			return str2.slice(0, str1.length) + str1;
		}
		return str1 + str2;
	}

	console.log(concat('abcdef', 'abcd'));
	console.log(concat('abcd', 'abcd'));
	console.log(concat('abcd', 'abcdef'));
</script>