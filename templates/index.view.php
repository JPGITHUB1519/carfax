<link rel="../public/css/bootstrap_4.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../public/css/index.css">

<?php require('layouts/header.view.php') ?>
<div class="row">
    <div class="col-xs-12">
        <h1 class="card-title text-center">Mis Vehiculos</h1>
    </div>
</div>
<div class="row">
    <?php foreach($vehiculos as $vehiculo): ?>
    <!-- <div class="col-xs-3">
        <a href="/Carfax/controllers/VehiculoPermalinkController.php?id=<?php echo $vehiculo[0] ?>">
            <img src="<?php echo $vehiculo[14] ?>" class="img-responsive">
            <p>Detalle: <?php echo $vehiculo[1] ?></p>
            <p>Fecha Registro: <?php echo $vehiculo[5] ?></p>
            <p>Valor: <?php echo $vehiculo[7] ?></p>
            <p>Estado: <?php echo $vehiculo[11] ?></p>
            <p>Comentario: <?php echo $vehiculo[12] ?></p>
            <p>Referencia: <?php echo $vehiculo[13] ?></p>
        </a>
    </div> -->
    <div class="card">
      <img class="card-img-top img-responsive" src="<?php echo $vehiculo[14] ?>" class="img-responsive" alt="Card image cap">
      <div class="card-block">
        <h4 class="card-title text-center"><?php echo $vehiculo[1] ?></h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><strong>Fecha Registro:</strong> <?php echo $vehiculo[5] ?></li>
        <li class="list-group-item"><strong>Valor: </strong> <?php echo $vehiculo[7] ?></li>
        <li class="list-group-item"><strong>Estado: </strong><?php echo $vehiculo[11] ?></li>
        <li class="list-group-item"><strong>Referencia: </strong> <?php echo $vehiculo[13] ?></li>
      </ul>
      <div class="card-block">
        <a href="/Carfax/controllers/VehiculoPermalinkController.php?id=<?php echo $vehiculo[0] ?>" class="card-link text-center">Ver Documentos del Vehiculo </a>
      </div>
    </div>
    <?php endforeach; ?>
</div>
<?php require('layouts/footer.view.php') ?>


