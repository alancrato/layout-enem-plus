<!doctype html>
<html lang="en">
<head>
    <title>Criar Conta - Nosso enem é plus!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/open-iconic.css"/>
    <link rel="stylesheet" href="singin.css"/>
    <link rel="icon" href="assets/img/favicon.png"/>
</head>
<body>
<form class="form-signin">
    <div class="text-center mb-4">
        <img class="mb-4" src="assets/img/logo.png">
        <div class="title-login">Criar Conta!</div>
    </div>
    <div class="form-label-group">
        <input type="text" id="name" class="form-control" placeholder="Nome" required autofocus>
        <label for="name">Nome</label>
    </div>
    <div class="form-label-group">
        <input type="email" id="email" class="form-control" placeholder="E-mail" required autofocus>
        <label for="email">E-mail</label>
    </div>
    <div class="form-label-group">
        <input type="password" id="password" class="form-control" placeholder="Senha" required>
        <label for="password">Senha</label>
    </div>
    <div class="form-label-group">
        <input type="password" id="password_confirm" class="form-control" placeholder="Confirmar Senha" required>
        <label for="password_confirm">Confirmar Senha</label>
    </div>
    <button class="btn btn-lg btn-danger btn-block" type="submit">Criar Conta</button>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-<?= date('Y'); ?></p>
</form>
</body>
</body>
</html>