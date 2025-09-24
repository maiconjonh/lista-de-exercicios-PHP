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
        <h2>Questão 08: Números Ímpares</h2>
    </header>

    <main>

    <?php
     echo "<h2>Números ímpares entre 1 e 50</h2>";
   echo "<p>";

       for ($i = 1; $i <= 50; $i += 2) {
     echo "<span style='margin-right:10px;'>$i</span>";
  }

     echo "</p>";
    ?>

    </main>
</body>


</html>