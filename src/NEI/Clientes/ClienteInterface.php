<?php

namespace NEI\Clientes;

interface ClienteInterface
{
    public function getId();
    public function getNome();
    public function getCpf();
    public function getEndereco();
    public function getTelefone();
    public function getEmail();
    public function getEnderecoDeCobranca();
    public function getGrauDeImportancia();
    public function getRazaoSocial();


}