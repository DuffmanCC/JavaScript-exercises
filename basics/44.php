Write a JavaScript program to check from three given integers that if a number is greater than or equal to 20 and less than one of the others.
<hr>



<script>
	// según lo q entiendo yo por el enunciado la soculión que viene en la web no es correcta
	function check3integers(x, y, z){
       return (Math.abs(x - y) >= 20) ||
              (Math.abs(x - z) >= 20) ||
              (Math.abs(y - z) >= 20);
    }

    console.log(check3integers(23, 45, 10));
	console.log(check3integers(35, 30, 35));
	console.log(check3integers(20, 10, 16));
	console.log(check3integers(10, 30, 35));
	console.log(check3integers(20, 200, 35));
	console.log(check3integers(10, 200, 15));
	console.log(check3integers(20, 20, 15));


	console.log('xxxxxxxxxxx');


	// en javascript no existe el xor (or exclusivo)
	function check3integers2(x, y, z){
		return ( (x >= 20 && ( x < y || x < z ) ) ||
				 (y >= 20 && ( y < x || y < z ) ) ||
				 (z >= 20 && ( z < x || z < y ) ) );
    }

    console.log(check3integers2(23, 45, 10));
	console.log(check3integers2(35, 30, 35));
	console.log(check3integers2(20, 10, 16));
	console.log(check3integers2(10, 30, 35));
	console.log(check3integers2(20, 200, 35));
	console.log(check3integers2(10, 200, 15));
	console.log(check3integers2(20, 20, 15));

	console.log('xxxxxxxxxxx');

	// repasar esta función
	function check3integers3(a, b, c){
		return (( a >= 20 && (a > b || a > c) && !(a > b && a > c) ) ||
				( b >= 20 && (b > a || b > c) && !(b > a && b > c) ) ||
				( c >= 20 && (c > a || c > b) && !(c > a && c > b) ));
    }

    console.log(check3integers3(23, 45, 10));
	console.log(check3integers3(35, 30, 35));
	console.log(check3integers3(20, 10, 16));
	console.log(check3integers3(10, 30, 35));
	console.log(check3integers3(20, 200, 35));
	console.log(check3integers3(10, 200, 15));
	console.log(check3integers3(20, 20, 15));

	console.log('xxxxxxxxxxx');

	function xxx(a, b, c){
		return ( (a > b || a > c) && !(a > b && a > c) );
	}

	console.log(xxx(10, 20, 30));
	console.log(xxx(25, 20, 30));
	console.log(xxx(25, 20, 15));
</script>

<?php 

	// en php sí hay xor

	function check3integers2($x, $y, $z){
		if  ( ($x >= 20 && ( $x < $y xor $x < $z ) ) ||
			($y >= 20 && ( $y < $x xor $y < $z ) ) ||
			($z >= 20 && ( $z < $x xor $z < $y ) ) ){
			echo 'true'.'<br>';
		} else {
			echo 'false<br>';
		}
    }

    check3integers2(23, 45, 10);
	check3integers2(35, 30, 35);
	check3integers2(20, 10, 16);
	check3integers2(10, 30, 35);
	check3integers2(20, 200, 35);
	check3integers2(10, 200, 15);
	check3integers2(20, 20, 15);

 ?>