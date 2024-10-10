<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"> <!-- Link para seu CSS -->
</head>
<body class="bg-dark text-light">

    <?php include("header.php"); ?> <!-- Inclui a barra de navegação -->

    <div class="container mt-5">
        <h1 class="text-center">Meu Perfil</h1>
        <div class="card text-bg-secondary mb-3">
            <div class="card-header">Informações do Usuário</div>
            <div class="card-body">
                <h5 class="card-title">Nome: João da Silva</h5>
                <p class="card-text">Email: joao.silva@email.com</p>
                <p class="card-text">Telefone: (00) 00000-0000</p>
                <p class="card-text">Data de Nascimento: 01/01/1990</p>
            </div>
        </div>

        <div class="text-center">
            <a href="editarPerfil.php" class="btn btn-warning">Editar Perfil</a>
            <a href="index.php" class="btn btn-secondary">Voltar para a Página Inicial</a>
        </div>
    </div>

    <?php include("footer.php"); ?> <!-- Inclui o rodapé -->
</body>
</html>