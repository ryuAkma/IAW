<?php
include 'F1_relacionPaisesEU.php';
// Generamos un array con la lista de paises
$paises= array_keys($EU);
// Generamos un array con la lista de capitales
$capitales = array_values($EU);
        //Comprobamos la llegada de los datos del formulario
    if (isset($_POST['capitales']) && isset($_POST['paises'])) {
        $capitalresp7 = (string) $_POST['capitales'];
        $pais7 = (string)$_POST['paises'];
        echo "probando $capitalresp7 para $pais7 </br>";

        //Contamos los elementos
if ($EU[$pais7] == $capitalresp7) {
    echo "CORRESTA!!";
} else {
    echo "la capital buena es ". $EU[$pais7] ;
}
    }
    ?>