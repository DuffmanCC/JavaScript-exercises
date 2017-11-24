 Write a Bubble Sort algorithm in JavaScript. 
 <hr>

 <script>
 	// crearlo como metodo del objeto prototype para un array
 	// 
 function f() {
  try {
    console.log(0);
    throw "bogus";
  } catch(e) {
    console.log(1);
    return true; // Esta sentencia de retorno es suspendida
                 // hasta que el bloque finally esté completo
    console.log(2); // no alcanzable
  } finally {
    console.log(3);
    return false; // sobreescribe la sentencia de retorno anterior
    console.log(4); // no alcanzable
  }
  // "return false" es ejecutada ahora
  console.log(5); // no alcanzable
}
f(); // console 0, 1, 3; retorna false

 </script>