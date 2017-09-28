Write a JavaScript program to test if a string end with "Script". The string length must be greater or equal to 6.
<hr>

<script>
	function checkStrEnd(str){
		if(str.length < 6){
			return false;
		}
		return str.slice(str.length - 6, str.length) == 'Script';
	}

	console.log(checkStrEnd('holacaraloa'));
	console.log(checkStrEnd('holacarScript'));
	console.log(checkStrEnd('holacarscript'));
	console.log(checkStrEnd('Scrip'));
</script>