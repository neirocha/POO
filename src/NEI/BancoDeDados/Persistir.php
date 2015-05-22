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

    public function flush()
    {
        foreach($this->clientes as $cliente)
        {
            // sua lógica para gravar os dados
            try {
                if (method_exists($cliente, "getCpf")) {
                    $stmt = $this->pdo->prepare("INSERT INTO PessoaFisica(nome,cpf,endereco,endCob,telefone,grau, tipo) VALUES(:nome,:cpf,:endereco,:endCob,:telefone,:grau, :tipo)");
                    $cpf = $cliente->getCpf();
                    $nome = $cliente->getNome();
                    $stmt->bindParam(":cpf", $cpf);
                    $stmt->bindValue(":tipo", "Pessoa Fissica");
                } else {
                    $stmt = $this->pdo->prepare("INSERT INTO PessoaJuridica(razaoSocial,cnpj,endereco,endCob,telefone,grau, tipo) VALUES(:razaoSocial,:cnpj,:endereco,:endCob,:telefone,:grau, :tipo)");
                    $cnpj = $cliente->getCnpj();
                    $razaoSocial = $cliente->getRazaoSocial();
                    $stmt->bindParam(":razaoSocial", $razaoSocial);
                    $stmt->bindParam(":cnpj", $cnpj);
                    $stmt->bindValue(":tipo", "Pessoa Juridica");
                }

                $endereco = $cliente->getEndereco();
                $endCob = $cliente->getEnderecoDeCobranca();
                $telefone = $cliente->getTelefone();
                $grau = $cliente->getGrauDeImportanciaInterface();

                $stmt->bindParam(":endereco", $endereco);
                $stmt->bindParam(":endCob", $endCob);
                $stmt->bindParam(":telefone", $telefone);
                $stmt->bindParam(":grau", $grau);

                if (!$stmt->execute()) {
                    print_r($stmt->errorInfo());
                }
            } catch (\PDOException $ex) {
                echo "Erro ao inserir dados: " . $ex->getMessage();
            }

        }
    }

}
 