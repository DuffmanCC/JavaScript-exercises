Write a JavaScript program to check if three given numbers (integers) are increasing in strict mode and flag is "false", however if "true" is false the numbers will in soft mode.
Note: Strict mode -> 10, 15, 31 : Soft mode -> 24, 22, 31 or 22, 22, 31
<hr>


<div id="app"></div>

<script>

function areIncreasing(a, b, c){
	if (a < b && b < c) {
		return true;
	}
	return false;
}
	
console.log(areIncreasing(1, 4, 5));
console.log(areIncreasing(1, 5, 5));
console.log(areIncreasing(1, 1, 5));
console.log(areIncreasing(1, 2, 0));


// está es la solución y no la entiendo
// como tiene q ver con strict mode de js, no tiene sentido hacerlo en php

function number_order(x, y, z, flag) {
  if (flag==true) 
  {
    return y > x && z > y;    
  }
  else
  // console.log(z > y);
  return z > y;
}

console.log(number_order(10,15,31, "True"));
console.log(number_order(24,22,31, "False"));
console.log(number_order(22,22,31, "False"));

</script>

