<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Número da Sorte</title>
</head>
<body>
<?php

// Declara as variáveis e captura os dados do formulário
$chute = $_POST['chute'] ?? ''; 
$numeroAleatorio = $_POST['sorte']; 
$qtdTentativas = $_POST['qtdTentativas'] ?? 0;
$qtdTentativas++;

// Verifica se o chute está correto
if ($chute == $numeroAleatorio) 
{
    // Caso acerte
    echo "<h2>Parabéns! Você acertou o número da sorte: $numeroAleatorio</h2>";
    echo "<p>Você precisou de $qtdTentativas tentativa(s) para acertar.</p>";
    echo "<p>Obrigado por jogar!</p>";
} else 
{
    // Caso não acerte, verifica se o chute foi menor ou maior e exibe o feedback
    if ($chute < $numeroAleatorio) 
    {
        echo "<p>Seu chute foi menor que o número da sorte.</p>";
    } else if ($chute > $numeroAleatorio) 
    {
        echo "<p>Seu chute foi maior que o número da sorte.</p>";
    }

    echo $numeroAleatorio;
 

    // Recarrega o formulário com os valores atualizados
    echo "<form method='post' action='calcular.php'>";
    echo "<input type='hidden' name='chute' value='$chute'>";
    echo "<input type='hidden' name='sorte' value='$numeroAleatorio'>"; 
    echo "<input type='hidden' name='qtdTentativas' value='$qtdTentativas'>"; 

    echo "</form>";
}


?>
<p><a href="index.php">Tentar Novamente</a></p>
</body>
</html>