Write a JavaScript program to get the volume of a Cylinder with four decimal places using object classes.
<hr>

<script>

	// creo la clase del objecto cilindro que tiene dos propiedades
	var Cylinder = function(radius, height){
		this.radius = radius;
		this.height = height;
	}


	// creo el metodo Volume del objeto prototye.
	Cylinder.prototype.Volume = function(){
		return this.height * Math.PI * this.radius * this.radius;
	}

	// nuevo objeto Cylender
	var cyl = new Cylinder(7, 4);

	console.log('volume = ' + cyl.Volume().toFixed(4))

	// crear el de la esfera
	var Esfera = function(radio){
		this.radio = radio;
	}


	Esfera.prototype.volumen = function(){
		return 4 * Math.PI * Math.pow(this.radio, 3) / 3;
	}

	Esfera.prototype.superficie = function(){
		return 4 * Math.PI * Math.pow(this.radio, 4);
	}

	var miEsfera = new Esfera(4);

	console.log('volumen de una esfera con radio 4: ' + miEsfera.volumen().toFixed(2));
	console.log('superficie de una esfera con radio 4: ' + miEsfera.superficie().toFixed(2));
</script>