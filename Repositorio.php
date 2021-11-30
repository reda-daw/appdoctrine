<?php

// repositorios.php
require_once "boostrap.php";
require_once './src/Jugador.php';
require_once './src/Equipo.php';
require_once './src/Equipo_Repositorio.php';


/*usar el repositorio*/
$jugadores = $entityManager->getRepository('Equipo')->getLista("Betis");
if($jugadores === -1)

{
   echo "Equipo no encontrado";
   }else
   {
       foreach($jugadores as $jugador)
       {
           echo "Nombre: ". $jugador->getNombre(). " ". $jugador->getApellidos(). "<br>";
       }

}
   // Este falla
   $jugadores = $entityManager->getRepository('Equipo')->getLista("Manchester");
   if($jugadores === -1)
   {
       echo "Equipo no encontrado";
   }

   else{
       foreach($jugadores as $jugador)
       {
           echo "Nombre: ". $jugador->getNombre(). " ". $jugador->getApellidos(). "<br>";
       }
}


