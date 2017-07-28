<?php require('layouts/header.view.php') ?>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Mantenimiento de Usuarios
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Admin</a>
            </li>
            <li>
                <i class="fa fa-edit"></i> Mantenimientos
            </li>
            <li class="active">Usuarios</li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-xs-12">
        <form method="POST" action="/Carfax/controllers/UsuariosController.php">
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
            <?php foreach($Usuarios as $ubicacion): ?>
            <tr>
                <td><?php echo $ubicacion[0] ; ?></td>
                <td><?php echo $ubicacion[1]; ?></td>
                <td><?php echo $ubicacion[2]; ?></td>
                <td><a href="/Carfax/controllers/UsuariosController.php?id=<?php echo $ubicacion[0] ; ?>" id="<?php echo $ubicacion[0] ; ?>">Actualizar</a></td>
                <td><a href="/Carfax/controllers/UsuariosController.php?action=delete&id=<?php echo $ubicacion[0] ; ?>" id="<?php echo $ubicacion[0] ; ?>">Eliminar</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php require('layouts/footer.view.php') ?>