<aside class="dashboard__sidebar">
    <div class="dashboard__menu">
        <a href="/admin" class="dashboard__enlace <?php echo pagina_actual('/admin/inicio') ? ('dashboard__enlace--actual') : ''; ?>">
            <i class="fa-solid fa-house dashboard__icono"></i>
            <span class="dashboard__menu-texto">Inicio</span>
        </a>

        <a href="/admin/correos" class="dashboard__enlace <?php echo pagina_actual('/correos') ? ('dashboard__enlace--actual') : ''; ?> ">
        <i class="fa-solid fa-envelope dashboard__icono"></i>
            <span class="dashboard__menu-texto">Correos</span>
        </a>

        <a href="/admin/trabajo/crear" class="dashboard__enlace <?php echo pagina_actual('/trabajo/crear') ? ('dashboard__enlace--actual') : ''; ?> ">
            <i class="fa-solid fa-pen dashboard__icono"></i>
            <span class="dashboard__menu-texto">Nuevo Trabajo</span>
        </a>

        <a href="/admin/trabajos" class="dashboard__enlace <?php echo pagina_actual('/trabajos') ? ('dashboard__enlace--actual') : ''; ?>">
        <i class="fa-solid fa-briefcase dashboard__icono"></i>
            <span class="dashboard__menu-texto">Trabajos</span>
        </a>

        <!-- <a href="/olvide" class="dashboard__enlace <?php echo pagina_actual('/olvide') ? ('dashboard__enlace--actual') : ''; ?> ">
            <i class="fa-solid fa-key dashboard__icono"></i>
            <span class="dashboard__menu-texto">Password</span>
        </a>  -->
    </div>
</aside>