<?php
    include_once "header.php";
    require "funciones.php";
    require "refBootstrap.php";
    
    if(isset($_POST['ingresar'])){
        $email = $_POST['email'];
        $clave = $_POST['clave'];
        
        VerificarUsuario($email, $clave);
    }
?>

<div class="login">
    <div id="tituloLogin">
        <h2>Login</h2>
    </div>
    <form action="#" method="POST" id="formularioLogin">
        <input type="email" name="email" class="email" placeholder="Email">
        <input type="password" name="clave" class="clave" placeholder="Password">
        <input type="submit" value="Ingresar" name="ingresar" class="btn btn-sm  btn-primary" id="ingresar">
    </form>
    <a href="registro.php">Registrarme</a>
</div>
   


