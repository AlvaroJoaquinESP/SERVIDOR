
            <footer class="bg-light text-center text-lg-start mt-5 py-3">
                <div class="container">
                    <p class="mb-0">@Created by IES RIBERA / Usuario Conectado:
                    <?php echo $_SESSION["name"]."(". $_SESSION["rol"].")"?>
                    <a href="<?=BASE_URL?>user/logout" class="btn btn-sm btn-secondary ml-2">Cerrar Sesion</a>
                    </p>
                </div>
            </footer>
        </main>
    </body>
</html>
