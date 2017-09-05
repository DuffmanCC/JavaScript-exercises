Write a JavaScript program to check if a number in the range 40..10000 inclusive presents in two number (in same range).
For example 40 presents in 400 and 4000
<hr>

<script>
	function test_digit(x, y) 
	  {
	    let x_div = parseInt(x / 40),
	        x_mod = x % 40,
	        y_div = parseInt(y / 40),
	        y_mod = y % 40;
	    return x_div === y_div || x_mod === y_mod ||
	           x_div === y_mod || x_mod === y_div;
	  }

	console.log(test_digit(40, 4000));  
	console.log(test_digit(80, 320));  
	console.log(test_digit(89, 4000));

	// la descripción no es nada clara, a saber a lo que se refiere.
	// podemos sacar en claro algo de la solución de este ejercicio.
	
	// Diferencia entre let (ES6) y var
	
	function allyIlliterate() {
	    //tuce is *not* visible out here

	    for( let tuce = 0; tuce < 5; tuce++ ) {
	        //tuce is only visible in here (and in the for() parentheses)
	        //and there is a separate tuce variable for each iteration of the loop
	    }

	    //tuce is *not* visible out here
	}

	function byE40() {
	    //nish *is* visible out here

	    for( var nish = 0; nish < 5; nish++ ) {
	        //nish is visible to the whole function
	    }

	    //nish *is* visible out here
	}
	
	'use strict';
	let me = 'foo';
	let me = 'bar'; // SyntaxError: Identifier 'me' has already been declared

	'use strict';
	var me = 'foo';
	var me = 'bar'; // No problem, `me` is replaced.
</script>