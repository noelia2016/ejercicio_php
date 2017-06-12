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
        
        /* si esta definida*/
        if (!isset($_SESSION['contador'])){
            $_SESSION['contador']= 1;
        }else{
            $_SESSION['contador']++;
        }
        echo '<a href=Ejercicio_sesiones_1.php> Has recargado esta página ' .$_SESSION['contador'].' veces</a>';
    ?>
</BODY>
</HTML>
