<?php 
extract ($_REQUEST);
define('_HOST_NAME_', 'localhost');
	define('_USER_NAME_', 'root');
	define('_DB_PASSWORD', '');
	define('_DATABASE_NAME_', 'bd_proyecto6');
	
		//2.- Conexión a la base de datos y posibles errores en la conexión.
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
		
	}





$insertPregunta = $databaseConnection->prepare('INSERT INTO tbl_notaspublico ( na_nota, preg_id, alu_id,na_nombre, na_curso) VALUES (:na_nota, :preg_id, :alu_id, :na_nombre, :na_curso)');
								$insertPregunta->bindParam(':na_nota', $val);
								$insertPregunta->bindParam(':preg_id', $preg_id);
								$insertPregunta->bindParam(':alu_id', $alu_id);
								$insertPregunta->bindParam(':na_nombre', $nompub);
								$insertPregunta->bindParam(':na_curso', $nomcur);



foreach($_REQUEST as $nombre_campo => $valor){
	echo $asignacion = "\$" . $nombre_campo . "='" . $valor . "';";
	echo "   ---   ";
	echo $variables=str_replace ( 'estrellas_' , "" , $nombre_campo);

	$array = explode("_", $variables);
	echo "id pregunta ".$preg_id=$array[0];
	echo "alu id:" .$alu_id=$array[1];
	echo "nota: ".$val=$valor;
	echo " || ";
	echo "<br>";

	$insertPregunta->execute();
}

		   
		 //   echo $estrellas12;
		 //   echo $estrellas13;

		 //   echo "<br>";

		 //   echo $estrellas21;
		 //   echo $estrellas22;
		 //   echo $estrellas23;
		   
			// echo "<br>";

		 //   echo $estrellas31;
		 //   echo $estrellas32;
		 //   echo $estrellas33;

		 //   echo "<br>";

		 //   echo $estrellas4;
		 //   echo $estrellas5;
		 //   echo $estrellas6;

		 //   echo "<br>";

		 //   echo $nompub;
		 //   echo $nomcur;

		 // 	echo $proy_id;
		 // 	echo $alu;

?>
