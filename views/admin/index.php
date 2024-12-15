<section class="inicio">
    <h1 class="inicio__heading"><?php echo $titulo; ?></h1>
    <div class="inicio__grid">
        <div class="inicio__contenedor">
            <h3 class="inicio__nombre">Correos</h3>

            <img src="/build/img/correos.webp" alt="imagen correos" class="inicio__imagen" />

            <p class="inicio__correo">Correos Recibidos: <span class="inicio__span"><?php echo count($mensajes); ?></span> </p>
            <a href="/admin/correos" class="inicio__enlace">Ver Correos</a>
        </div><!-- .contenedor -->

        <div class="inicio__contenedor">
            <h3 class="inicio__nombre">Proyectos</h3>

            <img src="/build/img/apps.webp" alt="imagen correos" class="inicio__imagen" />

            <p class="inicio__correo">Proyectos Agregados: <span class="inicio__span"><?php echo count($trabajos); ?></span> </p>
            <a href="/admin/trabajos" class="inicio__enlace">Ver Proyectos</a>
        </div><!-- .contenedor -->
    </div>
</section>