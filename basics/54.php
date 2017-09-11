Write a JavaScript program to count the number of vowels in a given string.
<hr>

<script>
	// first solution
	function countVowels(str){
		str = str.toLowerCase().split('');

		var countA = 0;
		var countE = 0;
		var countI = 0;
		var countO = 0;
		var countU = 0;

		var result = [];

		for (let i = 0; i < str.length; i++) {
			if (str[i] == 'a'){
				countA++;
			}
			if (str[i] == 'e'){
				countE++;
			}
			if (str[i] == 'i'){
				countI++;
			}
			if (str[i] == 'o'){
				countO++;
			}
			if (str[i] == 'u'){
				countU++;
			}
		}
		result.push(countA);
		result.push(countE);
		result.push(countI);
		result.push(countO);
		result.push(countU);
		return result;
	}
	var str = 'En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero, adarga antigua, rocín flaco y galgo corredor. Una olla de algo más vaca que carnero, salpicón las más noches, duelos y quebrantos los sábados, lentejas los viernes, algún palomino de añadidura los domingos, consumían las tres partes de su hacienda. El resto della concluían sayo de velarte, calzas de velludo para las fiestas con sus pantuflos de lo mismo, los días de entre semana se honraba con su vellori de lo más fino. Tenía en su casa una ama que pasaba de los cuarenta, y una sobrina que no llegaba a los veinte, y un mozo de campo y plaza, que así ensillaba el rocín como tomaba la podadera. Frisaba la edad de nuestro hidalgo con los cincuenta años, era de complexión recia, seco de carnes, enjuto de rostro; gran madrugador y amigo de la caza. Quieren decir que tenía el sobrenombre de Quijada o Quesada (que en esto hay alguna diferencia en los autores que deste caso escriben), aunque por conjeturas verosímiles se deja entender que se llama Quijana; pero esto importa poco a nuestro cuento; basta que en la narración dél no se salga un punto de la verdad.'

	console.log(countVowels(str));

	function sumaArray(arreglo){
		var suma = 0;
		for (var i = 0; i < arreglo.length; i++) {
			suma = suma + arreglo[i];
		}
		return suma;
	}

	console.log(sumaArray(countVowels(str)));

	// second solution
	function countA(str){
		var count = 0;
		for (let i = 0; i < str.length; i++) {
			if (str[i] == 'a'){
				count++;
			}
		}
		return count;		
	}
	function countE(str){
		var count = 0;
		for (let i = 0; i < str.length; i++) {
			if (str[i] == 'e'){
				count++;
			}
		}
		return count;		
	}
	function countI(str){
		var count = 0;
		for (let i = 0; i < str.length; i++) {
			if (str[i] == 'i'){
				count++;
			}
		}
		return count;		
	}
	function countO(str){
		var count = 0;
		for (let i = 0; i < str.length; i++) {
			if (str[i] == 'o'){
				count++;
			}
		}
		return count;		
	}
	function countU(str){
		var count = 0;
		for (let i = 0; i < str.length; i++) {
			if (str[i] == 'u'){
				count++;
			}
		}
		return count;		
	}

	function countVowels2(str){
		str = str.toLowerCase();
		var result = [];
		result.push(countA(str)); 
		result.push(countE(str)); 
		result.push(countI(str)); 
		result.push(countO(str)); 
		result.push(countU(str));
		return result;
	}

	console.log(countVowels2(str));
	console.log(sumaArray(countVowels2(str)));


	// solution in the web (no lo entiendo)
	function vowel_Count(str) {
		str = str.toLowerCase();
	  	return str.replace(/[^aeiou]/g, "").length;
	}

	console.log(vowel_Count(str));
	
</script>

<?php 

	$str = 'En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero, adarga antigua, rocín flaco y galgo corredor. Una olla de algo más vaca que carnero, salpicón las más noches, duelos y quebrantos los sábados, lentejas los viernes, algún palomino de añadidura los domingos, consumían las tres partes de su hacienda. El resto della concluían sayo de velarte, calzas de velludo para las fiestas con sus pantuflos de lo mismo, los días de entre semana se honraba con su vellori de lo más fino. Tenía en su casa una ama que pasaba de los cuarenta, y una sobrina que no llegaba a los veinte, y un mozo de campo y plaza, que así ensillaba el rocín como tomaba la podadera. Frisaba la edad de nuestro hidalgo con los cincuenta años, era de complexión recia, seco de carnes, enjuto de rostro; gran madrugador y amigo de la caza. Quieren decir que tenía el sobrenombre de Quijada o Quesada (que en esto hay alguna diferencia en los autores que deste caso escriben), aunque por conjeturas verosímiles se deja entender que se llama Quijana; pero esto importa poco a nuestro cuento; basta que en la narración dél no se salga un punto de la verdad.';

function count_characters($str){
	$str = strtolower($str);
	$str = str_split($str);
	return array_count_values($str);
}

function count_vowels($str){
	$str = count_characters($str);
	$vowels[] = $str['a'];
	$vowels[] = $str['e'];
	$vowels[] = $str['i'];
	$vowels[] = $str['o'];
	$vowels[] = $str['u'];
	return $vowels;
}

 ?>

 <pre><?php print_r(count_vowels($str)) ?></pre>