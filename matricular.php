<?php
require 'Connection.php';

$connection = new Connection();
$manager = $connection->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $alunoId = new MongoDB\BSON\ObjectId($_POST['aluno_id']);
    $cursoId = new MongoDB\BSON\ObjectId($_POST['curso_id']);

    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->update(
        ['_id' => $cursoId],
        ['$addToSet' => ['estudantes' => $alunoId]]
    );

    try {
        $result = $manager->executeBulkWrite("carlos.courses", $bulk);
        ?><div class="container text-center mt-5"><?php
        if ($result->getModifiedCount() > 0) {
            echo "<p>Matrícula realizada com sucesso!</p>";
        } else {
            echo "<p>Erro ao realizar matrícula.</p>";
        }
        ?></div><?php
    } catch (MongoDB\Driver\Exception\Exception $e) {
        echo "<p>Erro: " . $e->getMessage() . "</p>";
    }
} else {
    echo "<p>Requisição inválida.</p>";
}
?>
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
