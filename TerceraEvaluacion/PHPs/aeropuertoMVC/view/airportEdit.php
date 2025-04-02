    <main>
<!-- $valor es el aeropuerto que recojo en el controller -->
        <h3>Editor</h3>
        <form action="<?= BASE_URL ?>/airport/editAirport" method="post" class="form-control">
            <label for="id" class="form-label">Id</label>
            <input type="text" name="id" id="id" class="form-control" maxlength="11" value="<?= $valor->getId()?>" readonly>
            <br>
            <label for="location" class="form-label">Location</label>
            <input type="text" name="location" id="location" class="form-control" maxlength="255" value="<?=$valor->getLocation()?>" readonly>
            <br>
            <label for="numRoad" class="form-label">NumRoad</label>
            <input type="number" name="numRoad" id="numRoad" class="form-control" value="<?=$valor->getNumRoad()?>" required maxlength="11">
            <br>
            <label for="gateway" class="form-label">Gateway</label>
            <input type="number" name="gateway" id="gateway" class="form-control" value="<?= $valor->getGateway()?>" required maxlength="11">
            <br>
            <button class="btn btn-primary">Editar</button>
            <a href="<?= BASE_URL ?>/airport/list" class="btn btn-secondary">Cancelar</a>
        </form>
    </main>

