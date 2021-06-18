<?php require 'complements/header.php';?>

    <div class="container my-3">
        <h2><?php echo $titulo; ?></h2>

        <?php foreach ($resultados as $post) { ?>
            <div class="col-md-12 blogShort">
                <h1><a href="single.php?id=<?php echo $post['id']; ?>" class="titulo"><?php echo $post['titulo']; ?></a></h1>
                <p><?php echo fecha($post['fecha']); ?></p>

                <a href="single.php?id=<?php echo $post['id']; ?>">
                    <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb']; ?>" alt="" class="pull-left img-responsive thumb margin10 img-thumbnail">
                </a>

                <article>
                    <p>
                        <?php echo $post['extracto']; ?>
                    </p>
                </article>
                <a class="btn btn-blog pull-right marginBottom10" href="single.php?id=<?php echo $post['id']; ?>">LEER MÁS</a>
            </div>
        <?php } ?>

        <?php require 'paginacion.php'?>
    </div>

<?php require 'complements/footer.php';?>