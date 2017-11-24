Write a JavaScript program to display the reading status (i.e. display book name, author name and reading status) of the following books.
<hr>

<script>
var library = [ 
   {
       author: 'Bill Gates',
       title: 'The Road Ahead',
       readingStatus: true
   },
   {
       author: 'Steve Jobs',
       title: 'Walter Isaacson',
       readingStatus: true
   },
   {
       author: 'Suzanne Collins',
       title:  'Mockingjay: The Final Book of The Hunger Games', 
       readingStatus: false
   }];

   	console.log("I've already read:");
  	for (let i = 0; i < library.length; i++) {
  		let book = library[i].title + ' by ' + library[i].author;
  		if (library[i].readingStatus === true) {  			
  			console.log(book);
  		}
	}

	console.log("I have not read:");
  	for (let i = 0; i < library.length; i++) {
  		let book = library[i].title + ' by ' + library[i].author;
  		if (library[i].readingStatus !== true) {  			
  			console.log(book);
  		}
	}


</script>