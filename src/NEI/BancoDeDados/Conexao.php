<?php

namespace NEI\BancoDeDados;


class Conexao
{
    protected $pdo;

    public function __construct()
    {
        try{
            $this->pdo = new \PDO("mysql:host=localhost;charset=utf8", "projeto_poo", "root", "");
        }catch (\PDOException $e){
            echo $e->getMessage()."\n";
            echo $e->getTraceAsString()."\n";
        }
    }

    /**
     * @param $pdo
     * @return $this
     */
    public function setPdo($pdo)
    {
        $this->pdo = $pdo;
        return $this;
    }
    public function getPdo()
    {
        return $this->pdo;
    }
}