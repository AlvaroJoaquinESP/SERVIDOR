<main>
        <?php if (isset($message)){ ?>
            <div class="alert alert-<?=$styleMessage?>" role="alert">
                <?php echo $message ?>
            </div>
        <?php } ?>
        
        <form action="<?= BASE_URL ?>/producto/insertar" method="post">
            <div class="mb-3">
                <label for="name"> Nombre:</label>
                <input id="name" name="name" type="text" class="form-control">  
            </div>
            
            <div class="mb-3">
                <label for="shortName">Nombre Corto:</label>
                <input id="shortName" name="shortName" type="text" class="form-control">
            </div>  
            
            <div class="mb-3">
                <label for="pvp">PVP</label>
                <input id="pvp" name="pvp" type="number" class="form-control">  
            </div>  
            <button class="btn btn-primary">Guardar</button>
        </form>
</main>