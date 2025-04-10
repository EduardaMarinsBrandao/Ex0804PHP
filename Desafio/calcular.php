<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Número da Sorte</title>
</head>
<body>
<?php
    $numeroAleatorio = $_POST['sorte'];
    $tentativas = $_POST['tentativas'] + 1;
    $numeroUsuario = $_POST['numero'];
?>
<form action="calcular.php" method="post">
    <input type="hidden" name="sorte" value="<?php echo $numeroAleatorio; ?>">
    <input type="hidden" name="tentativas" value="<?php echo $tentativas; ?>">

    <?php
        if ($numeroUsuario == $numeroAleatorio) 
		{
            header("Location: numero.php?sorte=$numeroAleatorio&tentativas=$tentativas");
            exit;
        } 
		else if ($numeroUsuario < $numeroAleatorio) 
		{
            echo "<p>O número é maior. Tente novamente:</p>";
        } 
		else 
		{
            echo "<p>O número é menor. Tente novamente:</p>";
        }
    ?>
    <input type="number" name="numero" required>
    <button type="submit">Enviar</button>
</form>
</body>
</html>