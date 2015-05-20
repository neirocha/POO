<?php

namespace NEI\Clientes\Types;

use \NEI\Clientes\ClienteAbstract;
use \NEI\Clientes\ClienteFisicoInterface;

class PF extends ClienteAbstract implements ClienteFisicoInterface
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