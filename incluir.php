
<?php

include_once ("conexão.php");



$cod = $_POST['codigo'];
$prod = $_POST['produto'];
$desc = $_POST['descricao'];
$data = $_POST['dataa'];
$val = $_POST['valor'];


$sql = "insert into $tabela (codigo, produto, descricao, dataa, valor) values ('$cod', '$prod', '$desc', '$data', '$val')";

$result = @mysqli_query ($conect, $sql);

if (!$result) {
  die ('Query inválida: ' . @mysqli_error($conect));
} else {

    @mysqli_close($conect);
    echo "Registro cadastrado com sucesso!!    <a href='index.php'> Voltar </a>";
    exit;
    
  }

?>
