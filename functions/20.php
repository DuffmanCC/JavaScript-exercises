Write a JavaScript function that generates a string id (specified length) of random characters.
<hr>

<script>



	function generateRandomID(idLenght){

		var characterList = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
		var resultId = [];

		for (var i = 0; i < idLenght; i++) {
			// random num between 1 and characterList.length
			resultId.push(characterList[Math.floor((Math.random() * characterList.length) + 1)]);
		}

		return resultId.join('');

	}


	console.log(generateRandomID(4));
	console.log(generateRandomID(8));
	console.log(generateRandomID(12));
	console.log(generateRandomID(16));
</script>