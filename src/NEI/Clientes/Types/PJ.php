<?php

namespace NEI\Clientes\Types;

use NEI\Clientes\ClienteAbstract;
use NEI\Clientes\ClienteJuridicoInterface;

class PJ extends ClienteAbstract implements ClienteJuridicoInterface
{

    protected $cnpj;
    protected $razaoSocial;

    /**
     * @param $cnpj
     * @return $this
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param $razaoSocial
     * @return $this
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

}