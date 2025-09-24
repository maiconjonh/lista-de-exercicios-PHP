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
        <h2>Questão 09: Dias de Vida</h2>
    </header>

    <main>

    <form method="post">
            <label for="nome">Digite seu nome:</label>
            <input type="text" name="nome" id="nome" required>

            <label for="idade">Digite sua idade (em anos completos):</label>
            <input type="number" name="idade" id="idade" min="0" required>

            <button type="submit">Calcular Dias de Vida</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = trim($_POST["nome"]);
            $idade = intval($_POST["idade"]);

            $diasVida = $idade * 365;

            echo "<p><strong>$nome</strong>, você já viveu aproximadamente <strong>$diasVida dias</strong>.</p>";
        }
        ?>
     
    </main>
</body>


</html>