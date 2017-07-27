
<?php require('../templates/layouts/header.view.php') ?>
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center">Mantenimiento de Ubicaciones</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form method="POST" action="/Carfax/controllers/UbicacionesController.php">
                <div class="form-group">
                    <input type="hidden" name="codigo_ubicacion" value="<?php echo $ubicacion[0]?>">
                    <label>Descripcion</label>
                    <input type="text" name="descripcion" class="form-control" value="<?php echo $ubicacion[1] ?>">
                </div>
                <div class="form-group">
                    <label>Codigo de Ciudad</label>
                    <input type="text" name="codigo_ciudad" class="form-control" value="<?php echo $ubicacion[2] ?>">
                </div>  
                <h3><?php echo $msg_status ?></h3>
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
                    <th>Codigo_Ciudad</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($ubicaciones as $ubicacion): ?>
                <tr>
                    <td><?php echo $ubicacion[0] ; ?></td>
                    <td><?php echo $ubicacion[1]; ?></td>
                    <td><?php echo $ubicacion[2]; ?></td>
                    <td><a href="/Carfax/controllers/UbicacionesController.php?id=<?php echo $ubicacion[0] ; ?>" id="<?php echo $ubicacion[0] ; ?>">Actualizar</a></td>
                    <td><a href="/Carfax/controllers/UbicacionesController.php?action=delete&id=<?php echo $ubicacion[0] ; ?>" id="<?php echo $ubicacion[0] ; ?>">Eliminar</a></td>
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
<?php require('../templates/layouts/header.view.php') ?>
