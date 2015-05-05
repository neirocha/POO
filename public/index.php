<?php

require_once  "../src/Clientes/Cliente.php";




$cliente1 = new Cliente();
$cliente1->setId(1);
$cliente1->setNome("Nei Rocha");
$cliente1->setCpf("123.456.789-10");
$cliente1->setEndereco("Rua B");
$cliente1->setTelefone("(71)8782-5018");
$cliente1->setEmail("saturncomunicacao@hotmail.com");

$cliente2 = new Cliente();
$cliente2->setId(2);
$cliente2->setNome("Carlos ");
$cliente2->setCpf("223.456.789-20");
$cliente2->setEndereco("Rua C");
$cliente2->setTelefone("(71)8782-5018");
$cliente2->setEmail("liamodass@hotmail.com");

$cliente3 = new Cliente();
$cliente3->setId(3);
$cliente3->setNome("Maria");
$cliente3->setCpf("323.456.789-30");
$cliente3->setEndereco("Rua D");
$cliente3->setTelefone("(73)8782-5038");
$cliente3->setEmail("santosterra@hotmail.com");

$cliente4 = new Cliente();
$cliente4->setId(4);
$cliente4->setNome("Antonio");
$cliente4->setCpf("423.456.789-40");
$cliente4->setEndereco("Rua E");
$cliente4->setTelefone("(74)8782-5048");
$cliente4->setEmail("amostradelta@hotmail.com");

$cliente5 = new Cliente();
$cliente5->setId(5);
$cliente5->setNome("Lucas");
$cliente5->setCpf("523.456.789-50");
$cliente5->setEndereco("Rua F");
$cliente5->setTelefone("(75)8782-5058");
$cliente5->setEmail("crepusculo@hotmail.com");

$cliente6 = new Cliente();
$cliente6->setId(6);
$cliente6->setNome("Luciano");
$cliente6->setCpf("623.456.789-60");
$cliente6->setEndereco("Rua G");
$cliente6->setTelefone("(76)8782-5068");
$cliente6->setEmail("lucasls@hotmail.com");

$cliente7 = new Cliente();
$cliente7->setId(7);
$cliente7->setNome("Jorge");
$cliente7->setCpf("723.456.789-70");
$cliente7->setEndereco("Rua H");
$cliente7->setTelefone("(77)8782-5078");
$cliente7->setEmail("lucaslsanted@hotmail.com");

$cliente8 = new Cliente();
$cliente8->setId(8);
$cliente8->setNome("Gabriel");
$cliente8->setCpf("823.456.789-80");
$cliente8->setEndereco("Rua I");
$cliente8->setTelefone("(78)8782-5088");
$cliente8->setEmail("testede@hotmail.com");

$cliente9 = new Cliente();
$cliente9->setId(9);
$cliente9->setNome("Lucas");
$cliente9->setCpf("923.456.789-90");
$cliente9->setEndereco("Rua J");
$cliente9->setTelefone("(79)8782-5098");
$cliente9->setEmail("testedeglogo@hotmail.com");

$cliente10 = new Cliente();
$cliente10->setId(10);
$cliente10->setNome("Paraiba");
$cliente10->setCpf("1023.456.789-10");
$cliente10->setEndereco("Rua L");
$cliente10->setTelefone("(710)8782-50108");
$cliente10->setEmail("amarok@hotmail.com");


$clientes = array(1=>$cliente1,2=>$cliente2, 3=>$cliente3, 4=>$cliente4, 5=>$cliente5, 6=>$cliente6, 7=>$cliente7, 8=>$cliente8, 9=>$cliente9, 10=>$cliente10);
//$clientes = array($cliente1, $cliente2, $cliente3, $cliente4, $cliente5, $cliente6, $cliente7, $cliente8, $cliente9, $cliente10);
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
        if($id){
            echo "<label>Nome: </label> ".$clientes[$id]->getNome()."</br>";
            echo "<label>CPF: </label> ".$clientes[$id]->getCpf()."</br>";
            echo "<label>Endereco: </label> ".$clientes[$id]->getEndereco()."</br>";
            echo "<label>Telefone: </label> ".$clientes[$id]->getTelefone()."</br>";
            echo "<label>Email: </label> ".$clientes[$id]->getEmail()."</br>";

        }

        ?>
    </div>
</div>

<p>
    <a href="?ordem=arsort" class="btn btn-"><i class="glyphicon glyphicon-circle-arrow-up"></i></a>&nbsp;<a href="?ordem=asort" class="btn btn-"><i class="glyphicon glyphicon-circle-arrow-down"></i></a>
</p>
<fieldset>
    <legend>Lista de Clientes</legend>
    <table width="100%">
        <tr>
            <td>&ensp;</td>
            <td><label>Nome</label></td>
            <td><label>CPF</label></td>
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
        $ordem = filter_input(INPUT_GET, "ordem");
        if($ordem)
        {
            $ordem($clientes);
        }

        foreach($clientes as $key=> $cliente):

            ?>
            <tr>

                <td>&ensp;</td>
                <td><?php echo "<a href='?ordem={$ordem}&id={$cliente->getId()}'>".$cliente->getNome()."</a>"; ?><hr> </td>
                <td><?php echo " {$cliente ->getCpf()}" ?><hr></td>
                <td><?php echo " {$cliente->getEmail()}" ?><hr></td>
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