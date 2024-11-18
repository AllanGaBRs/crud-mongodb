<?php
require 'Connection.php';

$connection = new Connection();
$manager = $connection->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $area_conhecimento = $_POST['area'];
    $nome_curso = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $carga_horaria = $_POST['carga_horaria'];
    $preco = $_POST['preco'];

    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->insert([
        'area_conhecimento' => $area_conhecimento,
        'nome_curso' => $nome_curso,
        'descricao' => $descricao,
        'carga_horaria' => $carga_horaria,
        'preco' => $preco
    ]);

    $manager->executeBulkWrite('carlos.courses', $bulk);?>
    <div class="container text-center mt-5">
        <?php
    echo "Curso cadastrado com sucesso!";
}
?>
    </div>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Sistema de Gestão</title>
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

