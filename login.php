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

<div class="tituloLogin">
    <h2 class="tituloLogin">Login</h2><br>
</div>

<div class="login">
    <form action="operaciones.php" method="POST" class="formularioLogin">
        <input type="email" name="email" class="email" placeholder="Email"><br><br>
        <input type="password" name="clave" class="clave" placeholder="Password"><br><br>
        <div class="botones">
            <input type="submit" value="Ingresar" name="ingresar" class="btn btn-xs btn-block btn-primary">
            <input type="submit" value="Cancelar" name="cancelar" class="btn btn-xs btn-block btn-primary"><br><br>
        </div><br>
    </form>
</div>

<div class="vinculoRegistro">
    <a href="registro.php">Registrarme</a>
</div><br><br><br><br>

<?php
   require "footer.php";
?>