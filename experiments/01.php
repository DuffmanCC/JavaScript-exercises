<script>
	var json = {keyA: {
					keyB: 'b',
					keyC: 'c'
					}
				};

	var length = Object.keys(json.keyA).length;
	var firstElement = Object.keys(json.keyA)[0];
	var lastElement = Object.keys(json.keyA)[length - 1];

	console.log('key del primer elemento: ' + firstElement);
	console.log('value del primer elemento: ' + json.keyA[firstElement]);
	console.log('key del último elemento: ' + lastElement);
	console.log('value del último elemento: ' + json.keyA[lastElement]);


</script>