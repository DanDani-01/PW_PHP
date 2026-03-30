<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="description" content="">
    <meta name ="keywords" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/exemplo.css">
</head>
<body>
    <h1>Dados de requisições GET e  POST</h1>
    <?php
        if (isset($_GET["var1"]) && isset( $_GET["var2"])) {
            $var1 = $_GET["var1"];
            $var2 = $_GET["var2"];
            echo "<p>O valor informado: {$_GET["var1"]}</p>\n";
            echo "<p>O valor informado: $var2</p>\n";
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $var = $_GET["var"];
            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $datansc = $_POST["datanasc"];
            $arqUp = $_FILES["arqUp"]["name"];

            echo "<h2>Dados do Form:</h2>\n";
            echo "\t<p>Nome: $nome</p>\n";
            echo "\t<p>Endereço: {$_POST["endereco"]}</p>\n";
            echo "\t<p>Data de Nasc.: $datansc</p>\n";
            echo "\t<p>Foto: $arqUp</p>\n";

            echo "\t<p>Var: $var</p>\n";
        }
    ?>
</body>
</html>