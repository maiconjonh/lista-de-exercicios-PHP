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
        <h2>Questão 05: Maior de Três Números</h2>
    </header>

    <main>

    <form method="post">
            <label for="num1">Digite o primeiro número:</label>
            <input type="number" name="num1" id="num1" step="0.01" required>

            <label for="num2">Digite o segundo número:</label>
            <input type="number" name="num2" id="num2" step="0.01" required>

            <label for="num3">Digite o terceiro número:</label>
            <input type="number" name="num3" id="num3" step="0.01" required>

            <button type="submit">Verificar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = floatval($_POST["num1"]);
            $num2 = floatval($_POST["num2"]);
            $num3 = floatval($_POST["num3"]);

            $maior = $num1;

            if ($num2 > $maior) {
                $maior = $num2;
            }
            if ($num3 > $maior) {
                $maior = $num3;
            }

            echo "<p>Os números informados foram: <strong>$num1</strong>, <strong>$num2</strong> e <strong>$num3</strong>.</p>";
            echo "<p>O maior número é: <strong>$maior</strong>.</p>";
        }
        ?>
     
    </main>
</body>


</html>