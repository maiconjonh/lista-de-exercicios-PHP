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
        <h2>Questão 04: Tinta para Pintura</h2>
    </header>

    <main>

    <form method="post">
            <label for="area">Digite o tamanho da área a ser pintada (m²):</label>
            <input type="number" name="area" id="area" step="0.1" required>

            <button type="submit">Calcular Tinta</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $area = floatval($_POST["area"]);
            $rendimento = 6; // 1 litro pinta 6m²

            $litros = $area / $rendimento;

            echo "<p>Área a ser pintada: <strong>$area m²</strong></p>";
            echo "<p>Quantidade de tinta necessária: <strong>" . ceil($litros) . " litros</strong></p>";
        }
        ?>
     
    </main>
</body>


</html>