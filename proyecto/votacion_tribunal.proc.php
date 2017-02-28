<?php

include_once "includes/conexion_bd.php";

$selectPregunta = $databaseConnection->prepare('SELECT * FROM tbl_notasprofe WHERE pro_id =:pro_id AND alu_id=:alu_id');
								
								$selectPregunta->bindParam(':alu_id', $alu_id);
								$selectPregunta->bindParam(':pro_id', $proId);



$insertPregunta = $databaseConnection->prepare('INSERT INTO tbl_notasprofe ( np_nota, preg_id, alu_id, pro_id) VALUES ( :np_nota, :preg_id, :alu_id, :pro_id)');

								$insertPregunta->bindParam(':np_nota', $np_nota);
								$insertPregunta->bindParam(':preg_id', $preg_id);
								$insertPregunta->bindParam(':alu_id', $alu_id);
								$insertPregunta->bindParam(':pro_id', $proId);


								
$updatePregunta = $databaseConnection->prepare('UPDATE tbl_notasprofe SET np_nota = :np_nota WHERE pro_id =:pro_id AND alu_id=:alu_id');
								
								$updatePregunta->bindParam(':alu_id', $alu_id);
								$updatePregunta->bindParam(':pro_id', $proId);
								$updatePregunta->bindParam(':np_nota', $np_nota);



$SelectNotaslAlu = $databaseConnection->prepare('SELECT Avg(np_nota) AS MEDIA FROM tbl_notasprofe WHERE alu_id=:alu_id AND pro_id=:proyId ');

								$SelectNotaslAlu->bindParam(':proyId', $proId);
								$SelectNotaslAlu->bindParam(':alu_id', $alu_id);



$updateNotatblAlu = $databaseConnection->prepare('UPDATE tbl_alumno SET alu_nftribunal = :nota WHERE alu_id = :alu_id AND proy_id=:proyId ');

								$updateNotatblAlu->bindParam(':nota', $np_nota);
								$updateNotatblAlu->bindParam(':alu_id', $alu_id);
								$updateNotatblAlu->bindParam(':proyId', $proId);

//SELECT Avg(np_nota) FROM tbl_notasprofe, tbl_pregunta WHERE \'tbl_pregunta\'.\'preg_id\'=\'tbl_notasprofe\'.\'preg_id\' AND pro_id =:pro_id AND preg_tipo=\'contenido\'



$selectPreguntaCont = $databaseConnection->prepare('SELECT Avg(np_nota) FROM tbl_notasprofe, tbl_pregunta WHERE tbl_pregunta.preg_id = tbl_notasprofe.preg_id AND pro_id =:pro_id AND tbl_pregunta.preg_tipo=\'contenido\'');
								
								$selectPreguntaCont->bindParam(':pro_id', $proId);



$updateNotaProyecto = $databaseConnection->prepare('UPDATE tbl_proyecto SET proy_nota = :nota WHERE proy_id=:proyId');

								$updateNotaProyecto->bindParam(':nota', $np_nota_fin);
								//$updateNotaProyecto->bindParam(':alu_id', $alu_id);
								$updateNotaProyecto->bindParam(':proyId', $proId);




	//echo "|| PROYECTO ID: -> ";
	$proId=$_REQUEST['proyId'];

foreach($_REQUEST as $nombre_campo => $valor){

	$asignacion = "\$" . $nombre_campo . "='" . $valor . "';";


	$array = explode("_", $nombre_campo);
	$preg_id=$array[0];

	if($nombre_campo == "id0"){

	}else if($nombre_campo == "id1"){

	}else if($nombre_campo == "id2"){

	}else if($nombre_campo == "proyId"){

	}else{

		//echo " || ID PREGUNTA: -> ";
		$preg_id=$array[0];
		//echo "|| NOTA: -> ";
		$np_nota=$valor;




		//$insertPregunta->execute();

		if(!empty($array[1])){
			// echo " || ID ALUMNO 1: -> ";
			$alu_id=$array[1];

			$selectPregunta->execute();
			$resultado = $selectPregunta->fetchColumn();

			if(empty($resultado)){
				$insertPregunta->execute();
			}else{
				$updatePregunta->execute();
			}

			


			if(!empty($array[2])){
				// echo " || ID ALUMNO 2: -> ";
				$alu_id=$array[2];

				// echo "-------------- ";
				$np_nota;
				// echo " - ";
				$preg_id;
				// echo " - ";
				$alu_id;
				// echo " - ";
				$proId;

				if(empty($resultado)){
					$insertPregunta->execute();
				}else{
					$updatePregunta->execute();
				}


				if(!empty($array[3])){
					// echo " || ID ALUMNO 3: -> ";
					$alu_id=$array[3];

					if(empty($resultado)){
						$insertPregunta->execute();
					}else{
						$updatePregunta->execute();
					}

				}
			}		
		}
	}
				// echo $asignacion;
}

if (!empty($_REQUEST['id0'])) {
	
	$alu_id=$_REQUEST['id0'];

	$SelectNotaslAlu->execute();
			echo "nota media 1: ";
			echo $resultado = $SelectNotaslAlu->fetchColumn();
			$np_nota=$resultado;
	$updateNotatblAlu->execute();

}

if (!empty($_REQUEST['id1'])) {
	
	$alu_id=$_REQUEST['id1'];

	$SelectNotaslAlu->execute();
			echo " nota media 2: ";
			echo $resultado = $SelectNotaslAlu->fetchColumn();
			$np_nota=$resultado;
	$updateNotatblAlu->execute();

}

if (!empty($_REQUEST['id2'])) {
	
	$alu_id=$_REQUEST['id2'];

	$SelectNotaslAlu->execute();
			echo "nota media: ";
			echo $resultado = $SelectNotaslAlu->fetchColumn();
			$np_nota=$resultado;
	$updateNotatblAlu->execute();

}

$proId=$_REQUEST['proyId'];
$selectPreguntaCont->execute();

$np_nota_fin = $selectPreguntaCont->fetchColumn();

$updateNotaProyecto->execute();




// RECUPERAR LAS NOTAS:

// $alu
// $alu_id;







// if (!empty($_REQUEST['id0'])) {
// 	# code...
// }



							
								
 				
 											
 											//$insertPregunta->execute();	



 						//$rows = $selectUsuario->fetchAll(PDO::FETCH_ASSOC);
						
						//echo json_encode($rows);

?>

