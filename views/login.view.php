<?php require 'complements/header.php';?>

<div class="container my-3">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Iniciar Sesión</h1>
            <div class="card-text">
                <form class="form-group" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <label for="" class="form-inline">Usuario: </label>
                    <input type="text" name="usuario" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <label for="" class="form-inline my-1">Contraseña: </label>
                    <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <input name="" id="" class="btn btn-success my-3" type="submit" value="Iniciar Sesión">
                </form>
            </div>
        </div>
    </div>
</div>

<?php require 'complements/footer.php';?>