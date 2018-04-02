<!doctype html>
<html lang="en">
<head>
    <title>Login - Nosso enem é plus!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/open-iconic.css"/>
    <link rel="stylesheet" href="singin.css"/>
    <link rel="icon" href="assets/img/favicon.png"/>
</head>
<body>
<form class="form-signin">
    <div class="text-center mb-4">
        <img class="mb-4" src="assets/img/logo.png">
        <div class="title-login">Conteúdo educativo e interativo!</div>
    </div>

    <div class="form-label-group">
        <input type="email" id="email" class="form-control" placeholder="E-mail" required autofocus>
        <label for="email">E-mail</label>
    </div>

    <div class="form-label-group">
        <input type="password" id="password" class="form-control" placeholder="Senha" required>
        <label for="password">Senha</label>
    </div>

    <div class="checkbox mb-3">
        <label class="remember">
            <input type="checkbox" value="remember-me"> Lembrar me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    <div class="account-title">Não tem conta?</div>
    <button class="btn btn-lg btn-danger btn-block" type="submit">Criar Conta</button>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-<?= date('Y'); ?></p>
</form>
</body>
</body>
</html>