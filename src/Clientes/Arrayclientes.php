<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 29/04/2015
 * Time: 18:27
 */

require_once "Cliente.php";

class Arrayclientes extends Cliente
{
    $cliente1 = new Arrayclientes();
    $cliente1->setNome("Nei Rocha");
    $cliente1->setCpf("123.456.789-10");
    $cliente1->setEndereco("Rua B");
    $cliente1->setTelefone("(71)8782-5018");
    $cliente1->setEmail("saturncomunicacao@hotmail.com");

    $cliente2 = new Cliente();
    $cliente2->setNome("Carlos ");
    $cliente2->setCpf("223.456.789-20");
    $cliente2->setEndereco("Rua C");
    $cliente2->setTelefone("(71)8782-5018");
    $cliente2->setEmail("liamodass@hotmail.com");

    $cliente3 = new Cliente();
    $cliente3->setNome("Maria");
    $cliente3->setCpf("323.456.789-30");
    $cliente3->setEndereco("Rua D");
    $cliente3->setTelefone("(73)8782-5038");
    $cliente3->setEmail("santosterra@hotmail.com");

    $cliente4 = new Cliente();
    $cliente4->setNome("Antonio");
    $cliente4->setCpf("423.456.789-40");
    $cliente4->setEndereco("Rua E");
    $cliente4->setTelefone("(74)8782-5048");
    $cliente4->setEmail("amostradelta@hotmail.com");

    $cliente5 = new Cliente();
    $cliente5->setNome("Lucas");
    $cliente5->setCpf("523.456.789-50");
    $cliente5->setEndereco("Rua F");
    $cliente5->setTelefone("(75)8782-5058");
    $cliente5->setEmail("crepusculo@hotmail.com");

    $cliente6 = new Cliente();
    $cliente6->setNome("Luciano");
    $cliente6->setCpf("623.456.789-60");
    $cliente6->setEndereco("Rua G");
    $cliente6->setTelefone("(76)8782-5068");
    $cliente6->setEmail("lucasls@hotmail.com");

    $cliente7 = new Cliente();
    $cliente7->setNome("Jorge");
    $cliente7->setCpf("723.456.789-70");
    $cliente7->setEndereco("Rua H");
    $cliente7->setTelefone("(77)8782-5078");
    $cliente7->setEmail("lucaslsanted@hotmail.com");

    $cliente8 = new Cliente();
    $cliente8->setNome("Gabriel");
    $cliente8->setCpf("823.456.789-80");
    $cliente8->setEndereco("Rua I");
    $cliente8->setTelefone("(78)8782-5088");
    $cliente8->setEmail("testede@hotmail.com");

    $cliente9 = new Cliente();
    $cliente9->setNome("Lucas");
    $cliente9->setCpf("923.456.789-90");
    $cliente9->setEndereco("Rua J");
    $cliente9->setTelefone("(79)8782-5098");
    $cliente9->setEmail("testedeglogo@hotmail.com");

    $cliente10 = new Cliente();
    $cliente10->setNome("Paraiba");
    $cliente10->setCpf("1023.456.789-100");
    $cliente10->setEndereco("Rua L");
    $cliente10->setTelefone("(710)8782-50108");
    $cliente10->setEmail("amarok@hotmail.com");


$clientes = array($cliente1, $cliente2, $cliente3, $cliente4, $cliente5, $cliente6, $cliente7, $cliente8, $cliente9, $cliente10);


}

