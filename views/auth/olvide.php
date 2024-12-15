<section class="login bg-white-contenedor-md">
    <h1 class="login__heading"><?php echo $titulo; ?></h1>
    <?php
        @include_once __DIR__ . "/../templates/alertas.php";
    ?>
    <form action="/olvide" method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Tu Email:</label>
            <input 
                id="email"
                type="email"
                name="email"
                placeholder="Tu email"
                class="formulario__input"
                >
        </div>
        
        <input type="submit" class="formulario__boton" value="Reestablecer Password">
    </form>

    <div class="formulario__acciones">
        <a href="/login" class="formulario__enlace">Inicia Sesión</a>
    </div>

</section>