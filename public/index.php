<?php

define('CLASS_DIR', __DIR__ . "/../src/");
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$conexao = new \NEI\BancoDeDados\Conexao();
$db      = new \NEI\Clientes\Listar($conexao->getPdo());
$select = new \NEI\Clientes\ClienteSelecionado($conexao->getPdo());

$selecionado = $select->listarcliente();
$clientes = $db->listar();


$data = filter_input(INPUT_GET, "ordem");

if($data == "ASC") {
    $clientes = $db->listar('ASC');
}
if($data == 'desc') {
    $clientes = $db->listar('DESC');
}



?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agenda</title>

        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>
<body>

<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">

        </h3>
    </div>
    <div class="panel-body">
        <?php


        $id = filter_input(INPUT_GET, "id");
        if($id) {


            if ($selecionado['tipo'] == "Pessoa Fissica") {
                echo "<label>Nome: </label> " . $selecionado['nome'] . "</br>";
                echo "<label>Tipo de Cliente: </label> " . $selecionado['tipo'] . "</br>";
                echo "<label>CPF: </label> " . $selecionado['cpf'] . "</br>";
            } else {
                echo "<label>Razão Social: </label> " . $selecionado['nome'] . "</br>";
                echo "<label>Tipo de Cliente: </label> " . $selecionado['tipo'] . "</br>";
                echo "<label>CNPJ: </label> " . $selecionado['cnpj'] . "</br>";
            }

            echo "<label>Endereco: </label> " . $selecionado['endereco'] . "</br>";
            echo "<label>Telefone: </label> " . $selecionado['telefone'] . "</br>";
            echo "<label>Email: </label> " . $selecionado['email'] . "</br>";
            echo "<label>Grau de Importancia: </label> ";
            for ($i = 0; $i <= $selecionado['grau']; $i++) {
                echo "<i class='glyphicon glyphicon-star'></i>";
            }

            if ($selecionado['tipo'] == "Pessoa Juridica") {
                echo "</br><label>Endereco de Cobrança: </label>" . $selecionado['endCob'] . "</br>";
            }
        }
        ?>
    </div>
</div>

<p>

    <a href="?ordem=desc" class="btn btn-"><i class="glyphicon glyphicon-circle-arrow-up"></i></a>&nbsp;
    <a href="?ordem=asc" class="btn btn-"><i class="glyphicon glyphicon-circle-arrow-down"></i></a>
</p>
<fieldset>
    <legend>Lista de Clientes</legend>
    <table width="100%">
        <tr>
            <td>&ensp;</td>
            <td><label>Nome / Razão Social</label></td>
            <td><label>Tipo de Cliente</label></td>
            <td><label>CPF / CNPJ</label></td>
            <td><label>Email</label></td>
        </tr>
        <tr>
            <td>&ensp;</td>
            <td><label></td>
            <td><label></td>
        </tr>

        <?php
/*

*/



        foreach($clientes as $cliente):

            ?>
            <tr>

                <td>&ensp;</td>
                <td><a href="?id=<?=$cliente['id'];?>&tipo=<?=$cliente['tipo'];?>"> <?=$cliente['nome'];?></a><hr> </td>
                <td><?=$cliente['tipo'];?><hr></td>
                <td><?=$cliente['cpf'];?><hr></td>
                <td><?=$cliente['email'];?><hr></td>
            </tr>
        <?php  endforeach; ?>
    </table>
</fieldset>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>
</html>