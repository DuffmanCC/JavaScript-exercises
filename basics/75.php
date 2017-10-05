Write a JavaScript program to create a new array taking the middle elements of the two arrays of integer and each length 3.
<hr>

<script>
	function middleElement(array1, array2){
		if (array1.length != 3 || array2.length != 3) {
			return false;
		}
		var newArray = [array1[1], array2[1]];
		return newArray;
	}

	console.log(middleElement([1, 2, 3], [4, 5, 6]));
	console.log(middleElement([1, 20, 3], [4, 54, 6]));
	console.log(middleElement([1, 22, 3], [4, 53, 6]));
</script>