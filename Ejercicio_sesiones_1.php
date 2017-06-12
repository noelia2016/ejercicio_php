<?php
    error_reporting(0);
    session_start();
?>
<HTML>
<HEAD>
    <TITLE>Contador de secciones</TITLE>
</HEAD>
<BODY>
    <?php 
        If (isset($contador) and $contador == 0){
            $contador=0;
        }
        $contador++;
        echo '<a href=Ejercicio_sesiones_1.php> Has recargado esta página' .$contador.' veces</a>';
    ?>
</BODY>
</HTML>
