<?php
require "header.php";
require "conexao.php";


$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$fabricante = filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_SPECIAL_CHARS);
$ano = filter_input(INPUT_POST, "ano", FILTER_SANITIZE_NUMBER_INT);
$preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_SPECIAL_CHARS);



$sql = "insert into site_games (nome, fabricante, ano, preco) values (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$result = $stmt->execute([$nome, $fabricante, $ano, $preco]);

if ($result == true) {
?>
    <div class="alert alert-success" role="alert">
        <h4> Dados gravados com sucesso </h4>
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


<a href="form.php">Voltar para página formulário</a>


<?php
require "footer.php";

?>