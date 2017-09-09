 Write a JavaScript program to capitalize the first letter of each word of a given string.
 <hr>

 <script>

  	function capitalizeFirstLetter(string) {
	    return string[0].toUpperCase() + string.slice(1);
	}

 	function capitalizeWords(str){
 		var words = str.split(' ');
 		var capWords = [];
 		for (let i = 0; i < words.length; i++) {
 			capWords.push(capitalizeFirstLetter(words[i]));
 		}

 		console.log(capWords.join(' '));
 	}

 	capitalizeWords('esto es un ejercicio de JavaScript');

 </script>


 <?php 

 // php ya tiene un método que devuelve la una string con la primera letra
 // en muyúscula

 function capitalize_words($str){
 	$words = explode(' ', $str);
 	$capWords = [];
 	for ($i=0; $i < count($words); $i++) { 
 		$capWords[] = ucfirst($words[$i]);
 	}

 	return implode(' ', $capWords);

 }

 echo capitalize_words('esto es un ejercicio de PHP');

  ?>