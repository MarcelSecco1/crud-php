<?php
require "header.php";
require "conexao.php";

$codigo = filter_input(INPUT_POST, "codigo", FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$fabricante = filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_SPECIAL_CHARS);
$ano = filter_input(INPUT_POST, "ano", FILTER_SANITIZE_NUMBER_INT);
$preco = filter_input(INPUT_POST,"preco", FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "update site_games set nome = ?, fabricante  = ?, ano = ?, preco = ? where codigo = ?";
$stmt = $conn->prepare($sql);
$result = $stmt->execute([$nome, $fabricante, $ano, $preco, $codigo]);



if ($result == true) {
?>
    <div class="alert alert-success" role="alert">
        <h4> Registro alterado com sucesso </h4>
    </div>
<?php
} else {
?>
    <div class="alert alert-danger" role="alert">
        <h4> Falha ao efetuar gravação. </h4>
        <p><?= $stmt->error; ?></p>
    </div>
<?php
}
?>
<a href="lista.php">Voltar para página de listagem</a>

<?php
require "footer.php";

?>