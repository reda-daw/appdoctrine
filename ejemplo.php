<?php
ini_set('display_errors',1);
// ejemplo_basicos.php

require_once "boostrap.php";

require_once './src/Equipo.php';

// buscar por clave primaria

$equipo = $entityManager->find("Equipo", 3);

// mostrar datos
echo "Equipo: ".$equipo->getNombre()."<br>";
echo "Socios del club: ".$equipo->getSocios()." socios/as";

?>