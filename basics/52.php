Write a JavaScript program to convert the letters of a given string in alphabetical order.
<hr>

<script>
	function orderString(str){
		var str = str.split('');
		str.sort();
		 return str.join('');
	}


	console.log(orderString('david'));
	console.log(orderString('Carlos'));
	console.log(orderString('carlos'));


	// solución ejercicio
	function alphabet_Soup(str) { 
	    return str.split("").sort().join("");      
	}
</script>

<?php 

function order_string($str){
	$str = str_split($str);
	sort($str);
	return implode($str);
}

 ?>

<p><?php echo order_string('david') ?></p>
<p><?php echo order_string('Carlos') ?></p>
<p><?php echo order_string('carlos') ?></p>