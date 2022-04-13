<?php

    $salarioinicial = 200;

    if($salarioinicial <= 300)
    {
        $salariorea = $salarioinicial * 50;
        $salariorea2 = $salariorea / 100;
        $salariof = $salariorea2 + $salarioinicial;
        
        echo "O salário reajustado é: " .$salariof;
    }
    else
        if($salarioinicial > 300)
        {
            $salariorea = $salarioinicial * 30;
            $salariorea2 = $salariorea / 100;
            $salariof = $salariorea2 + $salarioinicial;
            
            echo "O salário reajustado é: ". $salariof;
        }

?>