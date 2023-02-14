<?php

require "header.php";

require "conexao.php";

$codigo = filter_input(INPUT_GET, "codigo", FILTER_SANITIZE_NUMBER_INT);

$sql = "delete from site_games where codigo = ?";

$stmt = $conn->prepare($sql);
$result = $stmt->execute([$codigo]);

if ($result == true) {
?>
    <div class="alert alert-success" role="alert">
        <h4>Dados excluídos com sucesso!</h4>
    </div>
<?php
} else {
?>
    <div class="alert alert-danger" role="alert">
        <h4>Falha ao efetuar gravação.</h4>
        <p><?php echo $stmt->error; ?></p>
    </div>

<?php
}
?>
    <a href="lista.php">Voltar para página de listagem.</a>
<?php
require "footer.php";

?>