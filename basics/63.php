Write a JavaScript program to create a string using the middle three characters of a given string of odd length. The string length must be greater or equal to three.
<hr>

<script>
	
	function middleThree(str){
		if( str.length < 3 || str.length % 2 == 0){
			return false;
		}

		return str.slice( (Math.floor(str.length / 2)) - 1, (Math.floor(str.length / 2)) + 2);

	}


	console.log(middleThree('abcdefghijklm'));
</script>