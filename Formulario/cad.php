<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>
            Resultado do processamento
        </h1>
    </header>
    <main>
        <?php 
            $name = $_GET["nome"] ?? "Desconhecido";
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
            echo "<p>Olá, $name $sobrenome</p>"
        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar</a>
        </p>
    </main>
</body>
</html>