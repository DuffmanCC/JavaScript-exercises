Write a JavaScript program to check if a given string contains equal number of p's and t's present.
<hr>

<script type="text/javascript">
	function equalPandT(str){

		var countT = 0;
		for (let i = 0; i < str.length; i++) {
			if (str[i] == 't'){
				countT++;
			}
		}

		var countP = 0;
		for (let i = 0; i < str.length; i++) {
			if (str[i] == 'p'){
				countP++;
			}
		}

		return (countT == countP);

	}

	console.log(equalPandT('holaqas'));
	console.log(equalPandT('holaqasttpat'));
	console.log(equalPandT('holaqast'));
	console.log(equalPandT('holaqastp'));
</script>

<?php 

function equal_p_and_t($str){

	$count_p = 0;
	$str = str_split($str);
	// return count($str);
	for ($i=0; $i < count($str); $i++) { 
		if ($str[$i] === 'p'){
			$count_p++;
		}
	}

	$count_t = 0;
	for ($j=0; $j < count($str); $j++) { 
		if ($str[$j] === 't'){
			$count_t++;
		}
	}

	return ($count_p === $count_t);

}


 ?>

 <pre><?php if(equal_p_and_t('holaqas')){ echo 'true';} else { echo 'false';} ?></pre>
 <pre><?php if(equal_p_and_t('holaqasttpat')){ echo 'true';} else { echo 'false';} ?></pre>
 <pre><?php if(equal_p_and_t('holaqast')){ echo 'true';} else { echo 'false';} ?></pre>
 <pre><?php if(equal_p_and_t('holaqastp')){ echo 'true';} else { echo 'false';} ?></pre>