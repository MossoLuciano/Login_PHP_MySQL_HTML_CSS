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
    <h2 class="tituloLogin">Login</h2><br>
    <form action="#" method="POST" id="formularioLogin">
        <input type="email" name="email" class="email" placeholder="Email"><br><br>
        <input type="password" name="clave" class="clave" placeholder="Password"><br><br>
        <input type="submit" value="Ingresar" name="ingresar" class="btn btn-sm  btn-primary" id="ingresar">
        <input type="submit" value="Cancelar" name="cancelar" class="btn btn-sm  btn-primary"><br>
        </div><br>
    </form>
</div>

<div class="vinculoRegistro">
    <a href="registro.php">Registrarme</a>
</div><br>

<?php
    require "footer.php";
?>