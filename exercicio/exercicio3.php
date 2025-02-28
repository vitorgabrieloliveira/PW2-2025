<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>

    <form action="exercicio3.php" method="get">

        <fieldset>
            <legend>Número inteiro</legend>
            <label for="numero">Número</label>
            <input type="text" name="numero" id="numero" placeholder="0" required>

            <br>

            <input type="submit" name="verificar" value="Verificar">
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['numero'])) {
            if (empty($_GET['numero'])) {
                echo 'Digite um numero inteiro!';
                exit();
            }
        } else {
            exit();
        }

        $numero = $_GET['numero'];

        if ($numero >=0 && $numero<=100 )
            echo "é <b>MENOR</b> que 100 ";
        else if ($numero > 100 )
            echo "é <b>MAIOR</b> que 100";
        
        
        
    
 /*<b> <b/> =negrito 
   <marquee> </marquee> =letras em movimento
   <i> </i> =italico*/

        
    ?>
    
</body>
</html>