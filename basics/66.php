Write a JavaScript program to display the city name if the string begins with "Los" or "New" otherwise return blank.
<hr>

<script>
	function displayCity(name){
		if ( name.slice(0, 3) == 'Los' || name.slice(0,3 ) == 'New' ) {
			return name;
		}
		return '';
	}

	console.log(displayCity('Los Angeles'));
	console.log(displayCity('New York'));
	console.log(displayCity('Barcelona'));
	console.log(displayCity('Madrid'));
</script>

