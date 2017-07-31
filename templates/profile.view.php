<?php require('layouts/header.view.php') ?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title"><td><?php echo $usuario[3] ?></td></h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-3 col-lg-3 " align="center"> 
               <!--  <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> --> 
                <img alt="User Pic" src="<?php echo $usuario[14] ?>" class="img-circle img-responsive">
            </div>
            <div class=" col-md-9 col-lg-9 "> 
                <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombre </td>
                        <td><?php echo $usuario[3] ?></td>
                      </tr>
                      <tr>
                        <td>Correo</td>
                        <td href="<?php echo $usuario[6] ?>"><?php echo $usuario[6] ?></td>
                      </tr>
                      <tr>
                        <td>Fecha de Nacimiento</td>
                        <td><?php echo $usuario[4] ?></td>
                      </tr>
                      <tr>
                        <td>Sexo</td>
                        <td><?php echo $usuario[10] ?></td>
                      </tr>
                      <tr>
                        <td>Direcci&oacute;n</td>
                        <td><?php echo $usuario[8] ?></td>
                      </tr>
                      <tr>
                        <td>Tel&eacute;fono</td>
                        <td><?php echo $usuario[13] ?></td>
                      </tr>
                      <tr>
                        <td>Ciudad</td>
                        <td><?php echo $usuario[23] ?></td>
                      </tr>
                      <tr>
                        <td>Ubicacion</td>
                        <td><?php echo $usuario[22] ?></td>
                      </tr>
                    </tbody>
                </table>
                <div class="row social-nav-container">
                    <div class="col-md-12">
                      <ul class="social-network social-circle">
                        <li><a href="https://www.facebook.com/<?php echo $usuario[16] ?>" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/<?php echo $usuario[17] ?>" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/user/<?php echo $usuario[20] ?>" class="icoYoutube" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="https://plus.google.com/users/<?php echo $usuario[21] ?>" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.instagram.com/users/<?php echo $usuario[18] ?>" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                      </ul>
                </div>
            </div>
           <!--  <a href="#" class="btn btn-primary">My Sales Performance</a>
            <a href="#" class="btn btn-primary">Team Sales Performance</a> -->
            </div>
          </div>
        </div>
         <div class="panel-footer">
                <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                <span class="pull-right">
                    <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                    <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                </span>
            </div>
      </div>
    </div>
  </div>
<?php require('layouts/footer.view.php') ?>