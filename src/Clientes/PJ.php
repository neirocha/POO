<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 11/05/2015
 * Time: 17:14
 */

class PJ extends Cliente implements ClienteJuridicoInterface
{

    protected $cnpj;
    protected $razaoSocial;

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }
    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

}