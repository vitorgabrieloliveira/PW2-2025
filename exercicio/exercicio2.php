<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>

    <form action="exercicio2.php" method="get">

        <fieldset>
            <legend>Altorização para votos</legend>
            <label for="idade">Idade</label>
            <input type="text" name="idade" id="idade" placeholder="0" required>

            <br>

            <input type="submit" name="verificar" value="Verificar">
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['idade'])) {
            if (empty($_GET['idade'])) {
                echo 'Digite sua idade por favor!';
                exit();
            }
        } else {
            exit();
        }

        $idade = $_GET['idade'];

        if ($idade <16)
            echo "<b>Voçê não pode votar</b>";
        else if ($idade >= 16 && $idade <= 17)
            echo "<i>Sua votação é opcional</i>";
        else if ($idade >=18 && $idade <=75)
            echo "<i>Votação obrigatória</i>";
        if ($idade >75)
            echo 'vai descançar';
        
        
    
 /*<b> <b/> =negrito 
   <marquee> </marquee> =letras em movimento
   <i> </i> =italico*/

        
    ?>
    
</body>
</html>