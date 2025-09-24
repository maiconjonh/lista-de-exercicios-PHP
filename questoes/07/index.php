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
        <h2>Questão 07: Fatorial </h2>
    </header>

    <main>

   <form method="post">
            <label for="numero">Digite um número inteiro:</label>
            <input type="number" name="numero" id="numero" min="0" required>
            <button type="submit">Calcular Fatorial</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = intval($_POST["numero"]);

            if ($numero < 0) {
                echo "<p>Fatorial não é definido para números negativos.</p>";
            } else {
                $fatorial = 1;
                $sequencia = "";

                for ($i = $numero; $i >= 1; $i--) {
                    $fatorial *= $i;
                    $sequencia .= $i;
                    if ($i > 1) {
                        $sequencia .= " × ";
                    }
                }

                echo "<p>$numero! = $sequencia = <strong>$fatorial</strong></p>";
            }
        }
        ?>
     
    </main>
</body>


</html>