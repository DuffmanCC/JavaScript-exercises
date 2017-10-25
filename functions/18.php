Write a function for searching JavaScript arrays with a binary search.
<hr>

<script>
	var inArrayBinary = function(needle, haystack){
		if (haystack.length % 2 !== 0) {
			// comprobar que el element del medio es el buscado
			if (haystack[Math.ceil(haystack.length / 2) - 1] === needle) {
				return true;
			}
		}


		return haystack;
	}

	console.log(inArrayBinary(34,[1, 20, 34, 70, 115, 600, 712, 748, 9014, 10258, 110889]));


	// continuar...
</script>