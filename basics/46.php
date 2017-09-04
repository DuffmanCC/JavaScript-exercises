Write a JavaScript program to check two given non-negative integers and if one of the number (not both) is multiple of 7 or 11.
<hr>

<script>
	
	function isMultiple7(a){
		var a;
		if (a >= 0){
			return ( 
				(a % 7 === 0 || a % 11 === 0) && !(a % 7 === 0 && a % 11 === 0) 
				);
		}
	}

	console.log(isMultiple7(14));
	console.log(isMultiple7(22));
	console.log(isMultiple7(77));
	console.log(isMultiple7(154));
	console.log(isMultiple7(21));
	console.log(isMultiple7(13));
	console.log(isMultiple7(28));

	/*xor en js

	if( ( foo && !bar ) || ( !foo && bar ) ) {
	  ...
	}


	if( ( foo || bar ) && !( foo && bar ) ) {
	  ...
	}
	*/

</script>


<?php 

	function is_multiple_7_11($num){
		if ($num >= 0 && ($num % 7 === 0 xor $num % 11 === 0 )) {
			echo 'true<br>';
		} else {
			echo 'false</br>';
		}
	}

	is_multiple_7_11(14);
	is_multiple_7_11(22);
	is_multiple_7_11(77);
	is_multiple_7_11(154);
	is_multiple_7_11(21);
	is_multiple_7_11(13);
	is_multiple_7_11(28);

 ?>