<hr>
<footer class="footer text-center">
    <p>@Created by Cipriano & AJ</p>
    <br>
    <?php echo "Usuario: <b>" . $_SESSION['name'] . "</b>"; ?>
    <br>
    <a href="<?= BASE_URL ?>/user/destroy">Cerrar Sesión</a>
</footer>
</div>
</body>

</html>