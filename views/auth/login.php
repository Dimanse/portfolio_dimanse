
<section class="login bg-white-contenedor-md">
    <h1 class="login__heading"><?php echo $titulo; ?></h1>
    <?php
        @include_once __DIR__ . "/../templates/alertas.php";
    ?>
    <form action="/login" method="POST" class="formulario">
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
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Tu Password:</label>
            <input 
                id="password"
                type="password"
                name="password"
                placeholder="Tu password"
                class="formulario__input"
                >
        </div>
        <input type="submit" class="formulario__boton" value="Iniciar Sesión">
    </form>

    <div class="formulario__acciones">
        <a href="/olvide" class="formulario__enlace">¿Olvidaste tu password?</a>
    </div>
    
</section>
