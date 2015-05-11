<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 11/05/2015
 * Time: 17:12
 */

class PF extends Cliente implements ClienteFisicoInterface
{
    protected $cpf;

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

}