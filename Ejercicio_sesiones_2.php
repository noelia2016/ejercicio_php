<!DOCTYPE html>
    <head>
        <title>Formulario para ingresar texto y mostrar MD5</title>
        <link rel="stylesheet" href="css/estilo.css" />
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" />
    </head>
    <body>
        <div id="contenedor">
            <div id="login">
                <h2>Ejercicios PHP</h2>
                <?php 
                    if (isset($_POST['cadena'])){
                        $resultado=$_POST['cadena'];
                        if ($resultado != ' '){                         
                            echo $resultado. '<br/>';
                        }
                    }
                ?>
                <fieldset>
                    <br/>
                    <form method="post" action="">
                        <label>Ingrese una cadena: </label> <input type="text" name="cadena" value="" required /><br/><br/>
                        <input type="submit" value="Enviar"/>
                    </form>
                </fieldset>
                <br/>
             </div>
        </div>
    </body>
</html>