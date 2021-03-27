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

<div class="registro">
    <div id="tituloRegistro">
        <h2>Registro de usuario:</h2>  
    </div>
    
    <form action="#" method="POST" class="formularioRegistro">
        <input type="email" name="email" class="email" placeholder="Email">
        <input type="password" name="clave" class="clave" placeholder="Password">
        <input type="submit" value="Guardar" name="guardar" class="btn btn-xs btn-block btn-primary" id="guardar">
    </form>
</div>

<?php
    require "footer.php";
?>