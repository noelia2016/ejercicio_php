<?php 
    /* Obtengo un array frutas que yo quiera y las muestro en pantalla utilizando el foreach */
    $frutas=array(
        '1' => 'manzanas',
        '2' => 'peras',
        '3' => 'limones',
        '4' => 'naranjas',
        '5' => 'frutillas'
    ) ;
    foreach ($frutas as $valor){
        echo "Tengo $valor <br>";
    }

?>