<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 29/04/2015
 * Time: 17:44
 *
 **/


require_once __DIR__."/EnderecoDeCobranca.php";
require_once __DIR__."/GrauDeImportanciaInterface.php";
require_once __DIR__."/ClienteFisicoInterface.php";
require_once __DIR__."/ClienteInterface.php";
require_once __DIR__."/ClienteJuridicoInterface.php";
require_once __DIR__."/PF.php";
require_once __DIR__."/PJ.php";



class Cliente implements EnderecoDeCobranca, GrauDeImportanciaInterface
{
    protected $id;
    protected $nome;
    protected $endereco;
    protected $telefone;
    protected $email;
    protected $enderecoDeCobranca;
    protected $grauDeImportancia;


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
