<?php
    $n1 = 9;
    $n2 = 1;
    $n3 = 7;

    if($n1 > $n2 && $n2 > $n3)
    {
        echo " ".$n1; 
        echo " ".$n2;
        echo " ".$n3;
    }
    else
        if($n1 > $n3 && $n3 > $n2)
        {
            echo " ".$n1; 
            echo " ".$n3;
            echo " ".$n2;
        }
        else
            if($n2 > $n1 && $n1 > $n3)
            {
                echo " ".$n2; 
                echo " ".$n1;
                echo " ".$n3;
            }
            else
                if($n2 > $n3 && $n3 > $n1)
                {
                    echo " ".$n2; 
                    echo " ".$n3;
                    echo " ".$n1;
                }
                else
                    if($n3 > $n2 && $n2 > $n1)
                    {
                        echo " ".$n3; 
                        echo " ".$n2;
                        echo " ".$n1; 
                    }   
                    else
                        if($n3 > $n1 && $n1 > $n2)
                        {
                        echo " ".$n3; 
                        echo " ".$n1;
                        echo " ".$n2; 
                        }
                        else
                            if($n1 == $n2 && $n2 == $n3)
                            {
                                echo "Números iguais!";
                            }
                
?>