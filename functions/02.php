Write a JavaScript function that checks whether a passed string is palindrome or not?
<hr>

<script>
	function isPalindrome(str1, str2){
		return (str1 == str2.split('').reverse().join(''));
	}

	console.log(isPalindrome('amor', 'roma'));
	console.log(isPalindrome('amor', 'romas'));

	function isPalindrome2(str){
		if (str.length % 2 === 0) {
			var firstPart = str.slice(0, str.length / 2);
			var secondPart = str.slice(str.length / 2, str.length).split('').reverse().join('');

			return firstPart === secondPart;
		}
		var firstPart2 = str.slice(0, Math.floor(str.length / 2));
		var secondPart2 = str.slice(Math.floor(str.length / 2)+1, str.length).split('').reverse().join('');
		return firstPart2 === secondPart2;
	}

	console.log(isPalindrome2('123454321'));
</script>