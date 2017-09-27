Write a JavaScript program to create a new string of specified copies (positive number) of a given string
<hr>

<script>
function string_copies (str, n) {
  if (n < 0) {
  	return false;
  }
  return str.repeat(n);
}

console.log(string_copies("abc", 5));
console.log(string_copies("abc", 0));
console.log(string_copies("abc", -2));
</script>
