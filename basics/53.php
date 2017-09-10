Write a JavaScript program to check if the characters a and b are separated by exactly 3 places anywhere (at least once) in a given string.
<hr>

<script>
	function abInString(str){
		var aPosition = str.indexOf('a');
		var bPosition = aPosition + 3;
		return str[bPosition] == 'b';
	}

	console.log(abInString('carlosar'));
	console.log(abInString('carlobar'));
	console.log(abInString('arlbsar'));
	console.log(abInString('clarlosar'));
	console.log(abInString('cllllrlosar'));
	console.log(abInString('cllllrlosr'));

	// diferencias entre search() y indexOf()
	// If you require a regular expression, use search(). Otherwise, indexOf() is going to be faster.
</script>

<?php 


function ab_in_string($str){
	$aPosition = strpos($str, 'a');
	$bPosition = $aPosition + 3;
	if ($str[$bPosition] == 'b') {
		return 'true';
	}
	return 'false';
}

 ?>

 <p><?php echo ab_in_string('carlosar') ?></p>
 <p><?php echo ab_in_string('carlobar') ?></p>
 <p><?php echo ab_in_string('arlbsar') ?></p>
 <p><?php echo ab_in_string('clarlosar') ?></p>
 <p><?php echo ab_in_string('cllllrlosar') ?></p>
 <p><?php echo ab_in_string('cllllrlosr') ?></p>