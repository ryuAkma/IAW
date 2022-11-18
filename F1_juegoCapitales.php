<!DOCTYPE html>
<?php
include 'F1_relacionPaisesEU.php';
// Generamos un array con la lista de paises
$paises= array_keys($EU);
// Generamos un array con la lista de capitales
$capitales = array_values($EU);
// los bajaramos

shuffle($paises);
shuffle($capitales);

?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title></title>
    </head>
    <body>
        <form action="F1_comprobarCapital.php" method="POST">
            <fieldset>
                <legend>SELECCIONA PAIS</legend>
   <?php
                echo "<select name='paises'>";
                     for ($i=0; $i <count($paises) ; $i++) { 
                         echo "<option value=$paises[$i]> $paises[$i] </option>";
                     }
         echo"</select>";
         ?>
            </fieldset>
            <fieldset>
                <legend>SELECCIONA CAPITAL</legend>
                <?php
                echo "<select name='capitales'>";
                     for ($i=0; $i <count($capitales) ; $i++) { 
                         echo "<option value=$capitales[$i]> $capitales[$i] </option>";
                     }
         echo"</select>";
         ?>
            </fieldset> 
            <input type="submit" value="COMPROBAR">

        </form>
    

</body></html>