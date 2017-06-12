<?php
    /* genero el numero rando */
    $cadenas= array ('Hoy jugue al futbol.. ','Hoy gane 3 a 1.. ', 'Estuvo fresca y ventosa la mañana del domingo.. ');
    
    $cadena= 'Se me termino la tarde';
    
    echo '<p>Arreglo original. </p>';
    print_r($cadenas);
    $cadenas[] = $cadena;
    echo '<p> Se agrego un elemento a lo ultimo del arreglo. </p>';
    print_r ($cadenas);
?>