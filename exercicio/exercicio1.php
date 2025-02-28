<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>

    <form action="exercicio1.php" method="get">

        <fieldset>
            <legend>Sistema de Avaliação</legend>
            <label for="nota">Nota</label>
            <input type="text" name="nota" id="nota" placeholder="0" required>

            <br>

            <input type="submit" name="verificar" value="Verificar">
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['nota'])) {
            if (empty($_GET['nota'])) {
                echo 'O nota é obrigatório!';
                exit();
            }
        } else {
            exit();
        }

        $nota = $_GET['nota'];

        if ($nota < 6)
            echo "<b>Aluno Reprovado</b>";
        else if ($nota >= 6 && $nota <= 7)
            echo "<marquee>Aluno Recuperação</marquee>";
        else
            echo "<i>Aluno Aprovado</i>";
        
        

        
    ?>
    
</body>
</html>