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
        <h2>Questão 10: Calculando as Horas</h2>
    </header>

    <main>

    <form method="post">
            <label for="segundos">Digite o tempo em segundos:</label>
            <input type="number" name="segundos" id="segundos" min="0" required>

            <button type="submit">Converter</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $totalSegundos = intval($_POST["segundos"]);

            $horas = intdiv($totalSegundos, 3600);
            $resto = $totalSegundos % 3600;

            $minutos = intdiv($resto, 60);
            $segundos = $resto % 60;

            echo "<p>O evento durou: <strong>{$horas} horas, {$minutos} minutos e {$segundos} segundos</strong>.</p>";
        }
        ?>
     
    </main>
</body>


</html>