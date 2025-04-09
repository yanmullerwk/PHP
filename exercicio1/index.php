<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Bem Vindo</h1>
    </header>
    <section id="idsection">
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="Numero">Digite um numero</label>
            <input type="text" name="numero" id="idnumero">
            <input type="submit" value="Enviar">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $numero = htmlspecialchars($_GET["numero"]);
            $after = $numero + 1;
            $before = $numero - 1;
            echo "<p>numero anterior é $before e o proximo é $after</p>";
        }
        ?>
    </section>
</body>

</html>