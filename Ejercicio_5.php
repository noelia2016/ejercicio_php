<?php
    /* genero el numero rando */
    $num= rand(1,20);
    $suma=0;
    $i=$num;
    while ($i != 0){
        $suma= $suma + $i;
        $i--;
    }
    echo 'El numero random obtenido es '. $num . ' y la sumatoria de 1 al numero obtenido es '. $suma;

?>