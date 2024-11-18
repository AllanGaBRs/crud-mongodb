<?php
require 'Connection.php';

$connection = new Connection();
$manager = $connection->getConnection();

$alunosQuery = new MongoDB\Driver\Query([]);
$alunosCursor = $manager->executeQuery("carlos.students", $alunosQuery);
$alunos = iterator_to_array($alunosCursor);

$cursosQuery = new MongoDB\Driver\Query([]);
$cursosCursor = $manager->executeQuery("carlos.courses", $cursosQuery);
$cursos = iterator_to_array($cursosCursor);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Matrícula</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Matricular Aluno em Curso</h2>
        
        <form action="matricular.php" method="POST" class="border p-4 shadow-sm rounded">
            <div class="form-group">
                <label for="aluno_id">Selecione o Aluno:</label>
                <select name="aluno_id" id="aluno_id" class="form-control" required>
                    <?php foreach ($alunos as $aluno): ?>
                        <option value="<?php echo $aluno->_id; ?>"><?php echo $aluno->nome; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="curso_id">Selecione o Curso:</label>
                <select name="curso_id" id="curso_id" class="form-control" required>
                    <?php foreach ($cursos as $curso): ?>
                        <option value="<?php echo $curso->_id; ?>"><?php echo $curso->nome_curso; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Matricular</button>
        </form>
    </div>
</body>
</html>