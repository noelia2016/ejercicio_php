<!DOCTYPE html>
    <head>
        <title>Formulario de cadenas</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div id="contenedor">
            <div id="login">
                <h2>Ejercicios PHP - Potencia de los primeros 4 numeros</h2>
                <table class="tabla">
                    <?php 
                        for ($i = 1; $i <= 4; $i++) { ?>
                                <tr>
                            <?php  
                                for ($n = 1; $n <= 4; $n++) { ?>
                                    <td><?php echo $num=pow($i,$n); ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?> 
                </table>
                <br/>
             </div>
        </div>
    </body>
</html>