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
        // si se detecta la respuesta como enviada
       /* if ($_POST["g-recaptcha-response"]) {
        	$response = $reCaptcha->verifyResponse(
        			$_SERVER["REMOTE_ADDR"],
        			$_POST["g-recaptcha-response"]
        			);
        }
        */

        session_start();
       
        error_reporting(E_ALL);
        ini_set("display_errors", true);
        
        
		if($_POST["dni2"]==null){$dni2=0;}else{$dni2=$_POST["dni2"];}
		if($_POST["dni3"]==null){$dni3=0;}else{$dni3=$_POST["dni3"];}
		if($_POST["dni4"]==null){$dni4=0;}else{$dni4=$_POST["dni4"];}
		if($_POST["dni5"]==null){$dni5=0;}else{$dni5=$_POST["dni5"];}
		
		if($_POST["date2"]=='1111-11-11'){$date2=null;}else{$date2=$_POST["date2"];}
		if($_POST["date3"]=='1111-11-11'){$date3=null;}else{$date3=$_POST["date3"];}
		if($_POST["date4"]=='1111-11-11'){$date4=null;}else{$date4=$_POST["date4"];}
		if($_POST["date5"]=='1111-11-11'){$date5=null;}else{$date5=$_POST["date5"];}
             
        $grupo			= $_POST["grupo"];
        $categoria 		= $_POST["categoria"];
        $proyecto 		= $_POST["proyecto"];
        $descripcion 	= $_POST["descripcion"];
        $persona_1	 	= $_POST["persona_1"];
        $dni1			= $_POST["dni1"];
        $date1			= $_POST["date1"];
        $email1			= $_POST["email1"];
        $persona_2	 	= $_POST["persona_2"]; 
        $email2			= $_POST["email2"];
        $persona_3	 	= $_POST["persona_3"];
        $email3			= $_POST["email3"];
        $persona_4 		= $_POST["persona_4"];
        $email4			= $_POST["email4"];
        $persona_5	 	= $_POST["persona_5"];
        $email5 		= $_POST["email5"];
        $localidad	 	= $_POST["localidad"];
		
        
        try {
        	$pdo = new PDO('mysql:host=localhost;dbname=prueba','root', '123456');
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
        } catch (PDOException $e) {
        	echo 'Error de la coneccion a la BD:' . $e->getMessage();
        }     
        
    }

?>