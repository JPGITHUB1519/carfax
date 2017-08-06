<link rel="stylesheet" href="../public/css/bootstrap-4.min.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
<link rel="stylesheet" type="text/css" href="../public/css/index.css">
<?php require('layouts/header.view.php') ?>
<div class="row">
    <div class="col-xs-12 card-title">
        <h2>Detalle de Documentos para el Vehiculo: <strong><?php echo $vehiculo[1] ?></strong></h2>
        <img src="<?php echo $vehiculo[14] ?>" class="img-responsive card-car-image">
        <a href="/Carfax/controllers/DocumentosController.php?vehiculo=<?php echo $vehiculo[0] ?>" class="text-center car-new-document-link">Agregar nuevo Documento para este Vehiculo</a>
    </div>
</div>
<div class="row">
  <?php if($vehiculo_documentos) :?>
    <?php foreach($vehiculo_documentos as $vehiculo_documento): ?>
        <div class="card vehiculo-documento-card">
          <!-- <img class="card-img-top" src="http://localhost/Carfax/public/img/ford_b_max.jpg" alt="Card image cap"> -->
          <div class="card-block">
            <h4 class="card-title"><strong>ID: </strong> <?php echo $vehiculo_documento[0] ?></h4>
            <h4 class="card-title"><strong>Tipo de Documento: </strong> <?php echo $vehiculo_documento[15] ?></h4>
            <p class="card-text"><?php echo $vehiculo_documento[1] ?></p>

          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Valor: </strong> <?php echo $vehiculo_documento[7] ?></li>
            <li class="list-group-item"><strong>Fecha: </strong> <?php echo $vehiculo_documento[3] ?></li>
            <li class="list-group-item"><strong>Hora: </strong> <?php echo $vehiculo_documento[9] ?></li>
            <li class="list-group-item"><strong>Estado: </strong><?php echo $vehiculo_documento[11] ?></li>
            <li class="list-group-item"><strong>Referencia: </strong> <?php echo $vehiculo_documento[13] ?></li>
            <li class="list-group-item"><strong>Comentario: </strong> <?php echo $vehiculo_documento[12] ?></li>
            <li class="list-group-item text-center"><a href="/Carfax/controllers/DocumentosController.php?id=<?php echo $vehiculo_documento[0]?>">Editar</a></li>

          </ul>
        </div>
    <?php endforeach; ?>
  <?php else : ?>
     <div class="col-xs-12">
      <h1 class="text-center">No hay Documentos para este vehiculo</h1>
    </div>
  <?php endif; ?>
</div>

<?php require('layouts/footer.view.php') ?>

