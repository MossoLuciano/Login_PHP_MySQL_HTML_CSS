<?php
    include_once "header.php";
    require "funciones.php";
    require "refBootstrap.php";
    
	if(isset($_POST['guardar'])){
		$email = $_POST['email'];
		$clave = $_POST['clave'];
		GuardarUsuario($email, $clave);
	}
?>

<div class="tituloRegistro">
    <h2 class="tituloRegistro">Registro de usuario:</h2><br>   
</div>

<div class="registro">
    <form action="#" method="POST" class="formularioRegistro">
        <input type="email" name="email" class="email" placeholder="Email"><br><br>
        <input type="password" name="clave" class="clave" placeholder="Password"><br><br>
        <input type="submit" value="Guardar" name="guardar" class="btn btn-xs btn-block btn-primary"><br><br>
    </form>
</div>
