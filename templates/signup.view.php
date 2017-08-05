<?php require('layouts/header.view.php') ?>
<div class="container">
    <form method="POST" action="/Carfax/controllers/SignUpController.php" class="signup-form">
        <input type="hidden" name="tipo_usuario" value="1">
        <input type="hidden" name="estado" value="1">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="text-center">Sign Up</h2>
            </div>
        </div>
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $usuario[3] ?>">
            <span class="help-block">Ejemplo: Smith, Harry</span>
        </div>
        <div class="form-group">
            <label>Fecha Nacimiento</label>
            <input type="text" name="fecha_nacimiento" class="form-control" value="<?php echo $usuario[4] ?>">
        </div>
        <div class="form-group">
            <label>Clave</label>
            <input type="password" name="clave" class="form-control" value="<?php echo $usuario[5] ?>">
        </div> 
        <div class="form-group">
            <label>Correo</label>
            <input type="text" name="correo" class="form-control" value="<?php echo $usuario[6] ?>">
        </div>
        <div class="form-group">
            <label>Direcci&oacute;n</label>
            <input type="text" name="direccion" class="form-control" value="<?php echo $usuario[8] ?>">
        </div>
        <div class="form-group">
            <label>Codigo Ubicaci&oacute;n</label>
            <select class="form-control" name="codigo_ubicacion">
            <?php foreach($ubicaciones as $ubicacion): ?>
                <option value="<?php echo $ubicacion[0] ?>"><?php echo $ubicacion[1] ?></option>
            <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Sexo</label>
            <select name="sexo" class="form-control">
                <?php if ($ubicacion[10] == "f") :?>
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
            <button type="submit" class="btn btn-info">Sign Up</button>
        </div>
    </form>
</div> <!-- ./container -->

<style type="text/css">
    body {
        background-color: #eee;
        color: black;
    }
</style>
<?php require('layouts/footer.view.php') ?>