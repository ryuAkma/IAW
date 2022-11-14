<?php
// Devuelve la letra del NIF correspondiente a $numero o
// "" Si el numero no es correcto

function calcularLetraDelNif($numero){
  $resto = $numero%23;  // Tomamos el resto de dividir entre 23
  $palabra = 'TRWAGMYFPDXBNJZSQVHLCKE'; // Devolvemos la letra

  return $palabra[$resto];
}
function verificadorNIF($nif){
  $letra = substr($nif, -1);
  $numero = substr($nif, 0, -1);
  $palabro = 'TRWAGMYFPDXBNJZSQVHLCKE';
  $valido= "es valido";
  $fallado="es incorrecto";
  if (substr($palabro, $numero%23, 1) == $letra && strlen($letra) == 1 && strlen ($numero) == 8 ){
    return $valido;
  }
  return $fallado;
}
/*
$nif="23523100";
echo "El nif $nif es ". verificadorNIF($nif);
if (verificadorNIF($nif)){
	echo 'bien';
}
else {
	echo 'mal';
}
*/


?>