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
        <h2>Questão 02: Metros para centimetros</h2>
    </header>

    <main>

    <form method="post">
            <label for="metros">Digite a medida em metros:</label>
            <input type="number" name="metros" id="metros" step="0.01" required>
            <button type="submit">Converter</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $metros = floatval($_POST["metros"]);
            $centimetros = $metros * 100;
            echo "<p><strong>$metros metros</strong> equivalem a <strong>$centimetros centímetros</strong>.</p>";
        }
        ?>
     
    </main>
</body>


</html>