<footer class="footer">
    <div class="footer__grid">
        <img src="/build/img/logo.webp" alt="imagen logo" class="footer__imagen">
        <p class="footer__texto">Vivir, aprender y subir de nivel un día a la vez.</p>
        <?php @include_once __DIR__ . "/redes.php"; ?>
    </div>

    <p class="footer__copyright">
        <a href="/login" class="footer__nombre">

            Domingo Curbeira "Dimanse"
        </a>
        <span class="footer__copyright--regular"> - Todos los derechos reservados &copy; <?php echo date('Y')?></span>
    </p>
</footer>