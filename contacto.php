<?php
    require "header.php";
    require "refBootstrap.php";
?>

<div class="tituloContacto">
    <h2>Contacto</h2>
</div>
<div id="contacto">
    <form action="#" method="POST" id="formularioContacto">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <input type="email" name="email" id="email" placeholder="Email"><br>
        <textarea name="comentario" id="" cols="30" rows="10" placeholder="Comentarios"></textarea>
        <input type="submit" name="enviar" id="enviar" class="btn btn-sm  btn-primary">
    </form>
</div>

<?php
    require "footer.php";
?>