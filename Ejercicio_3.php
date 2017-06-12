<?php 
    /* tomo las variables enviadas por el formulario*/
    $frase=$_POST['frase'];
    $long=$_POST['longitud'];
    
    /* a la cadena ingresada muestra la cadena*/
    if ( !empty($frase)){
    /*si no esta vacia la cadena verifico que la longitud solicitada no sobrepasa a la que tiene realmente la cadena */
       $long_frase=strlen($frase);
       if ($long_frase < $long){
          echo 'undefined'; 
       }else{
           /* si esta todo bien realizo la operacion solicitada*/
           $valor=substr($frase, $long, 1);
           echo 'El valor de la cadena en la longitud elegida es ' . $valor; 
       }
    }else{
        echo 'undefined';
    }
    
?>