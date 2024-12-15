<section class="editar">
    <h1 class="editar__heading"><?php echo $titulo; ?></h1>
    <?php
        @include_once __DIR__ . "/../templates/alertas.php";
    ?>
        <form  method="POST" enctype="multipart/form-data">
            <div class="editar__grid">
                <div class="editar__campo">
                    <label class="editar__label" for="nombre" class="editar__label">Nombre del proyecto:</label>
                    <input 
                        type="text" 
                        id="nombre"
                        name="nombre"
                        placeholder="Nombre del proyecto"
                        class="editar__input"
                        value="<?php echo $trabajo->nombre ?? '';?>"
                        />
                </div><!-- editar__campo -->
                <div class="editar__campo">
                    <label class="editar__label" for="descripcion" class="editar__label">Descripción del proyecto:</label>
                    <input 
                        type="text" 
                        id="descripcion"
                        name="descripcion"
                        placeholder="Añade una breve descripción del proyecto"
                        value="<?php echo $trabajo->descripcion ?? '';?>"
                        class="editar__input"
                        />

                </div><!-- editar__campo -->
            </div><!-- editar__grid -->

            <div class="editar__grid">
            <div class="editar__campo">
                <label for="url_github" class="editar__label">Url de GitHub:</label>
                <input 
                    type="text" 
                    id="url_github"
                    name="url_github"
                    value="<?php echo $trabajo->url_github ?? '';?>"
                    placeholder="Url del repositorio del proyecto"
                    class="editar__input"
                    />

            </div><!-- .editar__campo-->
            <div class="editar__campo">
                <label for="url_web" class="editar__label">Url de la web del proyecto</label>
                <input 
                    type="text" 
                    id="url_web"
                    name="url_web"
                    value="<?php echo $trabajo->url_web ?? ''; ?>"
                    placeholder="Url de la web del proyecto"
                    class="editar__input">

            </div><!-- .editar__campo-->
        </div><!-- .editar__grid-->

        <div class="editar__grid-imagen">
        <div class="editar__campo">
               <label for="/imagenes" class="editar__label">Imagen del proyecto</label>

               <input 
                type="file" 
                id="imagen" 
                accept="image/jpeg, image/jpg, image/webp, image/png"
                name="imagen"
                >
            </div><!-- .editar__campo-->
            <div class="editar__campo">
                <?php if($trabajo->imagen) { ?>
                    <p class="editar__label">Imagen Actual:</p>
                    <div class="editar__imagen-div">
                        <picture>
                            <source srcset="<?php echo $_ENV['HOST'] . '/img/trabajos/' . $trabajo->imagen; ?>.webp" type="image/webp"
                            class="editar__imagen">
                            <source srcset="<?php echo $_ENV['HOST'] . '/img/trabajos/' . $trabajo->imagen; ?>.png" type="image/png">
                            <img src="<?php echo $_ENV['HOST'] . '/img/trabajos/' . $trabajo->imagen; ?>.png" alt="Imagen Ponente">
                        </picture>
                    </div>
                    

                <?php } ?>
            </div>
        </div>
            <input type="submit" value="Actualizar" class="editar__boton" />
        </form>
</section>