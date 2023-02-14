<?php

require "header.php";

require "conexao.php";

$sql = "select codigo, nome, fabricante, ano, preco FROM site_games order by codigo";
$stmt = $conn->query($sql);

?>
    <table class="table text-white">
        <thead>
            <tr>
                <th scope="col" style="width: 10%;">Código</th>
                <th scope="col" style="width: 25%;">Nome</th>
                <th scope="col" style="width: 15%;">Fabricante</th>
                <th scope="col" style="width: 25%;">Ano</th>
                <th scope="col" style="width: 25%;">Preco</th>
                <th scope="col" style="width: 25%;" colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while ($row = $stmt->fetch()){
            ?>
            <tr>
                <td><?= $row['codigo'] ?></td>
                <td><?= $row['nome'] ?></td>
                <td><?= $row['fabricante'] ?></td>
                <td><?= $row['ano'] ?></td>
                <td><?= $row['preco'] ?></td>
                <td>
                    <a class="btn btn-sm btn-warning"
                       href="form.php?codigo=<?=$row['codigo']; ?>">
                       <i class="bi bi-pencil-square"></i>
                        Editar
                    </a>
                </td>
                <td>
                    <a class="btn btn-sm btn-danger"
                    href="excluir-cadastro.php?codigo=<?= $row['codigo']; ?>"
                    onclick="if(!confirm('Tem certeza que deseja excluir?')) return false;">
                      <i class="bi bi-trash3"></i>
                        Excluir
                    </a>
                </td>
            </tr>
            <?php 
            }
            ?>
        </tbody> 
    </table>
<?php

require "footer.php";

?>
