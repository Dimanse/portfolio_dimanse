<div class="icono">
    <a href="/">
        <i class="fa-solid fa-rotate-left"></i>
    </a>
</div>
<div class="contenedor">
    
    <img src="/build/img/2.webp" alt="imagen caricatura" class="contenedor__imagen" />
</div>
<section class="bg-white-contenedor contacto">

    <h3 class="contacto__heading"><?php echo $titulo; ?></h3>
    <p class="contacto__texto">Vivo en Patarrá (Desamparados, San José, Costa Rica), pero tengo total disponibilidad para desplazarme allí donde se me necesite, si fuera necesario. ¿Hablamos?</p>

    <?php @include_once __DIR__ . '/../templates/alertas.php'; ?>

    <form action="/contacto" method="POST" class="contacto__formulario">
    <div class="contacto__grid">
        <div class="contacto__campo">
            <label for="nombre">Tu nombre:</label>
            <input
                class="contacto__input"
                id="nombre"
                type="text"
                name="nombre"
                placeholder="Tu nombre"

            />
        </div>
        

            <div class="contacto__campo">
                <label for="apellidos">Tus apellidos:</label>
                <input
                    class="contacto__input"
                    id="apellidos"
                    type="text"
                    name="apellidos"
                    placeholder="Tus apellidos"
    
                />
            </div>
            
        </div>
    </div>
    <div class="contacto__grid">

        <div class="contacto__campo">
            <label for="email">Tu email</label>
            <input
                class="contacto__input"
                id="email"
                type="email"
                name="email"
                placeholder="Tu email"
    
            />
        </div>
        <div class="contacto__campo">
            <label for="email">Tu teléfono</label>
            <input
                class="contacto__input"
                id="telefono"
                type="tel"
                name="telefono"
    
            />
        </div>
        
    </div>
    <div class="contacto__grid">
    <div class="contacto__campo">
                <label for="fecha">Fecha:</label>
                <input
                    class="contacto__input"
                    id="fecha"
                    type="text"
                    name="fecha"
                    value="<?php echo date("d-m-Y"); ?>"
                    readonly 
                    onmousedown="return false;" 
    
                />
            </div>

            <div class="contacto__campo">
                <label for="fecha">Hora:</label>
                <input
                    class="contacto__input"
                    id="fecha"
                    type="text"
                    name="fecha"
                    value="<?php echo $fechaActual; ?>"
                    readonly 
                    onmousedown="return false;" 
    
                />
            </div>
    </div>
    <div class="contacto__campo">
        <label for="mensaje">Describe brevemente tu proyecto</label>
        <textarea name="mensaje" id="mensaje" cols="37" rows="10"></textarea>
    </div>
    <input type="submit" value="Enviar" class="contacto__boton">
    </form>
</section>

<section class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28784.248670909165!2d-84.01946655!3d9.87482925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses!2scr!4v1733533895766!5m2!1ses!2scr" class="mapa__iframe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="location bg-white-contenedor">
    <div class="location__grid">
        <div class="location__contenedor">
            <i class="fa-solid fa-location-dot"></i>
            <p class="location__texto">San José, Costa Rica</p>
        </div>
        <div class="location__contenedor">
            <i class="fa-solid fa-envelope"></i>
            <p class="location__texto">domingocurbeira@gmail.com</p>
        </div>
    </div>
</section>