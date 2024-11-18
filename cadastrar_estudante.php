<?php
require 'Connection.php';

$connection = new Connection();
$manager = $connection->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];
    $telefone1 = $_POST['telefone1'];
    $telefone2 = $_POST['telefone2'];
    $nome_mae = $_POST['nome_mae'];
    $nome_pai = $_POST['nome_pai'];

    $endereco = [
        'rua' => $_POST['rua'],
        'numero' => $_POST['numero'],
        'bairro' => $_POST['bairro'],
        'cep' => $_POST['cep']
    ];

    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->insert([
        'nome' => $nome,
        'rg' => $rg,
        'cpf' => $cpf,
        'data_nascimento' => $data_nascimento,
        'telefone1' => $telefone1,
        'telefone2' => $telefone2,
        'nome_mae' => $nome_mae,
        'nome_pai' => $nome_pai,
        'endereco' => $endereco
    ]);
    $manager->executeBulkWrite('carlos.students', $bulk);?>
    <div class="container text-center mt-5"><?php
    echo "Estudante cadastrado com sucesso!";
}
?>
</div>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    
    <div class="container text-center mt-5">
        <p class="lead">Selecione uma opção</p>
        <div class="">
            <a href="tela_cadastro_curso.php" class="btn btn-primary">Cadastrar Cursos</a>
        </div>
        <div class="">
            <a href="tela_cadastro_estudante.php" class="btn btn-success">Cadastrar Alunos</a>
        </div>
        <div class="">
            <a href="tela_matricula.php" class="btn btn-primary">Matricular Alunos</a>
        </div>
    </div>
</body>