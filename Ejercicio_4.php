<?php 
    /* tomo las variables enviadas por el formulario*/
    $num=$_POST['numero'];
    
    /* al numero ingresado obtengo el inverso */
    $longitud= strlen($num);
    $inverso='';
    for($i=$longitud; $i>0 ; $i--){
        $inverso.= $num[$i-1];
    }

    if ($num == $inverso){
        echo 'Congratulations!!!! .... El numero ingresado es capicua';
    }else{
        echo 'Ups !!! ... El numero ingresado <b>NO</b> es capicua';
    }

    
?>
