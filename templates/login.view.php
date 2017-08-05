<?php require('layouts/header.view.php') ?>
    <div class="row">
        <div class="col-xs-12">
            <h1>Login</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <form method="POST" action="/Carfax/controllers/LoginController.php">
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Log-in</button>
                </div>
                <h3><?php echo $invalid_login ?></h3>
                <h3>No tienes una cuenta? <a href="/Carfax/controllers/SignupController.php">Registrate</a></h3>
            </form>
        </div>
    </div>
<?php require('layouts/footer.view.php') ?>