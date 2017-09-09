Write a JavaScript program to replace every character in a given string with the character following it in the alphabet.
<hr>

<script>
	function replaceCharacter(str){
		var abc = 'abcdefghijklmnñopqrstuvwxyz';
		var result = [];

		for (let i = 0; i < str.length; i++) {
			var index = abc.indexOf(str[i]);
			result.push(abc[index + 1]);
		}

		result = result.join('');
		return result;
	}

	console.log(replaceCharacter('abcdef'));
</script>


<?php 

function replace_character($str){
	$abc = 'abcdefghijklmnñopqrstuvwxyz';
	$result = [];

	for ($i=0; $i < strlen($str); $i++) { 
		$index = strrpos($abc, $str[$i]);
		$result[] = $abc[$index + 1];
	}

	return implode('', $result);
}

echo replace_character('abcdefg');

 ?>