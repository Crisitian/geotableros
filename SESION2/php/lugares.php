<?php 

$con = new mysqli('localhost', 'root', '', 'geotableros');

$tableros = "SELECT * FROM tableros";

$respuestaTableros = $con->query($tableros);

$arreglo = array();

while($tablero=$respuestaTableros->fetch_object()){
	array_push($arreglo, array('id'=>$tablero->idTablero,
								'nombre'=>$tablero->nombreTablero));
}

echo json_encode($arreglo);
 ?>

