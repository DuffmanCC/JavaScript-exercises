Write a JavaScript program to test if an array of integers of length 2 contains 1 or a 3.
<hr>

<script>
	function testArray(array){
		if (array.length === 2) {
			return array[0] === 1 || array [0] === 3 || array [1] === 1 || array [1] === 3;
		}
		return false;
	}

	console.log(testArray([0, 1]));
	console.log(testArray([0, 3]));
	console.log(testArray([3, 1]));
	console.log(testArray([4, 1]));
	console.log(testArray([0, 0, 1]));

	function inArray(needle, haystack) {
	    var length = haystack.length;
	    for(var i = 0; i < length; i++) {
	        if(haystack[i] == needle) return true;
	    }
	    return false;
	}
</script>