<?php
define('CLASS_DIR', __DIR__ . "/../src/");
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$conexao = new NEI\BancoDeDados\Conexao();
$conexao->setPdo($this->pdo);
$tablePessoaFisica = $conexao->getPdo()->exec(
    "CREATE TABLE IF NOT EXISTS `PessoaFisica` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(255) NOT NULL,
    `cpf` VARCHAR(14) NOT NULL,
    `endereco` TEXT NOT NULL,
    `endCob` TEXT NULL,
    `telefone` VARCHAR(15) NOT NULL,
    `grau` INT(1) NOT NULL);"
);
/*
if (!$tablePessoaFisica->execute()) {
    die(print_r($tablePessoaFisica->errorInfo()));
}
$tablePessoaJuridica = $pdo->prepare(
    "CREATE TABLE IF NOT EXISTS `PessoaJuridica`(
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(255) NOT NULL,
    `razaoSocial` VARCHAR(255) NOT NULL,
    `cnpj` VARCHAR(14) NOT NULL,
    `endereco` TEXT NOT NULL,
    `endCob` TEXT NULL,
    `telefone` VARCHAR(15) NOT NULL,
    `grau` INT(1) NOT NULL);"
);

if (!$tablePessoaJuridica->execute()) {
    die(print_r($tablePessoaJuridica->errorInfo()));
}
-*/
echo "Tabela Criada!<br>Dados Cadastrados!";