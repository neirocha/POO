<?php
require_once  "../src/Clientes/Cliente.php";
require_once "../src/Clientes/PJ.php";
require_once "../src/Clientes/PF.php";
require_once "../src/Clientes/ClienteJuridicoInterface.php";
require_once "../src/Clientes/ClienteInterface.php";
require_once "../src/Clientes/ClienteFisicoInterface.php";
require_once "../src/Clientes/GrauDeImportanciaInterface.php";
 


$cliente1 = new Cliente();
$cliente1->setId(1)
        ->setNome("Nei Rocha")
        ->setCpf("123.456.789-10")
        ->setEndereco("Rua B")
        ->setTelefone("(71)8782-5018")
        ->setEmail("saturncomunicacao@hotmail.com")
        ->setGrauDeImportanciaInterface(2)
;

$cliente2 = new Cliente();
$cliente2->setId(2)
        ->setRazaoSocial("Pao de acucar ")
        ->setCnpj("05.362.256/0001-25")
        ->setEndereco("Rua C")
        ->setTelefone("(71)8782-5018")
        ->setEmail("liamodass@hotmail.com")
        ->setGrauDeImportanciaInterface(5)
        ->setEnderecoDeCobranca("Rua da Cobranca de cima")
;

$cliente3 = new Cliente();
$cliente3->setId(3)
        ->setNome("Maria")
        ->setCpf("323.456.789-30")
        ->setEndereco("Rua D")
        ->setTelefone("(73)8782-5038")
        ->setEmail("santosterra@hotmail.com")
        ->setGrauDeImportanciaInterface(3)

;

$cliente4 = new Cliente();
$cliente4->setId(4)
        ->setRazaoSocial("Estacio de sa")
        ->setCnpj("03.332.432/0001-23")
        ->setEndereco("Rua Anselmo costa")
        ->setTelefone("(74)8782-5048")
        ->setEmail("amostradelta@hotmail.com")
        ->setGrauDeImportanciaInterface(5)
        ->setEnderecoDeCobranca("Rua E")
;

$cliente5 = new Cliente();
$cliente5->setId(5)
        ->setNome("Lucas")
        ->setCpf("523.456.789-50")
        ->setEndereco("Rua F")
        ->setTelefone("(75)8782-5058")
        ->setEmail("crepusculo@hotmail.com")
        ->setGrauDeImportanciaInterface(1)
        ;

$cliente6 = new Cliente();
$cliente6->setId(6)
        ->setRazaoSocial("Uniao")
        ->setCnpj("07.367.453/0001-66")
        ->setEndereco("Rua G")
        ->setTelefone("(76)8782-5068")
        ->setEmail("lucasls@hotmail.com")
        ->setGrauDeImportanciaInterface(2)
        ->setEnderecoDeCobranca("Rua São marcos")
;

$cliente7 = new Cliente();
$cliente7->setId(7)
        ->setNome("Jorge")
        ->setCpf("723.456.789-70")
        ->setEndereco("Rua H")
        ->setTelefone("(77)8782-5078")
        ->setEmail("lucaslsanted@hotmail.com")
        ->setGrauDeImportanciaInterface(3)
;

$cliente8 = new Cliente();
$cliente8->setId(8)
        ->setRazaoSocial("Lia Modas")
        ->setCnpj("25.342.876/0001-43")
        ->setEndereco("Rua I")
        ->setTelefone("(78)8782-5088")
        ->setEmail("testede@hotmail.com")
        ->setGrauDeImportanciaInterface(1)
        ->setEnderecoDeCobranca("Rua das lucindas")
;

$cliente9 = new Cliente();
$cliente9->setId(9)
        ->setNome("Lucas")
        ->setCpf("923.456.789-90")
        ->setEndereco("Rua J")
        ->setTelefone("(79)8782-5098")
        ->setEmail("testedeglogo@hotmail.com")
        ->setGrauDeImportanciaInterface(3)
;

$cliente10 = new Cliente();
$cliente10->setId(10)
        ->setRazaoSocial("Quaterback")
        ->setCnpj("09.975.735/0001-55")
        ->setEndereco("Rua L")
        ->setTelefone("(710)8782-50108")
        ->setEmail("amarok@hotmail.com")
        ->setGrauDeImportanciaInterface(5)
        ->setEnderecoDeCobranca("Rua das Quebranças")
;


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
            echo "<label>Nome / Razão Social: </label> ".$clientes[$id]->getNome().$clientes[$id]->getRazaoSocial()."</br>";
            echo "<label>CPF / CNPJ: </label> ".$clientes[$id]->getCpf().$clientes[$id]->getCnpj()."</br>";
            echo "<label>Endereco: </label> ".$clientes[$id]->getEndereco()."</br>";
            echo "<label>Telefone: </label> ".$clientes[$id]->getTelefone()."</br>";
            echo "<label>Email: </label> ".$clientes[$id]->getEmail()."</br>";
            echo "<label>Grau de Importancia: </label> ".$clientes[$id]->getGrauDeImportanciaInterface()."</br>";
            if($clientes[$id]->getEnderecoDeCobranca())
            {
                echo "<label>Endereco de Cobrança: </label> " . $clientes[$id]->getEnderecoDeCobranca() . "</br>";
            }




        }

        ?>
    </div>
</div>

<p>
    <a href="?ordem=DESC" class="btn btn-"><i class="glyphicon glyphicon-circle-arrow-up"></i></a>&nbsp;<a href="?ordem=ASC" class="btn btn-"><i class="glyphicon glyphicon-circle-arrow-down"></i></a>
</p>
<fieldset>
    <legend>Lista de Clientes</legend>
    <table width="100%">
        <tr>
            <td>&ensp;</td>
            <td><label>Nome / Razão Social</label></td>
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

        $ordem = filter_input(INPUT_GET, 'ordem');
        if ($ordem == "DESC") {
            krsort($clientes);
        }

        foreach($clientes as $key=> $cliente):

            ?>
            <tr>

                <td>&ensp;</td>
                <td><?php echo "<a href='?ordem={$ordem}&id={$cliente->getId()}'>".$cliente->getNome(). $cliente->getRazaoSocial()."</a>"; ?><hr> </td>
                <td><?php echo $cliente ->getCpf() . $cliente ->getCnpj() ?><hr></td>.
                <td><?php echo " {$cliente->getEmail()}" ?><hr></td>
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