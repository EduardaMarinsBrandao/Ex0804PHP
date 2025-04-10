<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adivinhação Aleatória</title>
</head>
<body>
<?php
    $base = rand(1,100);
    $tentativas = 0;
	do
	{
		$nA = rand(1,100);
		$tentativas++;		
	}
	while($nA != $base);
    echo "<h1>O número sorteado foi: $base</h1>"; 
    echo "<h1>Foi tentado: $tentativas vezes.</h1>";
?>
</body>
</html>