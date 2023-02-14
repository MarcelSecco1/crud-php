<?php
require "header.php";
$codigo = filter_input(INPUT_GET, "codigo", FILTER_SANITIZE_NUMBER_INT);
if (empty($codigo)) {
    $action = "inserir-cadastro.php";

    $cadastro['nome'] = null;
    $cadastro['codigo'] = null;
    $cadastro['preco'] = null;
    $cadastro['fabricante'] = null;
    $cadastro['ano'] = null;
} else {
    $action = "alterar-cadastro.php";

    require "conexao.php";

    $codigo = filter_input(INPUT_GET, "codigo", FILTER_SANITIZE_NUMBER_INT);

    $sql = "select codigo,nome,fabricante,ano,preco from site_games where codigo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$codigo]);
    $cadastro = $stmt->fetch();
}


?>

<form action="<?=$action?>" method="POST">
    <input type="hidden" name="codigo" value="<?=$codigo?>" require>
    <div class="mb-2 col-12">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?= $cadastro['nome'] ?>">
    </div>
    <div class="mb-2 col-12">
        <label for="fabricante" class="form-label">Fabricante:</label>
        <input type="text" class="form-control" id="fabricante" name="fabricante" value="<?= $cadastro['fabricante'] ?>">
    </div>
    <div class="row g-3">
        <div class="col-md-6 mb-3">
            <label for="ano" class="form-label">Ano de Lançamento: </label>
            <input type="number" class="form-control" id="ano" name="ano" value="<?= $cadastro['ano'] ?>">
        </div>
        <div class="col-md-6 mb-5">
            <label for="ano" class="form-label">Preço médio: </label>
            <input type="number" class="form-control" id="currency" name="preco" value="<?= $cadastro['preco'] ?>">
            
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-evenly">
    <button type="submit" class="btn btn-primary">Gravar</button>
    <button type="reset" class="btn btn-warning">Cancelar</button>
    </div>

    </form> 
</div>
<?php
require "footer.php";
?>