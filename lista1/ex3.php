<?php
    
    $num;
    $divisor;

    for($num=0;$num<=200;$num++)
    {
        while($num>=$divisor){
            $resto = $num%$divisor;

            if($resto==0){
                $cont=0;
                $cont++;
            }
        }

        if($cont>2){
            echo "Não é primo.";
        }
        else{
            echo "É primo";
        }
    }

?>