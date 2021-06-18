<?php require '../complements/header.php'; ?>

    <div class="container my-3">
        <h1>Panel de Control</h1>
        <a href="nuevo.php" class="btn btn-success">Nuevo Artículo</a>
        <a href="cerrar.php" class="btn btn-danger">Cerrar Sesión</a>
        <?php foreach ($posts as $post) { ?>
            <div class="card my-3">
                <article class="card-body">
                    <h2 class="titulo"><?php echo $post['id'] . '.- ' . $post['titulo']; ?></h2>
                    <a href="../single.php?id=<?php echo $post['id']; ?>" class="btn btn-outline-success">Ver</a>
                    <a href="editar.php?id=<?php echo $post['id']; ?>" class="btn btn-outline-warning">Editar</a>
                    <a href="borrar.php?id=<?php echo $post['id']; ?>" class="btn btn-outline-danger">Borrar</a>
                </article>
            </div>
        <?php }; ?>

        <?php require '../paginacion.php'?>
    </div>

<?php require '../complements/footer.php';?>