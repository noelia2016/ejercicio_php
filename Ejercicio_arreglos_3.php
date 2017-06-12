<!DOCTYPE html>
    <head>
        <title>Formulario de cadenas</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div id="contenedor">
            <div id="login">
                <h2>Ejercicios PHP</h2>
                <table class="tabla">
                    <?php 
                        $num=1;
                        for ($i = 1; $i <= 10; $i++) { 
                        /* si el valor $i es par pinto el fondo de gris */
                            if (($i % 2) == 0){ ?>
                                <tr style="background-color: #BAB6B5;">
                            <?php }else{ ?>
                                <tr>
                            <?php } 
                                for ($n = 1; $n <= 10; $n++) { ?>
                                    <td><?php echo $num; $num++;?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?> 
                </table>
                <br/>
             </div>
        </div>
    </body>
</html>