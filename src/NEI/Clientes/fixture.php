<?php
define('CLASS_DIR', __DIR__ . "/../../../src/");
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$conexao = new NEI\BancoDeDados\Conexao();


 $tablePessoaFisica = $conexao->getPdo()->exec(
    "CREATE TABLE IF NOT EXISTS `PessoaFisica` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(255) NOT NULL,
    `cpf` VARCHAR(14) NOT NULL,
    `endereco` TEXT NOT NULL,
    `endCob` TEXT NULL,
    `telefone` VARCHAR(15) NOT NULL,
    `email` VARCHAR(150) NOT NULL,
    `grau` INT(1) NOT NULL,
    `tipo` VARCHAR(255) NOT NULL);"
);

$tablePessoaJuridica = $conexao->getPdo()->exec(
    "CREATE TABLE IF NOT EXISTS `PessoaJuridica`(
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(255) NOT NULL,
    `cnpj` VARCHAR(14) NOT NULL,
    `endereco` TEXT NOT NULL,
    `endCob` TEXT NULL,
    `telefone` VARCHAR(15) NOT NULL,
    `email` VARCHAR(150) NOT NULL,
    `grau` INT(1) NOT NULL,
    `tipo` VARCHAR(255) NOT NULL);"
);

$persistir = new \NEI\BancoDeDados\Persistir($pdo);
$fisico1 = new NEI\Clientes\Types\PF();
$fisico2 = new NEI\Clientes\Types\PF();
$fisico3 = new NEI\Clientes\Types\PF();
$fisico4 = new NEI\Clientes\Types\PF();
$fisico5 = new NEI\Clientes\Types\PF();

$juridico1 = new NEI\Clientes\Types\PJ();
$juridico2 = new NEI\Clientes\Types\PJ();
$juridico3 = new NEI\Clientes\Types\PJ();
$juridico4 = new NEI\Clientes\Types\PJ();
$juridico5 = new NEI\Clientes\Types\PJ();


$fisico1->setId(1)
    ->setNome("Nei Rocha")
    ->setTipo("Pessoa Fisica")
    ->setCpf("123.456.789-10")
    ->setEndereco("Rua B")
    ->setTelefone("(71)8782-5018")
    ->setEmail("saturncomunicacao@hotmail.com")
    ->setGrauDeImportanciaInterface(2)
;
$fisico2->setId(2)
    ->setNome("Maria")
    ->setTipo("Pessoa Fisica")
    ->setCpf("323.456.789-30")
    ->setEndereco("Rua D")
    ->setTelefone("(73)8782-5038")
    ->setEmail("santosterra@hotmail.com")
    ->setGrauDeImportanciaInterface(3)

;
$fisico3->setId(3)
    ->setNome("Lucas")
    ->setTipo("Pessoa Fisica")
    ->setCpf("523.456.789-50")
    ->setEndereco("Rua F")
    ->setTelefone("(75)8782-5058")
    ->setEmail("crepusculo@hotmail.com")
    ->setGrauDeImportanciaInterface(1)
;
$fisico4->setId(4)
    ->setNome("Jorge")
    ->setTipo("Pessoa Fisica")
    ->setCpf("723.456.789-70")
    ->setEndereco("Rua H")
    ->setTelefone("(77)8782-5078")
    ->setEmail("lucaslsanted@hotmail.com")
    ->setGrauDeImportanciaInterface(3)
;
$fisico5->setId(5)
    ->setNome("Lucas")
    ->setTipo("Pessoa Fisica")
    ->setCpf("923.456.789-90")
    ->setEndereco("Rua J")
    ->setTelefone("(79)8782-5098")
    ->setEmail("testedeglogo@hotmail.com")
    ->setGrauDeImportanciaInterface(3)
;
$juridico1->setId(6)
    ->setRazaoSocial("Pao de acucar ")
    ->setTipo("Pessoa Juridica")
    ->setCnpj("05.362.256/0001-25")
    ->setEndereco("Rua C")
    ->setTelefone("(71)8782-5018")
    ->setEmail("liamodass@hotmail.com")
    ->setGrauDeImportanciaInterface(5)
    ->setEnderecoDeCobranca("Rua da Cobranca de cima")
;
$juridico2->setId(7)
    ->setRazaoSocial("Estacio de sa")
    ->setTipo("Pessoa Juridica")
    ->setCnpj("03.332.432/0001-23")
    ->setEndereco("Rua Anselmo costa")
    ->setTelefone("(74)8782-5048")
    ->setEmail("amostradelta@hotmail.com")
    ->setGrauDeImportanciaInterface(5)
    ->setEnderecoDeCobranca("Rua E")
;
$juridico3->setId(8)
    ->setRazaoSocial("Uniao")
    ->setTipo("Pessoa Juridica")
    ->setCnpj("07.367.453/0001-66")
    ->setEndereco("Rua G")
    ->setTelefone("(76)8782-5068")
    ->setEmail("lucasls@hotmail.com")
    ->setGrauDeImportanciaInterface(2)
    ->setEnderecoDeCobranca("Rua São marcos")
;
$juridico4->setId(9)
    ->setRazaoSocial("Lia Modas")
    ->setTipo("Pessoa Juridica")
    ->setCnpj("25.342.876/0001-43")
    ->setEndereco("Rua I")
    ->setTelefone("(78)8782-5088")
    ->setEmail("testede@hotmail.com")
    ->setGrauDeImportanciaInterface(1)
    ->setEnderecoDeCobranca("Rua das lucindas")
;
$juridico5->setId(10)
    ->setRazaoSocial("Quaterback")
    ->setTipo("Pessoa Juridica")
    ->setCnpj("09.975.735/0001-55")
    ->setEndereco("Rua L")
    ->setTelefone("(710)8782-50108")
    ->setEmail("amarok@hotmail.com")
    ->setGrauDeImportanciaInterface(5)
    ->setEnderecoDeCobranca("Rua das Quebranças")
;

$persistir->persist($fisico1);
$persistir->persist($fisico2);
$persistir->persist($fisico3);
$persistir->persist($fisico4);
$persistir->persist($fisico5);
$persistir->persist($juridico1);
$persistir->persist($juridico2);
$persistir->persist($juridico3);
$persistir->persist($juridico4);
$persistir->persist($juridico5);
$persistir->flush();

echo "Tabelas Criadas e preenchidas com sucesso!";