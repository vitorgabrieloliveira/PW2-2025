<?php
/*
Crie um scrept que no qual
contém uma variavel com a idade
e exiba se a pessoa é:
    criança 12
    adolecente 17
    adulto até 60
    idoso +60
*/

    $idade = 15;

    if ($idade <= 12) {
        echo "Criança!";
    }
    else if ($idade >=13 && $idade <= 17){
        echo "Adolecente!";
    }
    else if ($idade >=18 && $idade <=59){
        echo "Adulto!";
    }
    else{
        echo "Idoso!";
    }
    


?>