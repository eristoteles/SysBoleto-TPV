<?php

    session_start();

    $login = $_POST['sysbol-login'];
    $password = $_POST['sysbol-psw'];

    $loginSeguro = addslashes($login);
    $pswSeguro = addslashes($password);

    if (empty($login) or empty($password)):
        echo "<script>alert('É necessário preencher Login e Password.'); history.go(-1);</script>";
        exit;
    endif;

    include "./conectabd.php";

    $validaLogin = mysqli_query($mysqli, "SELECT login FROM usuario WHERE login='$loginSeguro'");
    $validaPsw = mysqli_query($mysqli, "SELECT senha FROM usuario WHERE senha='$pswSeguro'");

    $numLogin = mysqli_num_rows($validaLogin);
    $numPsw = mysqli_num_rows($validaPsw);

    if ($numLogin == true and $numPsw == true){
        $_SESSION["logged-in"] = $login;
        header("Location: ./inicial.php");
    } elseif ($numLogin == false) {
        echo "<script>alert('$login não encontrado! INFORME O LOGIN NOVAMENTE.')</script><script>location.href=('./index.php')</script>";
    } elseif ($numPsw == false) {
        echo "<script>alert('PASSWORD INCORRETO! INFORME O PASSWORD NOVAMENTE.')</script><script>location.href=('./index.php')</script>";
    }

?>