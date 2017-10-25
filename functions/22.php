Write a JavaScript function that accepts two arguments, a string and a letter and the function will count the number of occurrences of the specified letter within the string.
<hr>

<script>
	var getNumberOfOcurrences = function(str, letter){
		"use strict";
		var count = 0;
		for(let i = 0; i < str.length; ++i){
		    if(str[i] === letter)
		        count++;
		}
		return count;
	}


	console.log(getNumberOfOcurrences('w3resource.com', 'o' ));
	console.log(getNumberOfOcurrences('panama', 'a' ));
</script>