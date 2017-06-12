<?php 
    //Ejemplo arrays asociativos
    $enteros = array(1,34,56,78,89);
    
    echo '<br/><b> Imprime el array original que es:</b>  ';
    print_r($enteros);
    echo '<br/> <b>Imprime el array invertido que es: </b> ';
    print_r ($inverso=array_reverse($enteros));

?>