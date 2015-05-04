<?php

require_once  "../src/Clientes/Cliente.php";


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
            <?php
            $id = filter_input(INPUT_GET, "id");
            if($id){
           var_dump($clientes[$id]);
            }
            ?>
        </h3>
    </div>
    <div class="panel-body">
        <?php

        ?>
    </div>
</div>
<fieldset>
    <legend>Lista de Clientes</legend>
    <table width="100%">
        <?php  foreach($clientes as $cliente):    ?>
            <tr>
                <td>&nbsp;</td>
                <td><label>NOME: </label><a href="?id=<?php echo "{$cliente->getId()}" ?>"><?php echo " {$cliente->getNome()}" ?></a> </td>
                <td><label>CPF: </label><?php echo " {$cliente ->getCpf()}" ?></td>
                <td><label>Email: </label><?php echo " {$cliente->getEmail()}" ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</fieldset>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>
</html>