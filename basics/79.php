Write a JavaScript program to test if a given array of integers contains 30 and 40 twice. The array length should be 0, 1, or 2.

<script>

function checkArray(array){

	if (array.length > 2 || array.length < 0) {
		return false;
	}

	var counter30 = 0;
	var counter40 = 0;
	for (let i = 0; i < array.length; i++) {
		if (array[i] === 30) {
			counter30++;
		}
		if (array[i] === 40) {
			counter40++;
		}
	}
	if( counter40 == 2 || counter30 == 2){
		return true
	}
	return false;
}


console.log(checkArray([30, 30, 40]));
console.log(checkArray([30, 30]));
console.log(checkArray([40, 40]));
console.log(checkArray([30, 40]));
console.log(checkArray([20, 20]));
console.log(checkArray([30]));


</script>