<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Subtração</title>
</head>
<body>
<?php
    $tentativas = 0;
    $n1 = $_POST['n1'];

	do
	{
		$nA = rand(1,10);
		$n1 = $n1 - $nA;
		$tentativas++;		
	}
	while($n1 > 0);
	echo "O número que você digitou foi subtraído por números aleatórios entre 1 e 10 para se tornar 0 ou negativo " . $tentativas . " vezes.";
?>
</body>
</html>