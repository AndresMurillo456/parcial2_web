<?php

$nombre = $_GET["nombre"];

echo "El nombre del cliente es: " . $nombre;

$sexo = $_GET["sexo"];

echo "El sexo del cliente es" . $sexo;

$areas = $_GET["areas"];

echo "Areas de preferencia:<br><br>";

for ($i=0; $i < count($areas); $i++) {
echo $areas[$i] . "<br>"; 

}
?>