Write a JavaScript program to move last three character to the start of a given string. The string length must be greater or equal to three. 
<hr>

<script>
	function moveLast3characters(str){
		if(str.length < 3){
			return false;
		}
		return str.slice(str.length -3, str.length) + str.slice(0, str.length - 3);
	}

	console.log(moveLast3characters('abcdefg'));
</script>