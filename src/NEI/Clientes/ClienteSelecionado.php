<?php

namespace NEI\Clientes;


use NEI\BancoDeDados\Conexao;

class ClienteSelecionado extends Conexao
{


    public function listarcliente() {
        $id = filter_input(INPUT_GET, "id");
        $tipo = filter_input(INPUT_GET, "tipo");

        if ($tipo == "Pessoa Fissica")
        {$tabela = "pessoafisica";}else{$tabela = "pessoajuridica";}

        $sql2 = $this->getPdo()->prepare("SELECT * FROM $tabela  WHERE id = :id and tipo = :tipo");
        $sql2->bindParam("id", $id);
        $sql2->bindParam("tipo", $tipo);
        $sql2->execute();
        $stmt = $sql2->fetch(\PDO::FETCH_ASSOC);

        return  $stmt;
    }



}