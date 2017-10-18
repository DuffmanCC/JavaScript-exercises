Write a JavaScript function that returns a passed string with letters in alphabetical order.
<hr>

<script>
	function orderString(str){
		return str.split('').sort().join('');
	}

	console.log(orderString('sargento'));
</script>