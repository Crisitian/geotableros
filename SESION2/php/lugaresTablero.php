<?php 

$con = new mysqli('localhost', 'root', '', 'geotableros');
$id = $_GET['id'];
$tableros = "SELECT * FROM lugares WHERE idTablero = $id";

$respuestaTableros = $con->query($tableros);

$arreglo = array();

while($tablero=$respuestaTableros->fetch_object()){
	array_push($arreglo, array('id'=>$tablero->idLugar,
								'nombre'=>$tablero->nombreLugar,
								'precio'=>$tablero->precioLugar,
								'descripcion'=>$tablero->descripcionLugar,
								'categoria'=>$tablero->categoriaLugar,
								'longitud'=>$tablero->longitudLugar,
								'latitud'=>$tablero->latitudLugar));
}

echo json_encode($arreglo);
 ?>

