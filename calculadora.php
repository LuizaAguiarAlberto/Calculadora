
<html lang = "pt-BR" >
    <head >
        <meta charset = "utf-8" />
        <title> Calculadora</title >
        <style>
        p{
            text-align:center;
        }
        h2{
            text-align:center;
        }
        </style>
    </head >
    <body >
        <fieldset>
           <p>Calculadora<p>
        </fieldset>
        <?php
            // vetor $_POST vazio -> precisa mostrar o formulário
            if (empty($_POST)){
                echo '<form action="calculadora.php" method="post">
                        <fieldset>
                            <legend>Faça a sua conta/legend>
                            <p>
                                <label>Número 1:</label>
                                <input type="text" name="n1" size="30"/>
                            </p>
                            <p>
                                <label>Operador:</label>
                                <select name="operador">
                                    <option value = "add" >+</option >
                                    <option value = "sub" >-</option >
                                    <option value = "mult" >x</option >
                                    <option value = "div" >/</option >
                                </select>
                            
                            </p>
                            <p>
                                <label>Número 2:</label>
                                <input type="text" name="n2" size="30"/>
                            </p> 
                            
                            <p>
                            <input type="submit" value="Enviar"/>
                        </p>
                            ';  

            } else {
                $num1=$_POST["n1"];
                $num2=$_POST["n2"];
                $ope=$_POST["operador"];
                $resul=0;
                if($ope=="add"){
                    $resul= $num1 + $num2;
                    echo" '.$num1.' '.$ope.' '.$num2.' = '.$resul.'";
                }else if($ope=="sub"){
                    $resul= $num1 - $num2;
                    echo" '.$num1.' '.$ope.' '.$num2.' = '.$resul.'";
                }else if($ope=="multi"){
                    $resul= $num1 * $num2;
                    echo" '.$num1.' '.$ope.' '.$num2.' = '.$resul.'";
                }else if($ope=="div"){
                    $resul= $num1 / $num2;
                    echo" '.$num1.' '.$ope.' '.$num2.' = '.$resul.'";
                }
    
    ?>
</body>
</html>