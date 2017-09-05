Write a JavaScript program to reverse a given string. 
<hr>

<script>
	function reverseString(str){
		var str;
		var inverStr = '';

		for (let i = str.length - 1; i >= 0; i--) {
			inverStr = inverStr + str.charAt(i);
		}
		return inverStr;
	}

	console.log(reverseString('hola'));


	// de esta forma convertimos a array y le damos la vuelta al array

	function string_reverse(str){
	    return str.split('').reverse().join('');
	}	
</script>


<?php 

// php tiene una función para invertir una string

echo strrev("hola");

 ?>