<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>
</head>
<body>
<?php
    //Declara as variáveis e captura os dados do formulário
    $n1 = $_POST['n1'];

    echo "Decompondo o valor: R$ " . $n1 . "<br>";

    // Notas de 100 reais
    $qtd = 0;
    while ($n1 >= 100) 
    {
        $qtd++;
        $n1 -= 100;
    }

    if ($qtd > 0) 
    {
        echo "Esse valor contém " . $qtd . " nota(s) de R$100. <br>";
    }

    // Notas de 50 reais
    $qtd = 0;
    while ($n1 >= 50) 
    {
        $qtd++;
        $n1 -= 50;
    }

    if ($qtd > 0) 
    {
        echo "Esse valor contém " . $qtd . " nota(s) de R$50. <br>";
    }

    // Notas de 20 reais
    $qtd = 0;
    while ($n1 >= 20) 
    {
        $qtd++;
        $n1 -= 20;
    }

    if ($qtd > 0) 
    {
        echo "Esse valor contém " . $qtd . " nota(s) de R$20. <br>";
    }

    // Notas de 10 reais
    $qtd = 0;
    while ($n1 >= 10) 
    {
        $qtd++;
        $n1 -= 10;
    }

    if ($qtd > 0) 
    {
        echo "Esse valor contém " . $qtd . " nota(s) de R$10. <br>";
    }
   

    // Notas de 5 reais
    $qtd = 0;
    while ($n1 >= 5) 
    {
        $qtd++;
        $n1 -= 5;
    }

    if ($qtd > 0) 
    {
        echo "Esse valor contém " . $qtd . " nota(s) de R$5. <br>";
    }

    // Notas de 2 reais
    $qtd = 0;
    while ($n1 >= 2) 
    {
        $qtd++;
        $n1 -= 2;
    }

    if ($qtd > 0) 
    {
        echo "Esse valor contém " . $qtd . " nota(s) de R$2. <br>";
    }

    // Moedas de 1 real
    $qtd = 0;
    while ($n1 >= 1) 
    {
        $qtd++;
        $n1 -= 1;
    }

    if ($qtd > 0) 
    {
        echo "Esse valor contém " . $qtd . " moeda(s) de R$1. <br>";
    }

?>
</body>
</html>