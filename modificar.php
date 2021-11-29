<?php
ini_set('display_errors', 1);
require_once "boostrap.php";
require_once './src/Equipo.php';

//$id = $_GET['id'];
$id = 4;

/*buscar el jugador con el id indicado*/
$equipo = $entityManager->find("Equipo", $id);

if (!$equipo) {
    echo "Equipo no encontrado";
} else {
    $equipo->setFundacion(1912);
    //$entityManager->remove($equipo);
    $entityManager->flush();

    echo "Equipo modificado";
}
