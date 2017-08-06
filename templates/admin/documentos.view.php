<?php require('layouts/header.view.php') ?>



<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Mantenimiento de Documentos
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Admin</a>
            </li>
            <li>
                <i class="fa fa-edit"></i> Mantenimientos
            </li>
            <li class="active">Documentos</li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-xs-12">
        <form method="POST" action="/Carfax/controllers/DocumentosController.php">
            <input type="hidden" name="documento" value="<?php echo $documento[0]?>">
            <input type="hidden" name="codigo_usuario" value="<?php echo $_SESSION['id'] ?>">
            <div class="form-group">
                <label>Detalle</label>
                <input type="text" name="detalle" class="form-control" value="<?php echo $documento[1] ?>">
            </div>
            <div class="form-group">
                <label>Tipo de Documento</label>
                <select class="form-control" name="tipo_documento">
                <?php foreach($tipos_documentos as $tipo_documento): ?>
                    <!-- seleccionar codigo de usuario por default -->
                    <?php if ($tipo_documento[0] == $documento[2]) :?>
                        <option value="<?php echo $tipo_documento[0] ?>" selected><?php echo $tipo_documento[1] ?></option>
                    <?php else : ?>
                        <option value="<?php echo $tipo_documento[0] ?>"><?php echo $tipo_documento[1] ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Fecha</label>
                <input type="text" name="fecha" class="form-control" value="<?php echo $documento[3] ?>">
            </div>
            <div class="form-group">
                <label>Fecha Registro</label>
                <input type="text" name="fecha_registro" class="form-control" value="<?php echo $documento[5] ?>">
            </div>
            <div class="form-group">
                <label>Documento Afectado</label>
                <select class="form-control" name="documento_afectado">
                <?php foreach($vehiculos as $vehiculo_o): ?>
                    <!-- seleccionar codigo de vehiculo por default -->
                    <?php if ($vehiculo_o[0] == $documento[6]): ?>
                        <option value="<?php echo $vehiculo_o[0] ?>" selected><?php echo $vehiculo_o[0] . " - " . $vehiculo_o[1] ?></option>

                    <?php else: ?>
                        <!-- <?php echo "<h1>Hey</h1>"; die(); ?> -->
                        <option value="<?php echo $vehiculo_o[0] ?>"><?php echo $vehiculo_o[0] . " - " . $vehiculo_o[1] ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
                <option value="">Ninguno</option>
                </select>
            </div>
            <div class="form-group">
                <label>Valor</label>
                <input type="text" name="valor" class="form-control" value="<?php echo $documento[7] ?>">
            </div>
            <div class="form-group">
                <label>Monto</label>
                <input type="text" name="monto" class="form-control" value="<?php echo $documento[8] ?>">
            </div>
            <div class="form-group">
                <label>Hora</label>
                <input type="text" name="hora" class="form-control" value="<?php echo $documento[9] ?>">
            </div>

            <div class="form-group">
                <label>Usuario Secundario</label>
                <select class="form-control" name="codigo_usuario_secundario">
                <?php foreach($usuarios as $usuario): ?>
                    <!-- seleccionar codigo de usuario por default -->
                    <?php if ($usuario[0] == $documento[10]) :?>
                        <option value="<?php echo $usuario[0] ?>" selected><?php echo $usuario[3] ?></option>
                    <?php else : ?>
                        <option value="<?php echo $usuario[0] ?>"><?php echo $usuario[3] ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
                <option value="">Ninguno</option>
                </select>
            </div>
            <div class="form-group">
                <label>Estado</label>
                <select name="estado" class="form-control">
                    <?php if ($documento[11] == '0') :?>
                         <option value="0" selected>0</option>
                         <option value="1">1</option>
                    <?php else : ?>
                        <option value="0">0</option>
                        <option value="1" selected>1</option>
                    <?php endif; ?>
                    <option value="">Ninguno</option>
                </select>
            </div>
            <div class="form-group">
                <label>Comentario</label>
                <input type="text" name="comentario" class="form-control" value="<?php echo $documento[12] ?>">
            </div>
            <div class="form-group">
                <label>Referencia</label>
                <input type="text" name="referencia" class="form-control" value="<?php echo $documento[13] ?>">
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="text" name="foto" class="form-control" value="<?php echo $documento[14] ?>">
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
                <th>documento</th>
                <th>detalle</th>
                <th>tipo_documento</th>
                <th>fecha</th>
                <th>codigo_usuario</th>
                <th>fecha_registro</th>
                <th>documento_afectado</th>
                <th>valor</th>
                <th>monto</th>
                <th>hora</th>
                <th>codigo_usuario_secundario</th>
                <th>estado</th>
                <th>comentario</th>
                <th>referencia</th>
                <th>foto</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($documentos as $documento): ?>
            <tr>
                <th><?php echo $documento[0] ; ?></</th>
                <th><?php echo $documento[1] ; ?></th>
                <th><?php echo $documento[2] ; ?></th>
                <th><?php echo $documento[3] ; ?></th>
                <th><?php echo $documento[4] ; ?></th>
                <th><?php echo $documento[5] ; ?></th>
                <th><?php echo $documento[6] ; ?></th>
                <th><?php echo $documento[7] ; ?></th>
                <th><?php echo $documento[8] ; ?></th>
                <th><?php echo $documento[9] ; ?></th>
                <th><?php echo $documento[10] ; ?></th>
                <th><?php echo $documento[11] ; ?></th>
                <th><?php echo $documento[12] ; ?></th>
                <th><?php echo $documento[13] ; ?></th>
                <th><?php echo $documento[14] ; ?></th>

                <td><a href="/Carfax/controllers/DocumentosController.php?id=<?php echo $documento[0] ; ?>" id="<?php echo $documento[0] ; ?>">Actualizar</a></td>
                <td><a href="/Carfax/controllers/DocumentosController.php?action=delete&id=<?php echo $documento[0] ; ?>" id="<?php echo $documento[0] ; ?>">Eliminar</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php require('layouts/footer.view.php') ?>