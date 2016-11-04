function marcado(){
			
		//Removemos el atributo "Required" de los campos opcionales
			
			document.getElementById('persona_2').removeAttribute("required");
			document.getElementById('email2').removeAttribute("required");
			document.getElementById('date2').removeAttribute("required");
			document.getElementById('dni2').removeAttribute("required");
			document.getElementById('persona_3').removeAttribute("required");
			document.getElementById('email3').removeAttribute("required");
			document.getElementById('date3').removeAttribute("required");
			document.getElementById('dni3').removeAttribute("required");
			document.getElementById('persona_4').removeAttribute("required");
			document.getElementById('email4').removeAttribute("required");
			document.getElementById('date4').removeAttribute("required");
			document.getElementById('dni4').removeAttribute("required");
			document.getElementById('persona_5').removeAttribute("required");
			document.getElementById('email5').removeAttribute("required");
			document.getElementById('date5').removeAttribute("required");
			document.getElementById('dni5').removeAttribute("required");
			
		//Setear variables por las funciones complementarias
			
			var x1,x2,x3,x4;
			var y1,y2,y3,y4,y5;
			var z1,z2,z3,z4;
			var f;
			var ep1,ep2,ep3,ep4,ep5;
			
			x1=f(document.getElementById('persona_2'),document.getElementById('email2'),document.getElementById('date2'),document.getElementById('dni2'));
			x2=f(document.getElementById('persona_3'),document.getElementById('email3'),document.getElementById('date3'),document.getElementById('dni3'));
			x3=f(document.getElementById('persona_4'),document.getElementById('email4'),document.getElementById('date4'),document.getElementById('dni4'));
			x4=f(document.getElementById('persona_5'),document.getElementById('email5'),document.getElementById('date5'),document.getElementById('dni5'));		
		//
		//
		//
		//
		//
		//
		//Funciones complementarias
		
		
		//Entrada de la funcion: Campos de los registros de las personas
		//Salida de la funcion: 1 si existe un valor en TODOS los campos de un registro
		//						0 si existe algun campo vacio.
			function completo(c1,c2,c3,c4){
				if(c1.value != '' && c2.value != '' && c3.value != '1111-11-11' && c4.value != '')
				{return 1;}
				else
				{return 0;}	
			}
			
		//Entrada de la funcion: Campos de los registros de las personas
		//Salida de la funcion: 1 si TODOS los campos del registro estan vacios.
		//						0 si existe algun valor en algun campo del registro.
			function vacio(c1,c2,c3,c4){
				if(c1.value == '' && c2.value == '' && c3.value == '1111-11-11' && c4.value == '')
				{return 1;}
				else
				{return 0;}	
			}

		//Entrada de la funcion: Campos de los registros de las personas
		//Salida de la funcion: 1 si existe algun valor en algun campo del registro.
		//						0 si no existe ningun valor.
			function f(c1,c2,c4){
				if(c1.value != ''|| c2.value != '' || c4.value != '')
				{return 1;}
				else
				{return 0;}	
			}
			
		//Entrada de la funcion: Fecha Ingresada de un campo
		//Salida de la funcion: 1 si la persona tiene mas de 100 o menos de 18 años.
		//						0 si la persona tiene entre 18 y 100 años.
			function calcular_edad(date) {
				var form = date.value;	//fecha de nacimiento en el formulario
				var fechaNacimiento = form.split("-");
				var anio = fechaNacimiento[0];

				var fechaHoy = new Date(); // detecto la fecha actual y asigno el dia, mes y anno a variables distintas
				var anioActual = fechaHoy.getFullYear();
			
				if((anioActual - anio) <= 17 || (anioActual - anio) >= 101){
					return 1;
				}
				else{
					return 0;
				}
			}

			
		//
		//
		//
		//Empiezan las verificaciones del formulario
		//
		//
		//
		
		//Verificamos el orden del cual un usuario carga los datos
			
			if(x4 == 1 && x1 == 0){
				document.getElementById('orden4').style.display='block';
				return false;
			}
			if(x4 == 1 && x2 == 0){
				document.getElementById('orden4').style.display='block';
				return false;
			}
			if(x4 == 1 && x3 == 0){
				document.getElementById('orden4').style.display='block';
				return false;
			}
			if(x3 == 1 && x1 == 0){
				document.getElementById('orden3').style.display='block';
				return false;
			}
			if(x3 == 1 && x2 == 0){
				document.getElementById('orden3').style.display='block';
				return false;
			}
			if(x2 == 1 && x1 == 0){
				document.getElementById('orden2').style.display='block';
				return false;
			}

		//
		//
		//
		//
		//
		//
		//Verificamos si Aceptro los Terminos y Condiciones.
			
			if (!document.getElementById('agree').checked) {
				alert("Debes aceptar los términos y condiciones");
		       return false; 
			}
		//
		//
		//
		//
		//
		//
		//Seteamos mas variables para los controles
			
			y1=completo(document.getElementById('persona_2'),document.getElementById('email2'),document.getElementById('date2'),document.getElementById('dni2'));
			y2=completo(document.getElementById('persona_3'),document.getElementById('email3'),document.getElementById('date3'),document.getElementById('dni3'));
			y3=completo(document.getElementById('persona_4'),document.getElementById('email4'),document.getElementById('date4'),document.getElementById('dni4'));
			y4=completo(document.getElementById('persona_5'),document.getElementById('email5'),document.getElementById('date5'),document.getElementById('dni5'));		
			y5=completo(document.getElementById('persona_1'),document.getElementById('email1'),document.getElementById('date1'),document.getElementById('dni1'));
			
			z1=vacio(document.getElementById('persona_2'),document.getElementById('email2'),document.getElementById('date2'),document.getElementById('dni2'));
			z2=vacio(document.getElementById('persona_3'),document.getElementById('email3'),document.getElementById('date3'),document.getElementById('dni3'));
			z3=vacio(document.getElementById('persona_4'),document.getElementById('email4'),document.getElementById('date4'),document.getElementById('dni4'));
			z4=vacio(document.getElementById('persona_5'),document.getElementById('email5'),document.getElementById('date5'),document.getElementById('dni5'));		

			
		//Si todos los campos estan llenos o todos los campos estan vacios, todo OK, sino le falto algun campo
			
			 if ((y1 == 1)|| (z2==1)){
				 //Todo ok.
				}
		//Indicar que campo hace falta
			 else{
				if(document.getElementById('persona_2').value == ''){
					document.getElementById('persona_2').required = true;
					document.getElementById('persona_2').focus();
					return false
				}
				if(document.getElementById('email2').value == ''){
					document.getElementById('email2').required = true;
					document.getElementById('email2').focus();
					return false
				}
				if(document.getElementById('date2').value == '1111-11-11'){
					document.getElementById('date2').required = true;
					document.getElementById('date2').focus();
					return false
				}
				if(document.getElementById('dni2').value == ''){
					document.getElementById('dni2').required = true;
					document.getElementById('dni2').focus();
					return false
				}
			 }
			 
			 if ((y2 == 1)|| (z2==1)){
				 //Todo ok.
				}
		//Indicar que campo hace falta
			 else{
				if(document.getElementById('persona_3').value == ''){
					document.getElementById('persona_3').required = true;
					document.getElementById('persona_3').focus();
					return false
				}
				if(document.getElementById('email3').value == ''){
					document.getElementById('email3').required = true;
					document.getElementById('email3').focus();
					return false
				}
				if(document.getElementById('date3').value == '1111-11-11'){
					document.getElementById('date3').required = true;
					document.getElementById('date3').focus();
					return false
				}
				if(document.getElementById('dni3').value == ''){
					document.getElementById('dni3').required = true;
					document.getElementById('dni3').focus();
					return false
				}
			 }
			 
			 if ((y3 == 1)|| (z3==1)){
				 //Todo ok.
				}
		//Indicar que campo hace falta
			 else{
				if(document.getElementById('persona_4').value == ''){
					document.getElementById('persona_4').required = true;
					document.getElementById('persona_4').focus();
					return false
				}
				if(document.getElementById('email4').value == ''){
					document.getElementById('email4').required = true;
					document.getElementById('email4').focus();
					return false
				}
				if(document.getElementById('date4').value == '1111-11-11'){
					document.getElementById('date4').required = true;
					document.getElementById('date4').focus();
					return false
				}
				if(document.getElementById('dni4').value == ''){
					document.getElementById('dni4').required = true;
					document.getElementById('dni4').focus();
					return false
				}
			 }
			 
			 if ((y4 == 1)|| (z4==1)){
				 //Todo ok.
				}
		//Indicar que campo hace falta
			 else{
				if(document.getElementById('persona_5').value == ''){
					document.getElementById('persona_5').required = true;
					document.getElementById('persona_5').focus();
					return false
				}
				if(document.getElementById('email5').value == ''){
					document.getElementById('email5').required = true;
					document.getElementById('email5').focus();
					return false
				}
				if(document.getElementById('date5').value == '1111-11-11'){
					document.getElementById('date5').required = true;
					document.getElementById('date5').focus();
					return false
				}
				if(document.getElementById('dni5').value == ''){
					document.getElementById('dni5').required = true;
					document.getElementById('dni5').focus();
					return false
				}
			 }
			 
		 //
		 //
		 //
		 //
		 //
		 // 
		 //Validar fecha de nacimientom mayor a 18 y menor a 100
		 //Seteamos variables para calcular la edad
		 
		 //Si Existe una edad ingresada en los campos se setea la variable.
		 //Y Verifica Si la edad es invalida
			 
			 if(document.getElementById('date1').value != '1111-11-11')
			 	{ep1=calcular_edad(document.getElementById('date1'));
			 	if(ep1 == 1){
					document.getElementById('edad_inv1').style.display='block';
					return false;
				}
			 	}
			 
			 f=f(document.getElementById('persona_1'),document.getElementById('email1'),document.getElementById('dni1'));
			 
			 
			 if(document.getElementById('date1').value == '1111-11-11' && f == 1){
			 	{	
			 	document.getElementById('edad_inv1').style.display='block';
				return false;		
			 		}
			 }


			 
			 if(document.getElementById('date2').value != '1111-11-11')
			 	{ep2=calcular_edad(document.getElementById('date2'));
			 	if(ep2 == 1){
					document.getElementById('edad_inv2').style.display='block';
					return false;
				}
			 	}
			 
			 if(document.getElementById('date3').value != '1111-11-11')
			 	{ep3=calcular_edad(document.getElementById('date3'));
			 	if(ep3 == 1){
					document.getElementById('edad_inv3').style.display='block';
					return false;
				}
			 	}
			 
			 if(document.getElementById('date4').value != '1111-11-11')
			 	{ep4=calcular_edad(document.getElementById('date4'));
			 	if(ep4 == 1){
					document.getElementById('edad_inv4').style.display='block';
					return false;
				}
			 	}
			 
			 if(document.getElementById('date5').value != '1111-11-11')
			 	{ep5=calcular_edad(document.getElementById('date5'));
			 	if(ep5 == 1){
					document.getElementById('edad_inv5').style.display='block';
					return false;
				}
			 	}
			 
		//
		//
		//
		//
		//
		//
		//Llegado a este punto significa que todos los campos fueron validados
		//todos los datos ingresados son correctos
		//No hay datos ingresados de forma desordenada
		//La fecha de nacimiento esta validada entre 18 y 100
			
			return true;
			}
		
		
		//
		//
		//
		//
		//
		//Si Existe un campo invalido se hace activa el
		//Disparador/Funcion OnFocus
		//////////////////////////////////////////////
		function mostrar(id,oculto){
			
			if(id.required == true){
				oculto.style.display='block';
			}
			else{
				oculto.style.display='none';
			}
		}
		//
		//
		//
		//
		//Despues de indicar que campo es invalido con
		//El Disparador/Funcion OnFocus, ante la modificacion
		//Del campo indicado se aplica el Disparador/Funcion
		//OnChange que tiene 2 funcionalidades:
		//1- Oculta el mensaje de error sobre el campo invalido
		//2- Si todos los campos de los registros de las personas
		//Opcionales estan completos, Muestra el siguiente
		//Registro de las posibles personas a inscribirse
		/////////////////////////////////////////////
		function mod(campo,oculto){
			
			if(campo.value != ''){
				oculto.style.display='none';
				campo.required = false;
			}		
			
			//
			//
			//Para habilitar los campos dentro de la funcion OnChange
			
			function f_habilitar(c1,c2,c3,c4,o){
				if(c1.value != '' && c2.value != '' && c3.value != '1111-11-11' && c4.value != '')
				{return 1;}
				else
				{return 0;}	
			}
			
			var xh2,xh3,xh4;
			
			xh2=f_habilitar(document.getElementById('persona_2'),document.getElementById('email2'),document.getElementById('date2'),document.getElementById('dni2'));
			xh3=f_habilitar(document.getElementById('persona_3'),document.getElementById('email3'),document.getElementById('date3'),document.getElementById('dni3'));
			xh4=f_habilitar(document.getElementById('persona_4'),document.getElementById('email4'),document.getElementById('date4'),document.getElementById('dni4'));		

			if(xh2 == 1){
				document.getElementById('habilitar_persona_3').style.display='block';
			}
			else{
				document.getElementById('habilitar_persona_3').style.display='none';
			}
			
			if(xh3 == 1){
				document.getElementById('habilitar_persona_4').style.display='block';
			}
			else{
				document.getElementById('habilitar_persona_4').style.display='none';
			}
			
			if(xh4 == 1){
				document.getElementById('habilitar_persona_5').style.display='block';
			}
			else{
				document.getElementById('habilitar_persona_5').style.display='none';
			}
			
		}
		
		//
		//
		//
		//
		//
		//Disparador/Funcion OnChange para habilitar las 
		//Posibles Personas a inscribirse.
		/////////////////////////////////////////////////////
		
		function mod_p1(){
			
			//Para habilitar los campos dentro de la funcion OnChange
			
			function f_habilitar(c1,c2,c3,c4,o){
				if(c1.value != ''&& c2.value != '' && c3.value != '' && c4.value != '')
				{return 1;}
				else
				{return 0;}	
			}
			
			var xh1;
			
			xh1=f_habilitar(document.getElementById('persona_1'),document.getElementById('email1'),document.getElementById('date1'),document.getElementById('dni1'));

			if(xh1 == 1){
				document.getElementById('habilitar_persona_2').style.display='block';
			}
			else{
				document.getElementById('habilitar_persona_2').style.display='none';
			}
		}
		
		
		
		//
		//
		//
		//
		//
		//
		//Ocultar el div FechaInvalida cuando ocurra
		//Un evento OnChange
		/////////////////////////////////////////////
		function fecha_invalida(campo,div){
			
			if(campo.value != ''){
				div.style.display='none';
				campo.required = false;
			}
		}