<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 29/04/2015
 * Time: 17:44
 *
 **/


require_once "EnderecoDeCobranca.php";
require_once "GrauDeImportanciaInterface.php";


class Cliente implements EnderecoDeCobranca, GrauDeImportanciaInterface
{
    protected $id;
    protected $nome;
    protected $endereco;
    protected $telefone;
    protected $email;
    protected $enderecoDeCobranca;
    protected $grauDeImportanciaInterface;
    protected $cpf;
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


    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }


    public function setEnderecoDeCobranca($enderecoDeCobranca)
    {
        $this->enderecoDeCobranca = $enderecoDeCobranca;
        return $this;
    }

    public function getEnderecoDeCobranca()
    {
        return $this->enderecoDeCobranca;
    }

    public function setGrauDeImportanciaInterface($grauDeImportanciaInterface)
    {
        $this->grauDeImportanciaInterface = $grauDeImportanciaInterface;
        return $this;
    }

    public function getGrauDeImportanciaInterface()
    {
        return $this->grauDeImportanciaInterface;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

}