<?php

require_once "boostrap.php";
require_once './src/EquipoBidireccional.php';
require_once './src/JugadorBidireccional.php';

//$id = $_GET['id'];
$id = 2;

/*buscar el equipo con el id indicado*/
$equipo = $entityManager->find("EquipoBidireccional", $id);

if(!$equipo)

{
    echo "Equipo no encontrado";
}else{

   echo "Nombre del equipo: ". $equipo->getNombre()."<br>";
   $jugadores = $equipo->getJugadores();
   echo "Lista de jugadores"."<br>";
   foreach($jugadores as $jugador){
       echo "Nombre: ". $jugador->getNombre()."<br>";

   }

}