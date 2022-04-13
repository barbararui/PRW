<?php
   $peso = 60;
   $altura = 1.60;

   $imc = $peso / ($altura * $altura);

   if($imc < 17)
    {
        echo "muito abaixo do peso";
    }
    else
        if($imc >= 17 && $imc <= 18.49)
        {
            echo "Abaixo do peso";
        }
        else
            if($imc >= 18.5 && $imc <= 24.99)
            {
                echo "Peso normal";
            }
            else
                if($imc >= 25 && $imc <= 29.99)
                {
                    echo "Acima do peso";
                }
                else
                    if($imc >= 30 && $imc <= 34.99)
                    {
                        echo "Obesidade I";
                    }
                    else
                        if($imc >= 35 && $imc <= 39.99)
                        {
                            echo "Obesidade II - severa";
                        }
                        else
                            if($imc >= 40)
                            {
                                echo "Obesidade III - mórbida";
                            }
                        

?>