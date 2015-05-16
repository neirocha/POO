<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 11/05/2015
 * Time: 17:12
 */

 require_once "Cliente.php";
 require_once "ClienteFisicoInterface.php";

class PF extends Cliente implements ClienteFisicoInterface
{
    protected $cpf;

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

}