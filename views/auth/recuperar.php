<section class="bg-white-contenedor-md recuperar">
<h1 class="recuperar__heading">Recupera Tu Password</h1>
<p class="recuperar__texto">Coloca Tu Nuevo Password a contiunuación</p>

<?php
    @include_once __DIR__ . "/../templates/alertas.php";
?>

<?php
    if($error) return
?>
<form method="POST" class="formulario">
    <div class="formulario__campo">
        <label for="password" class="formulario__label">Password</label>
        <input
            type="password"
            id="password"
            placeholder="Tu Nuevo Password"
            name="password"
            class="formulario__input"
        />
    </div>
    
    <input type="submit" class="formulario__boton" value="Guardar Nuevo Password">

</form>
</section>