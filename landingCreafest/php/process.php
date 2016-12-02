<?php
    // Register Form

    if ( isset($_POST['email1']) && filter_var($_POST['email1'], FILTER_VALIDATE_EMAIL) ) {

        // Detect & Prevent Header Injections
        $test = "/(content-type|bcc:|cc:|to:)/i";
        foreach ( $_POST as $key => $val ) {
            if ( preg_match( $test, $val ) ) {
                exit;
            }
        }

        
//         if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
//         //your site secret key
//         	$secret = '6Lc7aAoUAAAAAKNAS5vs2vSnITeDRMcG9h4GKjGB';
// 	        //get verify response data
// 	        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
// 	        $responseData = json_decode($verifyResponse);
// 	        if($responseData->success){
        		
        
        
        
	        	//Funciones de validacion de campos
	        	//
	        	//
	        	//
	        	
	        	function comprobar_nombre($n){
	        		if (preg_match("/[A-Za-z0-9ñÑ\s]{5,75}/",$n)) {
	        			return 1;
	        		} else {
	        			return 0;
	        		}
	        	}
	        	
	        	function comprobar_campo($n){
	        		if (preg_match("/[A-Za-z0-9\s\W]{5,200}/",$n)) {
	        			return 1;
	        		} else {
	        			return 0;
	        		}
	        	}
	        	
	        	function verificar_email($email)
	        	{
	        		if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email))
	        		{
	        			return 1;
	        		}
	        		return 0;
	        	}
	        	
	        	function validar_registro($c1,$c2,$c3,$c4){
	        		if(($c1 == null && $c2 == null && $c3 == 0 && $c4 == null) || ($c1 != null && $c2 != null && $c3 != 0 && $c4 != null)){
	        			return 1;
	        		}
	        		else{
	        			return 0;
	        		}
	        	}
	        	
	        	function ver_registro($c1,$c2,$c3,$c4){
	        		if($c1 != null && $c2 != null && $c3 != 0 && $c4 != null){
	        			return 1;
	        		}
	        		else{
	        			return 0;
	        		}
	        	}
	        	
	        	//
	        	//
	        	//
	        	//
	        	
	        	session_start();
	        	 
	        	error_reporting(E_ALL);
	        	ini_set("display_errors", true);
	        	
	        	
	        	//Si alguno de los campos opcionales viene vacio, se setea como nullo, sino se recive.
	        	
	        	if($_POST["persona_2"]==''){$persona_2=null;}else{$persona_2=$_POST["persona_2"];}
	        	if($_POST["persona_3"]==''){$persona_3=null;}else{$persona_3=$_POST["persona_3"];}
	        	if($_POST["persona_4"]==''){$persona_4=null;}else{$persona_4=$_POST["persona_4"];}
	        	if($_POST["persona_5"]==''){$persona_5=null;}else{$persona_5=$_POST["persona_5"];}
	        	
	        	if($_POST["email2"]==''){$email2=null;}else{$email2=$_POST["email2"];}
	        	if($_POST["email3"]==''){$email3=null;}else{$email3=$_POST["email3"];}
	        	if($_POST["email4"]==''){$email4=null;}else{$email4=$_POST["email4"];}
	        	if($_POST["email5"]==''){$email5=null;}else{$email5=$_POST["email5"];}
	        	
	        	if($_POST["dni2"]==null){$dni2=0;}else{$dni2=$_POST["dni2"];}
	        	if($_POST["dni3"]==null){$dni3=0;}else{$dni3=$_POST["dni3"];}
	        	if($_POST["dni4"]==null){$dni4=0;}else{$dni4=$_POST["dni4"];}
	        	if($_POST["dni5"]==null){$dni5=0;}else{$dni5=$_POST["dni5"];}
	        	
	        	if($_POST["date2"]=='1111-11-11'){$date2=null;}else{$date2=$_POST["date2"];}
	        	if($_POST["date3"]=='1111-11-11'){$date3=null;}else{$date3=$_POST["date3"];}
	        	if($_POST["date4"]=='1111-11-11'){$date4=null;}else{$date4=$_POST["date4"];}
	        	if($_POST["date5"]=='1111-11-11'){$date5=null;}else{$date5=$_POST["date5"];}
	        	 
	        	
	        	//Setear los valores requeridos que vienen desde el formulario.
	        	$grupo			= $_POST["grupo"];
	        	$categoria 		= $_POST["categoria"];
	        	$proyecto 		= $_POST["proyecto"];
	        	$descripcion 	= $_POST["descripcion"];
	        	$persona_1	 	= $_POST["persona_1"];
	        	$dni1			= $_POST["dni1"];
	        	$date1			= $_POST["date1"];
	        	$email1			= $_POST["email1"];
	        	$localidad	 	= $_POST["localidad"];
	        	
	        	//Se inicializan unas variables de control
	        	
	        	$f1=comprobar_nombre($persona_1);
	        	$f2=comprobar_nombre($localidad);
	        	$f3=verificar_email($email1);
	        	$f4=comprobar_campo($descripcion);
	        	$f5=comprobar_campo($grupo);
	        	$f6=comprobar_campo($categoria);
	        	$f7=comprobar_nombre($proyecto);
	        	$r2=validar_registro($persona_2,$email2,$date2,$dni2);
	        	$r3=validar_registro($persona_3,$email3,$date3,$dni3);
	        	$r4=validar_registro($persona_4,$email4,$date4,$dni4);
	        	$r5=validar_registro($persona_5,$email5,$date5,$dni5);
	        	$v2=ver_registro($persona_2,$email2,$date2,$dni2);
	        	$v3=ver_registro($persona_3,$email3,$date3,$dni3);
	        	$v4=ver_registro($persona_4,$email4,$date4,$dni4);
	        	$v5=ver_registro($persona_5,$email5,$date5,$dni5);
	        	
	        	
	        	//Validaciones.
	        	
	        	
	        	//Se validan los campos obligatorios, si se encuentra una incongruencia se detiene la ejecucion.
	        	//Por mas que se marque como enviado el formulario
	        	
	        	if(!($f1 == 1 && $f2 == 1 && $f3 == 1 && $f4 == 1 && $f5 == 1 && $f6 == 1 && $f7 == 1)){
	        		exit;
	        	}
	        	
	        	//Si los registros opcionales estan todos con datos o todos vacios, estan OK.
	        	if(!$r2 == 1){
	        		exit;
	        	}
	        	if(!$r3 == 1){
	        		exit;
	        	}
	        	if(!$r4 == 1){
	        		exit;
	        	}
	        	if(!$r5 == 1){
	        		exit;
	        	}
	        	
	        	//Analizar cada uno de los registros opcionales cargados
	        	//Verificando si los datos cargados son validos
	        	
	        	if($v2 == 1){
	        		$p2=comprobar_nombre($persona_2);
	        		$e2=verificar_email($email2);
	        		if(!($p2 == 1 && $e2 == 1)){
	        			exit;
	        		}
	        	}
	        	if($v3 == 1){
	        		$p3=comprobar_nombre($persona_3);
	        		$e3=verificar_email($email3);
	        		if(!($p3 == 1 && $e3 == 1)){
	        			exit;
	        		}
	        	}
	        	if($v4 == 1){
	        		$p4=comprobar_nombre($persona_4);
	        		$e4=verificar_email($email4);
	        		if(!($p4 == 1 && $e4 == 1)){
	        			exit;
	        		}
	        	}
	        	if($v5 == 1){
	        		$p5=comprobar_nombre($persona_5);
	        		$e5=verificar_email($email5);
	        		if(!($p5 == 1 && $e5 == 1)){
	        			exit;
	        		}
	        	}
	        	
	        	
	        	//Si todo esta bien, se procede a hacer el insert en la BBDD
	        	try {
// 	        		$pdo = new PDO('mysql:host=localhost;dbname=prueba','root', '123456');
	        		$pdo = new PDO('mysql:host=localhost;dbname=creafest','creafest', '2016cr34f3st');
	        		 
	        		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
	        		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        		$pdo->exec("SET NAMES UTF8");
	        		//armamos el SQL
	        		$sql = "INSERT INTO `registro` (`grupo`,`categoria`,`proyecto`,`descripcion`, `persona_1`,`dni1`,`date1`,`email1`,
        			`persona_2`,`dni2`,`date2`,`email2`,`persona_3`,`dni3`,`date3`,`email3`,`persona_4`,`dni4`,`date4`,`email4`,
        			`persona_5`,`dni5`,`date5`,`email5`,`localidad`)
		            VALUES (:grupo,:categoria,:proyecto,:descripcion, :persona_1,:dni1,:date1,:email1,
        			:persona_2,:dni2,:date2,:email2,:persona_3,:dni3,:date3,:email3,:persona_4,:dni4,:date4,:email4,
        			:persona_5,:dni5,:date5,:email5,:localidad)";
	        		$stmt = $pdo->prepare($sql);
	        		//especificamos la salida como un array
	        		$stmt->setFetchMode(PDO::FETCH_OBJ); //podria ser PDO::FETCH_OBJ
	        		//sustituimos los parametros con los valores reales
	        		$stmt->bindParam(':grupo', $grupo);
	        		$stmt->bindParam(':categoria', $categoria);
	        		$stmt->bindParam(':proyecto', $proyecto);
	        		$stmt->bindParam(':descripcion', $descripcion);
	        		$stmt->bindParam(':persona_1', $persona_1);
	        		$stmt->bindParam(':dni1', $dni1);
	        		$stmt->bindParam(':date1', $date1);
	        		$stmt->bindParam(':email1', $email1);
	        		$stmt->bindParam(':persona_2', $persona_2);
	        		$stmt->bindParam(':dni2', $dni2);
	        		$stmt->bindParam(':date2', $date2);
	        		$stmt->bindParam(':email2', $email2);
	        		$stmt->bindParam(':persona_3', $persona_3);
	        		$stmt->bindParam(':dni3', $dni3);
	        		$stmt->bindParam(':date3', $date3);
	        		$stmt->bindParam(':email3', $email3);
	        		$stmt->bindParam(':persona_4', $persona_4);
	        		$stmt->bindParam(':dni4', $dni4);
	        		$stmt->bindParam(':date4', $date4);
	        		$stmt->bindParam(':email4', $email4);
	        		$stmt->bindParam(':persona_5', $persona_5);
	        		$stmt->bindParam(':dni5', $dni5);
	        		$stmt->bindParam(':date5', $date5);
	        		$stmt->bindParam(':email5', $email5);
	        		$stmt->bindParam(':localidad', $localidad);
	        		//ejecutamos la consulta
	        		$stmt->execute();
	        		
	        		
	        		$stmt->close();
	        	} catch (PDOException $e) {
	        		echo 'Error de la coneccion a la BD:' . $e->getMessage();
	        	}
	        		        	
//         	}
//         	else{
//         		$errmes="Error del capcha";
//         	}
//         }
//         else{
//         	$errmes="Please click on the reCAPTCHA box.";
//         	exit;
//         }
    }
?>