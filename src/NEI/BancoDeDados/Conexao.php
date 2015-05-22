<?php

namespace NEI\BancoDeDados;


class Conexao
{
    protected $pdo;

    public function __construct()
    {
        try{
            $this->pdo = new \PDO("mysql:host=localhost;charset=utf8;dbname=projeto_poo", "root", "",
                array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
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