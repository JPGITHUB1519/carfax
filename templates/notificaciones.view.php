<link rel="stylesheet" href="../public/css/bootstrap-4.min.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
<link rel="stylesheet" type="text/css" href="../public/css/index.css">

<?php require('layouts/header.view.php') ?>
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center">Notificaciones</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xs-12">
            <form>
                <div class="form-group">
                    <label>Filtrar por Tipo de Notificaci&oacute;n</label>
                    <select class="form-control form-select" name="tipo_notificacion">
                        <?php foreach($tipos_notificaciones as $id=>$detalle): ?>
                            <?php if($id == $_GET['tipo_notificacion']): ?>
                                <option value="<?php echo $id?>" selected><?php echo $detalle ?></option>
                            <?php else: ?>
                                <option value="<?php echo $id?>"><?php echo $detalle ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Buscar</button>
                </div>
            </form>
            <div class="row">
                <?php foreach($documentos as $documento): ?>
                    <div class="card vehiculo-documento-card">
                        <img class="card-img-top img-responsive" src="<?php echo $documento[16] ?>" alt="Card image cap">
                      <!-- <img class="card-img-top" src="http://localhost/Carfax/public/img/ford_b_max.jpg" alt="Card image cap"> -->
                      <div class="card-block">
                        <h4 class="card-title"><strong>ID: </strong> <?php echo $documento[0] ?></h4>
                        <h4 class="card-title"><strong>Tipo de Documento: </strong> <?php echo $documento[15] ?></h4>
                        <p class="card-text text-center"><?php echo $documento[1] ?></p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Valor: </strong> <?php echo $documento[7] ?></li>
                        <li class="list-group-item"><strong>Fecha: </strong> <?php echo $documento[3] ?></li>
                        <li class="list-group-item"><strong>Hora: </strong> <?php echo $documento[9] ?></li>
                        <li class="list-group-item"><strong>Estado: </strong><?php echo $documento[11] ?></li>
                        <li class="list-group-item"><strong>Referencia: </strong> <?php echo $documento[13] ?></li>
                        <li class="list-group-item"><strong>Comentario: </strong> <?php echo $documento[12] ?></li>
                        <li class="list-group-item text-center"><a href="/Carfax/controllers/ProfileController.php?id=<?php echo $documento[4]?>">Ver Perfil del Due&ntilde;o</a></li>
                      </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php require('layouts/footer.view.php') ?>