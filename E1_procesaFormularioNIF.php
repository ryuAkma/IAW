<?php
include ('E1_funcionesNIF.php');
 $nombre = $_POST['nombre'];
 $nif = $_POST['nif'];


$saludo = 'Hola ' . $nombre . "tu nif es " . $nif . " y " . verificadorNIF($nif);
  
  echo $saludo;





?>