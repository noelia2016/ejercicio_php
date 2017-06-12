<?php 
   if (isset($_GET['operarcion'])){
       $op1=$_GET['oper1'];
       $hacer=$_GET['operacion'];
       $op2=$_GET['oper2'];
       if ($op1 != ' ' and $hacer != ' ' and $op2 != ' '){
            $resultado = 'La cadena ingresada es: '.$resultado. '<br/>';
            $resultado= $op1 + $hacer + $op2 ;      
       }else{
            $resultado='variable no definida';
       }
   }
 
?>
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
                    if ((isset($resultado)) and ($resultado != ' ')){
                        echo $resultado;
                    }
                ?>
                <fieldset>
                    <br/>
                    <form method="get" action="">
                        <label>Ingrese un numero: </label> <input type="number" name="oper1" value=""/><br/><br/>
                        <label>Elija la operacion</label>
                        <select name="operacion">
                          <option value="+" selected="selected">Sumar</option>
                          <option value="-">Restar</option>
                          <option value="*">Multiplicar</option>
                          <option value="/">Dividir</option>
                        </select> <br/><br/>
                        <label>Ingrese otro numero: </label> <input type="number" name="oper2" value=""/><br/><br/>
                        <input type="submit" value="Enviar"/>
                    </form>
                </fieldset>
                <br/>
             </div>
        </div>
    </body>
</html>