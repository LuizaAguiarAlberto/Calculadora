                
            <?php    
                $num1=$_POST["n1"];
                $num2=$_POST["n2"];
                $ope=$_POST["operador"];
                $resul=0;
                if($ope=="add"){
                    $resul= $num1 + $num2;
                    echo "resultado = $resul";
                }else if($ope=="sub"){
                    $resul= $num1 - $num2;
                    echo "resultado = $resul";
                }else if($ope=="multi"){
                    $resul= $num1 * $num2;
                    echo "resultado = $resul";
                }else if($ope=="div"){
                    $resul= $num1 / $num2;
                    echo "resultado = $resul";
                }
            ?>