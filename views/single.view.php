<?php require 'complements/header.php';?>

    <div class="container my-3">
        <div class="col-md-12 blogShort">
            <h1><?php echo $post['titulo']; ?></h1>
            <p><?php echo fecha($post['fecha']); ?></p>
            <div>
                <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo']; ?>" class="pull-left img-responsive thumb margin10 img-thumbnail">
            </div>
            <article>
                <p>
                    <?php echo nl2br($post['texto']); ?>
                </p>
            </article>
        </div>
    </div>

<?php require 'complements/footer.php';?>