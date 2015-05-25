<?php
namespace NEI\Clientes;

use NEI\BancoDeDados\Conexao;

class Listar extends Conexao
{


    public function listar($order = 'ASC') {

        //$sql2 = $this->getPdo()->prepare("SELECT * FROM pessoafisica  ORDER BY nome {$order}");
        $sql2 = $this->getPdo()->prepare("SELECT * FROM pessoafisica UNION SELECT * FROM pessoajuridica ORDER BY nome {$order}");
        $sql2->execute();
        $ret = $sql2->fetchAll(\PDO::FETCH_ASSOC);
        $clientes = array_merge($ret);

        return  $ret;
    }


}