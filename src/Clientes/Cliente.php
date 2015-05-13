<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 29/04/2015
 * Time: 17:44
 *
 **/

require_once __DIR__."/ClienteInterface.php";
require_once __DIR__."/EnderecoDeCobranca.php";
require_once __DIR__."/GrauDeImportanciaInterface.php";
require_once __DIR__."/ClienteJuridicoInterface.php";



class Cliente implements ClienteInterface, EnderecoDeCobranca, GrauDeImportanciaInterface, ClienteJuridicoInterface
{
    protected $id;
    protected $nome;
    protected $cpf;
    protected $endereco;
    protected $telefone;
    protected $email;
    protected $enderecoDeCobranca;
    protected $grauDeImportancia;
    protected $razaoSocial;
    protected $cnpj;

    public function setEnderecoDeCobranca($enderecoDeCobranca)
    {
        $this->enderecoDeCobranca = $enderecoDeCobranca;
        return $this;
    }

    public function getEnderecoDeCobranca()
    {
        return $this->enderecoDeCobranca;
    }

    public function setGrauDeImportancia($grauDeImportancia)
    {
        $this->grauDeImportancia = $grauDeImportancia;
        return $this;
    }

    public function getGrauDeImportancia()
    {
        return $this;
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

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
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

    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }
    public function getRazaoSocial()
    {
       return $this->razaoSocial;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;

    }

    public function getCnpj()
    {
        return $this-> cnpj;
    }
}
