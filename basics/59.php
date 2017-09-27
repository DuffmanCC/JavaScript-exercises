Write a JavaScript program to extract the first half of a string of even length. 
<hr>

<script>
	function even_string(str){
		if(str.length % 2 != 0){
			return false;
		}
		return str.slice(0, str.length / 2);
	}

	console.log(even_string('holacaracola'));
</script>