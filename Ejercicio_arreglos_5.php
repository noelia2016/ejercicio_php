<?php 
    //Ejemplo arrays asociativos
    $colores_vehiculos = array(
        'coche' => '300.000',
        'fideos' => '34.00',
        'arroz' => '50.00',
        'focoLED' => '34.45'
    );
    
    foreach ($colores_vehiculos as $i => $valor){
        echo 'Tengo el producto '. $i . ' con un valor de $ ' . $colores_vehiculos[$i] . '<br>';
    }

?>