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
    <style>
        h2 {
            color: #afdee5;
        }
    </style>
</head>
<body>
    <h1>Variaveis e constantes PHP</h1>
    <?php
    include "Fruta.php";
    //include_once "Fruta.php";
    //require_once "Fruta.php";
    //require "Fruta.php"
        

        
        $a = 2; // int
        $b = 0.1; //double
        $c = ""; //string
        
        $e = null; //nulo
        $teste = false; //bool

        //constante
        define(constant_name: "minha_const", value: "teste");
        const TESTE = "valor";

        //escrevendo na tela
        echo "<p>O valor de \$a é " . $a . "</p>\n";
        echo "\t<p>O valor de b é $b</p>\n";
        echo '\t<p>O valor de b é '.$b.'</p>\n';
        print "\t<p>O valor de a + b é " . $a + $b . "</p>\n";

        echo "O valor de " . TESTE;

    //Objeto DateTime
    $d = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
    echo "\t<p>A data e hora atual é {$d->format("d/m/Y - h:i:s")}</p>\n"; 

    ?>
    <h1>Estruturas de decisão</h1>
    <h2>IF</h2>
    <?php
        if ($a > $b) {
            echo "\t<p>Deu Verdadeiro</p>";
        } else if ($a == $c || $b < $c) {
            echo "\t<p>A é igual a C</p>"; 
        }
    ?>
    <h2>SWITCH</h2>
    <?php
        $a = 10;
        switch ($a) {
            case 1:
                echo "\t<p>O valor é 1!</p>\n";
                break;
            case 2:
                echo "\t<p>O valor é 2!</p>\n";
                break;
            case 3:
                echo "\t<p>O valor é 3!</p>\n";
                break;
            case 4 :
                echo "\t<p>O valor é 4!</p>\n";
                break;   
            case 5:
            case 6:
            case 7:
            case 8: 
                echo "\t<p>O valor está entre 5 e 8!</p>\n";
                break;
            default:
                echo "\t<p>O valor não está entre 1 e 8!</p>\n";
                break;
        }
    ?>
    <h1>Estruturas de repetição</h1>
    <h2>Do... While</h2>
    <?php
    $i = 0; 
        do{
            echo"\t<p>O valor de \$i é $i</p>\n";
            $i++;
        } while ($i <= 10);
     ?>

     <h2>While</h2>
     <?php
        $i = 0; 
        while ($i <= 10)
        {
             echo"\t<p>O valor de \$i é $i</p>\n";
             $i++;
        }
     ?>

      <h2>For</h2>
     <?php
       
        // while ($i <= 10)
        // {
        //      echo"\t<p>O valor de \$i é $i</p>\n";
        //      $i++;
        // }

        for ( $i = 0; $i <= 10; $i+=2){
            echo"\t<p>O valor de \$i é $i</p>\n";
        }
     ?>

     <h2>Foreach</h2>
     <?php
        $vet = ["Zeca", "Pedreiro", "1597"];
        $vet2 = array("Zeca", "Pedreiro", "1597", 123);
        $vet2[] = "Itu";
        array_push($vet2, "SP", "1197678954");
        foreach ($vet as $value) {
             echo"\t<p>O valor atual é $value</p>\n";
        }
        
     ?>

     <h2>For com vetor indexado</h2>
     <?php
        for ($i=0; $i < count($vet2); $i++) { 
        echo "\t<p>O valor da posição ". $i+1 ."ª do vetor \$vet2 é {$vet2[$i]} </p>\n";
        }
     ?>
     
     <h2>Foreach com vetor associativo</h2>
     <?php
     $vet_assoc = ["id"=>"1","nome"=>"Tião", "Telefone"=>"15997233488"];
        foreach ($vet_assoc as $key => $value) { 
        echo "\t<p>O valor de $key do vetor \$vet_assoc é $value</p>\n";
        }
        echo"\t<p>O valor avulso de \$vet_assoc é {$vet_assoc["nome"]}</p>\n";
     ?>

      <h2>For com vetor bidimensional</h2>
     <?php
        /*$cars = array (
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
        );*/
        $cars = [
            ["Volvo", 22, 18],
            ["BMW", 15, 13,],
            ["Saab", 5, 2, "tralalero"],
            ["Land Rover", 17, 15],
            123
        ];
        echo"\t<p>O valor avulso de \$cars é {$cars["1"]["1"]}</p>\n";
        for ($i=0; $i < count($cars); $i++) { 
            if (is_array($cars[$i])) {
                for ($j= 0; $j < count($cars[$i]); $j++) {
                    echo "\t<p>O valor da posição $i do vetor \$cars na posição $j é {$cars[$i][$j]}</p>\n";
                }
            } else {
                 echo "\t<p>O valor da posição $i do vetor \$cars é {$cars[$i]}</p>\n";
            }
        }
        
     ?>
      <h2>Foreach com vetor objetos</h2>
     <?php
     $fruta1 = new Fruta();
     $fruta2 = new Fruta();
     $fruta1->setNome("Mamão");
     $fruta1->setCor("laranja");
     $fruta2->setNome("Limão");
     $fruta2->setCor("verde");
     $vet_frutas = [$fruta1, $fruta2];
     foreach ($vet_frutas as $obj) {
        echo "\t<p>{$obj->__tostring()}</p>\n";
    }
    echo"\t<p>O valor avulso de \$fruta2 é {$fruta2->getNome()}</p>\n";
    echo"\t<p>O valor avulso de \$vet_frutas é {$vet_frutas[0]->getNome()}</p>\n";
     ?>
    <h1>Superglobals</h1>
    <h2>Global $_SERVER</h2>
    <?php
    echo "<p>{$_SERVER['PHP_SELF']}</p>\n";
    echo "<p>{$_SERVER['SERVER_NAME']}</p>\n";
    echo "<p>{$_SERVER['HTTP_HOST']}</p>\n";
    echo "<p>{$_SERVER['HTTP_USER_AGENT']}</p>\n";
    echo "<p>{$_SERVER['SCRIPT_NAME']}</p>\n";
    ?>
    <h2>Global $_GET</h2>
    <a href="dados.php?var1=picicopata&var2=40666">Exemplo requisição GET</a>
    
    <h2>Global $_POST</h2>
    <form action="dados.php?var=exemplo123" method="post" enctype="multipart/form-data">
        <label for="nom">Nome: </label>
        <input type="text" name="nome" id="nom" maxlength="50" value="" placeholder="Digite seu nome"><br>
        <label for="ende">Endereço: </label>
        <input type="text" name="endereco" id="ende" maxlength="50" value="" placeholder="Seu endereço"><br>
        <label for="dtnasc">Data de nascimento: </label>
        <input type="date" name="datanasc" id="dtnasc" min="2012-01-01" max="2020-12-31"><br>
        <label for="arq">Foto: </label>
        <input type="file" name="arqUp" id="arq" accept="image/*"><br>
        
        <input type="submit" value="Gravar"><br>
        <button type="submit">Mandar</button>  
    </form>

     <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
