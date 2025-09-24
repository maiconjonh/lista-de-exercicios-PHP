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
        <h2>Questão 03: Horas trabalhadas</h2>
    </header>

    <main>

    <form method="post">
            <label for="valorHora">Quanto você ganha por hora:</label>
            <input type="number" name="valorHora" id="valorHora" step="0.01" required>

            <label for="horasMes">Número de horas trabalhadas no mês:</label>
            <input type="number" name="horasMes" id="horasMes" step="0.1" required>

            <button type="submit">Calcular Salário</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valorHora = floatval($_POST["valorHora"]);
            $horasMes = floatval($_POST["horasMes"]);

            $salario = $valorHora * $horasMes;

            echo "<p>Você trabalhou <strong>$horasMes horas</strong> no mês, recebendo <strong>R$ $valorHora</strong> por hora.</p>";
            echo "<p>Seu salário mensal será: <strong>R$ " . number_format($salario, 2, ",", ".") . "</strong></p>";
        }
        ?>
     
    </main>
</body>


</html>