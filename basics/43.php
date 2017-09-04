Write a JavaScript program to check from three given numbers (non negative integers) that two or all of them have the same rightmost digit. 
<hr>

<script>
	
	function last_digit(a){

		// chequear si es integer o string y convertir a string
		if (Number.isInteger(a) && a > 0) {
			longA = a.toString().length;
		} else {
			longA = a.length;
		}

		long = longA;

		// invertir string
		var strInver = '';
		while( longA >= 0){
			strInver = strInver + a.toString().charAt(longA);
			longA--;
		}

		//divido el integer invertido entre 10 ^ su longitud
		unidades = parseInt(strInver) / Math.pow(10, (long - 1));

		// redondeo hacia abajo el reultado
		return unidades = Math.floor(unidades);
	}

	console.log(last_digit(96546113));


	// muuuuucho más fácil, dividir entre diez y devolver el resto;
	function last_digit2(p){
		return p % 10;
	}

	console.log(last_digit2(96546113));

	function same_last_digit(a, b, c){
		if ( a % 10 == b % 10 ||
			 a % 10 == c % 10 ||
			 b % 10 == c % 10 ) {
			return true;
		}
		return false;
	}
	console.log(same_last_digit(22, 23, 24));
	console.log(same_last_digit(23, 23, 24));
	console.log(same_last_digit(23, 24, 24));
	console.log(same_last_digit(24, 23, 24));
	console.log(same_last_digit(24, 23, 24));
	console.log(same_last_digit(24, 24, 24));
</script>


<?php 

function same_last_digit($a, $b, $c){
	if ( $a % 10 == $b % 10 ||
		 $a % 10 == $c % 10 ||
		 $b % 10 == $c % 10 ) {
		echo 'true'.'<br>';
	} else {
		echo 'false'.'<br>';	
	}	
}

same_last_digit(22, 23, 24);
same_last_digit(23, 23, 24);
same_last_digit(23, 24, 24);
same_last_digit(24, 23, 24);
same_last_digit(24, 23, 24);
same_last_digit(24, 24, 24);

 ?>