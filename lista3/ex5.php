<?php
    $data = strtotime('04/06/2022'); // padrao americano mes/dia/ano
    $dia = date('w',$data);

    if($dia==0)
    {
        echo "O dia digitado é domingo";
    }
    else
        if($dia==1)
        {
            echo "O dia digitado é segunda-feira";
        }
        else
            if($dia==2)
            {
                echo "O dia digitado é terça-feira";
            }
            else
                if($dia==3)
                {
                    echo "O dia digitado é quarta-feira";
                }
                else
                    if($dia==4)
                    {
                        echo "O dia digitado é quinta-feira";
                    }
                    else
                        if($dia==5)
                        {
                            echo "O dia digitado é sexta-feira";
                        }
                        else
                            if($dia==6)
                            {
                                echo "O dia digitado é sábado";
                            }

?>