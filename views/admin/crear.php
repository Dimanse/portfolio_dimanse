<section class="crear">
    <h1 class="crear__heading"><?php echo $titulo; ?></h1>

    <?php
        @include_once __DIR__ . "/../templates/alertas.php";
    ?>
    
    <form action="/admin/trabajo/crear" method="POST" class="crear__formulario" enctype="multipart/form-data">
        <div class="crear__grid">
            <div class="crear__campo">
                <label for="nombre" class="crear__label">Nombre del proyecto:</label>
                <input 
                    type="text" 
                    id="nombre"
                    name="nombre"
                    placeholder="Nombre del proyecto"
                    class="crear__input"
                    value="<?php echo $trabajo->nombre ?? '';?>"
                    >
            </div>
            <div class="crear__campo">
                <label for="descripcion" class="crear__label">Descripción del proyecto:</label>
                <input 
                    type="text" 
                    id="descripcion"
                    name="descripcion"
                    placeholder="Añade una breve descripción del proyecto"
                    value="<?php echo $trabajo->descripcion ?? '';?>"
                    class="crear__input">

            </div>
        </div>
        <div class="crear__grid">
            <div class="crear__campo">
                <label for="url_github" class="crear__label">Url de GitHub:</label>
                <input 
                    type="text" 
                    id="url_github"
                    name="url_github"
                    value="<?php echo $trabajo->url_github ?? '';?>"
                    placeholder="Url del repositorio del proyecto"
                    class="crear__input">

            </div>
            <div class="crear__campo">
                <label for="url_web" class="crear__label">Url de la web del proyecto</label>
                <input 
                    type="text" 
                    id="url_web"
                    name="url_web"
                    value="<?php echo $trabajo->url_web ?? ''; ?>"
                    placeholder="Url de la web del proyecto"
                    class="crear__input">

            </div>
        </div>
        <div class="crear__grid">
            <div class="crear__campo">
               <label for="/imagenes" class="crear__label">Imagen del proyecto</label>

               <input 
                type="file" 
                id="imagen" 
                accept="image/jpeg, image/jpg, image/webp, image/png"
                name="imagen"
                >
            </div>


            <?php if(isset($trabajo->imagen_actual)) { ?>
                <p class="crear__texto">Imagen Actual:</p>
                <div class="formulario__imagen"></div>
                    <picture>
                        <source srcset="<?php echo $_ENV['HOST'] . '/build/img/' . $trabajo->imagen; ?>.webp" type="image/webp">
                        <source srcset="<?php echo $_ENV['HOST'] . '/build/img/speakers/' . $trabajo->imagen; ?>.png" type="image/png">
                        <img src="<?php echo $_ENV['HOST'] . '/public/build/img/' . $trabajo->imagen; ?>.png" alt="Imagen Ponente">
                    </picture>
                </div>

            <?php } ?>


            
        </div>
        <input type="submit" value="Registrar" class="crear__boton">
    </form>
</section>

<?php 
    $script = "
           <script src='/build/js/app_02.js'></script>
           <script src='https://unpkg.com/dropzone@5/dist/min/dropzone.min.js'></script>
    "
?>