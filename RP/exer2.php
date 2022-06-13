<?php

$op = $_POST['op'];
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

        if($numero1 == 0 || $numero2 == 0)
            {
                echo "Número inválido para cálculo!";
            }
            else
            {
                if($op == 1)
                {
                    $adicao = $numero1 + $numero2;

                    echo "O resultado é: " .  "<p style= 'color:red'>" .number_format($adicao, 2). "</p>";
                }
                else
                {
                    if($op == 2)
                    {
                        $sub= $numero1 - $numero2;

                        echo " O resultado é: " .  "<p style= 'color:red'>" .number_format($sub, 2). "</p>";
                    }
                    else
                    {
                        if($op == 3)
                        {
                            $mult = $numero1 * $numero2;

                            echo "O resultado é: " .  "<p style= 'color:red'>" .number_format($mult, 2). "</p>";
                        }
                        else
                        {
                            if($op == 4)
                            {
                                $div = $numero1 / $numero2;

                                echo "O resultado é:  " .  "<p style= 'color:red'>" .number_format($div, 2). "</p>";
                            }
                        }
                    }

                }

            }
            

    
?>

                <div class="form-item">
                    <a href='exer2.html'> Voltar</a>
                </div>