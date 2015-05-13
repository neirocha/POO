<?php
/**
 * Created by PhpStorm.
 * User: Nei Rocha
 * Date: 11/05/2015
 * Time: 17:11
 */

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