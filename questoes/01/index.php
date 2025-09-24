<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 1: Antecessor de um Valor</h2>
    </header>

    <main>

    <form method="post">
            <label for="valor">Digite um número:</label>
            <input type="number" name="valor" id="valor" required>
            <button type="submit">Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor = intval($_POST["valor"]);
            $antecessor = $valor - 1;
            echo "<p>O antecessor de <strong>$valor</strong> é <strong>$antecessor</strong>.</p>";
        }
        ?>
     
    </main>
</body>


</html>