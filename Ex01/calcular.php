<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>
</head>
<body>
<?php
// Declara as variáveis e captura os dados do formulário
$n1 = $_POST['n1'];

echo "Decompondo o valor: R$ " . $n1 . "<br>";

// Verifica se o valor é negativo
if ($n1 < 0) {
    echo "Valor inválido! <br>";
    exit;
}

$valorAtual = 100; 

while ($valorAtual >= 1) 
{
    $qtd = intdiv($n1, $valorAtual); // intdiv() retorna a parte inteira da divisão

    // Verifica se a quantidade de cédulas ou moedas é maior que zero
    if ($qtd > 0) 
    {
        echo "Esse valor contém " . $qtd . " nota(s)/moeda(s) de R$" . $valorAtual . ".<br>";
    }

    if ($valorAtual == 100) 
    {
        $valorAtual = 50;
    } 
    else if ($valorAtual == 50) 
    {
        $valorAtual = 20;
    } 
    else if ($valorAtual == 20) 
    {
        $valorAtual = 10;
    } 
    else if ($valorAtual == 10) 
    {
        $valorAtual = 5;
    } 
    else if ($valorAtual == 5) 
    {
        $valorAtual = 2;
    } 
    else if ($valorAtual == 2) 
    {
        $valorAtual = 1;
    } 
    else 
    {
        break; // Finaliza o loop
    }
}
?>
<p><a href="index.html">Voltar</a></p>
</body>
</html>