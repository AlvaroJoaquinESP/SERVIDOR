<hr>
<footer class="footer">
    @Created by Cipri and Company
    <br>
    <?php echo "Usuario: " . "<b>" . $_SESSION['name'] . "</b>"; ?>
    <br>
    <a href="<?= BASE_URL ?>/user/destroy">Cerrar Sesión</a>

</footer>
</div>
</body>

</html>