<?php

namespace NEI\BancoDeDados;


use NEI\Clientes\ClienteAbstract;
use NEI\BancoDeDados;


class Persistir
{
    protected $pdo;
    protected $clientes = array();

    public function __constructo(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function persist(ClienteAbstract $cliente)
    {
        $this->clientes[] = $cliente;
    }

    /**
     *
     */
    public function flush()
    {
        foreach($this->clientes as $cliente)
        {
            // sua lógica para gravar os dados

            $conexao = new Conexao();
            try {
                if (method_exists($cliente, "getCnpj")) {
                    $stmt = $conexao->getPdo()->prepare("INSERT INTO pessoajuridica(nome,cnpj,endereco,email,endCob,telefone,grau,tipo) VALUES(:nome,:cnpj,:endereco,:email,:endCob,:telefone,:grau,:tipo)");
                    $cnpj = $cliente->getCnpj();
                    $nome = $cliente->getRazaoSocial();

                    $stmt->bindParam(":nome", $nome);
                    $stmt->bindParam(":cnpj", $cnpj);
                    $stmt->bindValue(":tipo", "Pessoa Juridica");
                } else{
                    $stmt = $conexao->getPdo()->prepare("INSERT INTO pessoafisica(nome,cpf,endereco,email,endCob,telefone,grau,tipo) VALUES(:nome,:cpf,:endereco,:email,:endCob,:telefone,:grau,:tipo)");
                    $cpf = $cliente->getCpf();
                    $nome = $cliente->getNome();

                    $stmt->bindParam(":nome", $nome);
                    $stmt->bindParam(":cpf", $cpf);
                    $stmt->bindValue(":tipo", "Pessoa Fissica");
                }


                $endereco = $cliente->getEndereco();
                $endCob = $cliente->getEnderecoDeCobranca();
                $email = $cliente->getEmail();
                $telefone = $cliente->getTelefone();
                $grau = $cliente->getGrauDeImportanciaInterface();


                $stmt->bindParam(":endereco", $endereco);
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":endCob", $endCob);
                $stmt->bindParam(":telefone", $telefone);
                $stmt->bindParam(":grau", $grau);

                if (!$stmt->execute()) {
                    print_r($stmt->errorInfo());
                }
            } catch (\PDOException $ex) {
                echo "<br>Erro ao inserir dados: <br>" . $ex->getMessage();
            }

        }
    }

}
 