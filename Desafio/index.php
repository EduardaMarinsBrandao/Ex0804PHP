<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio</title>
</head>
<body>
<fieldset>
    <legend>Número da Sorte</legend>

    <form method="post" action="calcular.php">
        Tente adivinhar o número da sorte entre 0 e 100:
        <br />
        <input type="text" name="chute" size="25" />
        <input type="hidden" name="qtdTentativas" value="0">
        <br />
        <button type="submit">Enviar</button>
        <br />
    </form>
</fieldset>
</body>
</html>
