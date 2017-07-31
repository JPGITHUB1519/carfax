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
                <input type="hidden" name="codigo_usuario" value="<?php echo $usuario[0]?>">
                <label>Tipo Usuario</label>
                <select class="form-control" name="tipo_usuario">
                    <option value="0">Administrador</option>
                    <option value="1">B&aacute;sico</option>
                    <option value="2">Visitante</option>
                </select>
                <!-- <input type="text" name="tipo_usuario" class="form-control" value="<?php echo $usuario[1] ?>"> -->
            </div>
            <div class="form-group">
                <label>Fecha Registro</label>
                <input type="text" name="fecha_registro" class="form-control" value="<?php echo $usuario[2] ?>">
            </div>
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" value="<?php echo $usuario[3] ?>">
            </div>
            <div class="form-group">
                <label>Fecha Nacimiento</label>
                <input type="text" name="fecha_nacimiento" class="form-control" value="<?php echo $usuario[4] ?>">
            </div>
            <div class="form-group">
                <label>Clave</label>
                <input type="text" name="clave" class="form-control" value="<?php echo $usuario[5] ?>">
            </div> 
            <div class="form-group">
                <label>Correo</label>
                <input type="text" name="correo" class="form-control" value="<?php echo $usuario[6] ?>">
            </div>
            <div class="form-group">
                <label>Estado</label>
                <input type="text" name="estado" class="form-control" value="<?php echo $usuario[7] ?>">
            </div>
            <div class="form-group">
                <label>Direcci&oacute;n</label>
                <input type="text" name="direccion" class="form-control" value="<?php echo $usuario[8] ?>">
            </div>
            <div class="form-group">
                <label>Codigo Ubicaci&oacute;n</label>
                <select class="form-control" name="codigo_ubicacion">
                <?php foreach($ubicaciones as $ubicacion): ?>
                    <!-- seleccionar codigo de usuario por default -->
                    <?php if ($ubicacion[0] == $usuario[9]) :?>
                        <option value="<?php echo $ubicacion[0] ?>" selected><?php echo $ubicacion[0] ?></option>
                    <?php else : ?>
                        <option value="<?php echo $ubicacion[0] ?>"><?php echo $ubicacion[0] ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Sexo</label>
                <select name="sexo" class="form-control">
                    <?php if ($usuario[10] == "f") :?>
                        <option value="f" selected>F</option>
                        <option value="m">M</option>
                    <?php else : ?>
                        <option value="m" selected>M</option>
                        <option value="f">F</option>
                    <?php endif; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Login</label>
                <input type="text" name="login" class="form-control" value="<?php echo $usuario[11] ?>">
            </div>
            <div class="form-group">
                <label>Identidad</label>
                <input type="text" name="identidad" class="form-control" value="<?php echo $usuario[12] ?>">
            </div>
            <div class="form-group">
                <label>Tel&eacute;fono</label>
                <input type="text" name="telefono" class="form-control" value="<?php echo $usuario[13] ?>">
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="text" name="foto" class="form-control" value="<?php echo $usuario[14] ?>">
            </div>
            <div class="form-group">
                <label>Contacto</label>
                <input type="text" name="contacto" class="form-control" value="<?php echo $usuario[15] ?>">
            </div>
            <div class="form-group">
                <label>Facebook</label>
                <input type="text" name="facebook" class="form-control" value="<?php echo $usuario[16] ?>">
            </div>
            <div class="form-group">
                <label>Twitter</label>
                <input type="text" name="twitter" class="form-control" value="<?php echo $usuario[17] ?>">
            </div>
            <div class="form-group">
                <label>Instagram</label>
                <input type="text" name="instagram" class="form-control" value="<?php echo $usuario[18] ?>">
            </div>
            <div class="form-group">
                <label>Whatsapp</label>
                <input type="text" name="whatsapp" class="form-control" value="<?php echo $usuario[19] ?>">
            </div>
            <div class="form-group">
                <label>Youtube</label>
                <input type="text" name="youtube" class="form-control" value="<?php echo $usuario[20] ?>">
            </div>
            <div class="form-group">
                <label>Google +</label>
                <input type="text" name="google_plus" class="form-control" value="<?php echo $usuario[21] ?>">
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
                <th>codigo_usuario</th>
                <th>tipo_usuario</th>
                <th>fecha_registro</th>
                <th>nombre</th>
                <th>fecha_nacimiento</th>
                <th>clave</th>
                <th>correo</th>
                <th>estado</th>
                <th>direccion</th>
                <th>codigo_ubicacion</th>
                <th>sexo</th>
                <th>login</th>
                <th>identidad</th>
                <th>telefono</th>
                <th>foto</th>
                <th>contacto</th>
                <th>facebook</th>
                <th>twitter</th>
                <th>instagram</th>
                <th>whatsapp</th>
                <th>youtube</th>
                <th>[google+]</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($usuarios as $usuario): ?>
            <tr>
                <th><?php echo $usuario[0]; ?></th>
                <th><?php echo $usuario[1]; ?></th>
                <th><?php echo $usuario[2]; ?></th>
                <th><?php echo $usuario[3]; ?></th>
                <th><?php echo $usuario[4]; ?></th>
                <th><?php echo $usuario[5]; ?></th>
                <th><?php echo $usuario[6]; ?></th>
                <th><?php echo $usuario[7]; ?></th>
                <th><?php echo $usuario[8]; ?></th>
                <th><?php echo $usuario[9]; ?></th>
                <th><?php echo $usuario[10]; ?></th>
                <th><?php echo $usuario[11]; ?></th>
                <th><?php echo $usuario[12]; ?></th>
                <th><?php echo $usuario[13]; ?></th>
                <th><?php echo $usuario[14]; ?></th>
                <th><?php echo $usuario[15]; ?></th>
                <th><?php echo $usuario[16]; ?></th>
                <th><?php echo $usuario[17]; ?></th>
                <th><?php echo $usuario[18]; ?></th>
                <th><?php echo $usuario[19]; ?></th>
                <th><?php echo $usuario[20]; ?></th>
                <th><?php echo $usuario[21]; ?></th>
                <td><a href="/Carfax/controllers/UsuariosController.php?id=<?php echo $usuario[0] ; ?>" id="<?php echo $usuario[0] ; ?>">Actualizar</a></td>
                <td><a href="/Carfax/controllers/UsuariosController.php?action=delete&id=<?php echo $usuario[0] ; ?>" id="<?php echo $usuario[0] ; ?>">Eliminar</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php require('layouts/footer.view.php') ?>