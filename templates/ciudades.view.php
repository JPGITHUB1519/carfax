
<?php require('layouts/header.view.php') ?>
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center">Mantenimiento de Ciudades</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form method="POST" action="/Carfax/controllers/CiudadesController.php">
                <div class="form-group">
                    <label>Descripcion</label>
                    <input type="text" name="descripcion" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Salvar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descripcion</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($ciudades as $ciudad): ?>
                <tr>
                    <td><?php echo $ciudad[0] ; ?></td>
                    <td><?php echo $ciudad[1]; ?></td>
                    <td><a href="/Carfax/controllers/CiudadesController.php?action=delete&id=<?php echo $ciudad[0] ; ?>" id="<?php echo $ciudad[0] ; ?>">Eliminar</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col-md-12">
            <a href="/Carfax/controllers/LogoutController.php" style="font-size: 1.5em;" class="forced-center">Logout</a>
        </div>
    </div>
<?php require('layouts/footer.view.php') ?>
