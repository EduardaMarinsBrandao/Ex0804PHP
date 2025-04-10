<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio</title>
</head>
<body>
<?php
    $numeroAleatorio = $_GET['sorte'];
    $tentativas = $_GET['tentativas'];
?>
<h1>Parabéns, você acertou!</h1>
<p>O número sorteado foi: <?php echo $numeroAleatorio; ?></p>
<p>Total de tentativas: <?php echo $tentativas; ?></p>
<a href="index.php">Jogar Novamente</a>
</body>
</html>