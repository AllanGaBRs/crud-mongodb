<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Estudante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Cadastro de Estudante</h2>
    <form action="cadastrar_estudante.php" method="POST">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="rg" class="form-label">RG</label>
            <input type="text" class="form-control" id="rg" name="rg" required>
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required>
        </div>
        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
        </div>
        <div class="mb-3">
            <label for="telefone1" class="form-label">Telefone 1</label>
            <input type="tel" class="form-control" id="telefone1" name="telefone1" required>
        </div>
        <div class="mb-3">
            <label for="telefone2" class="form-label">Telefone 2</label>
            <input type="tel" class="form-control" id="telefone2" name="telefone2">
        </div>
        <div class="mb-3">
            <label for="nome_mae" class="form-label">Nome da Mãe</label>
            <input type="text" class="form-control" id="nome_mae" name="nome_mae" required>
        </div>
        <div class="mb-3">
            <label for="nome_pai" class="form-label">Nome do Pai</label>
            <input type="text" class="form-control" id="nome_pai" name="nome_pai" required>
        </div>
        <h4>Endereço</h4>
        <div class="mb-3">
            <label for="rua" class="form-label">Rua</label>
            <input type="text" class="form-control" id="rua" name="rua" required>
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Número</label>
            <input type="text" class="form-control" id="numero" name="numero" required>
        </div>
        <div class="mb-3">
            <label for="complemento" class="form-label">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento">
        </div>
        <div class="mb-3">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" required>
        </div>
        <div class="mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Estudante</button>
    </form>
</div>
</body>
</html>
