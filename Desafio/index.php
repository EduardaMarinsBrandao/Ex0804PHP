<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio</title>
</head>
<body>
<fieldset>
    <legend>Número da Sorte</legend>

    <form action="calcular.php" method="post">
    <?php 
        $numeroAleatorio = rand(1, 100); // Gerar um número aleatório
        $tentativas = 0; // Inicializar contador de tentativas
    ?>
    <input type="hidden" name="sorte" value="<?php echo $numeroAleatorio; ?>">
    <input type="hidden" name="tentativas" value="<?php echo $tentativas; ?>">
    <label for="numero">Digite o seu número da sorte:</label>
    <input type="number" id="numero" name="numero" required>
    <button type="submit">Enviar</button>
	</form>
</fieldset>
</body>
</html>
