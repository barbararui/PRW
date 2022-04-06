<?php   
    
    $divisor;

    for($num=0;$num<=200;$num++)
    {
        $primo = 1;
        echo $num . " ";
        for($div=2 ; $div <=$num/2 ; $div++){
            $resto = $num % $div;
            if($resto==0){
                $primo = 0;
                break;
            }
        }

        if($primo === 0){
            echo "Não é primo. <br>";
        }
        else{
            echo "É primo <br>";
        }
    }

?>