<?php
    include "./conectabd.php";
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>SysBoleto TPV</title>

    <link rel="stylesheet" type="text/css" href="assets/stylesheets/estilos.css" media="all"/>
</head>

<body>

    <form method="POST" action="autenticacao.php" id="formlogin" name="formlogin">
        <fieldset id="fie">

            <div class="tela-login">
                <h1>SYSBOLETO TPV</h1>
            </div>
            <br>
            <br>

            <div class="text-login">
                <p>Login</p>
                <input name="sysbol-login" id="sysbol-login" type="text" value="" class="form-control">
            </div>

            <div class="text-login">
                <p>Senha</p>
                <input name="sysbol-psw" id="sysbol-psw" type="password" value="" class="form-control">
            </div>
            <br>
            <br>

            <div class="text-login">
                <button name="entrar" class="btn-default" type="submit">Entrar</button>
            </div>

        </fieldset>
    </form>

</body>

</html>