<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf8" />
 <title>inclusão</title>
</head>
  <body>
    <a href="index.php">Voltar</a>

    <h3>Exemplo - inclusão</h3>

    <form action="incluir.php" method="POST">
      <b>Código:</b>
      <input type="number" name="codigo" />
      <br />
      <br />
      <b>Produto:</b>
      <input type="text" name="produto" maxlength="80" style="width:550px" />
      <br />
      <br />
      <b>Descrição:</b>
      <textarea name="descricao" rows="3" cols="100" style="resize: none;"></textarea>
      <br />
      <br />
      <b>Data:</b>
      <input type="date" name="dataa" />
      <br />
      <br />
      <b>Valor:</b>
      <input type="number" step="0.01" name="valor" />
      <br />
      <br />
      <input type="submit" value="Incluir" />&nbsp;&nbsp;
      <input type="reset" value="limpar" />
    </form>
  </body>
</html>
