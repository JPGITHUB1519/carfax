<link rel="stylesheet" href="../public/css/bootstrap-4.min.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
<link rel="stylesheet" type="text/css" href="../public/css/index.css">

<?php require('layouts/header.view.php') ?>
<div class="row">
    <div class="col-xs-12">
        <h1 class="card-title text-center">Consulta de Documentos</h1>
    </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <form>
        <div class="form-group">
            <label>Filtrar por Tipo de Documento</label>
            <select class="form-control form-select" name="tipo_documento">
            <?php foreach($tipos_documentos as $tipo_documento): ?>
                <!-- seleccionar codigo de usuario por default -->
                <?php if ($tipo_documento[0] == 1) continue ?>
                <?php if ($tipo_documento[0] == $_GET['tipo_documento']) :?>
                    <option value="<?php echo $tipo_documento[0] ?>" selected><?php echo $tipo_documento[1] ?></option>
                <?php else : ?>
                    <option value="<?php echo $tipo_documento[0] ?>"><?php echo $tipo_documento[1] ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
            <option value="">No Aplicar</option>
            </select>
        </div>
        <div class="form-group">
            <label>Filtrar por Vehiculo</label>
            <select class="form-control form-select" name="vehiculo">
            <?php foreach($vehiculos as $vehiculo): ?>
                <!-- seleccionar codigo de usuario por default -->
                <?php if ($vehiculo[0] == $_GET['vehiculo']) :?>
                    <option value="<?php echo $vehiculo[0] ?>" selected><?php echo $vehiculo[1] ?></option>
                <?php else : ?>
                    <option value="<?php echo $vehiculo[0] ?>"><?php echo $vehiculo[1] ?></option>
                <?php endif; ?>
                <option value="">No Aplicar</option>
            <?php endforeach; ?>

            </select>
        </div>
        <div class="form-group">
            <label>Desde: </label>
            <input type="text" name="desde" class="form-control" value='<?php echo $_GET["desde"] ?>'>
        </div>
        <div class="form-group">
            <label>Hasta: </label>
            <input type="text" name="hasta" class="form-control" value='<?php echo $_GET["hasta"] ?>'>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info">Buscar</button>
        </div>
    </form>
    <div class="row">
        <?php foreach($documentos as $documento): ?>
            <div class="card vehiculo-documento-card">
              <!-- <img class="card-img-top" src="http://localhost/Carfax/public/img/ford_b_max.jpg" alt="Card image cap"> -->
              <div class="card-block">
                <h4 class="card-title"><strong>ID: </strong> <?php echo $documento[0] ?></h4>
                <h4 class="card-title"><strong>Tipo de Documento: </strong> <?php echo $documento[15] ?></h4>
                <p class="card-text"><?php echo $documento[1] ?></p>

              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Valor: </strong> <?php echo $documento[7] ?></li>
                <li class="list-group-item"><strong>Fecha: </strong> <?php echo $documento[3] ?></li>
                <li class="list-group-item"><strong>Hora: </strong> <?php echo $documento[9] ?></li>
                <li class="list-group-item"><strong>Estado: </strong><?php echo $documento[11] ?></li>
                <li class="list-group-item"><strong>Referencia: </strong> <?php echo $documento[13] ?></li>
                <li class="list-group-item"><strong>Comentario: </strong> <?php echo $documento[12] ?></li>
                <li class="list-group-item text-center"><a href="/Carfax/controllers/DocumentosController.php?id=<?php echo $documento[0]?>">Editar</a></li>
              </ul>
            </div>
        <?php endforeach; ?>
    </div>
  </div>
</div>
<?php require('layouts/footer.view.php') ?>


