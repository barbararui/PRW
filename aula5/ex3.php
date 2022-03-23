<?php
    $op = 'l';
    switch($op)
    {
        case 'a': echo "Abrir";
            break;
        case 'f': echo "Fechar";
            break;
        case 's': echo "Salvar";
            break;
        default: echo "Sair";
            break;
    }