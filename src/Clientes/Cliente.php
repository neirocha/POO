<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 29/04/2015
 * Time: 17:44
 */

class Cliente
{

    protected $id;
    protected $nome;
    protected $cpf;
    protected $endereco;
    protected $telefone;
    protected $email;


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

}