<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 11/05/2015
 * Time: 17:14
 */
require_once "ClienteAbstract.php";
require_once "ClienteJuridicoInterface.php";

class PJ extends Cliente implements ClienteJuridicoInterface
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