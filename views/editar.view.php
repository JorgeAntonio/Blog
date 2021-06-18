<?php require '../complements/header.php' ; ?>

<section class="container">
    <div class="col-md-12 blogShort my-3">
        <h1 class="">Editar Articulo</h1>
        <form class="form-group" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
            <label class="form-inline" for="">Titulo:</label>
            <input type="text" name="titulo" class="form-control my-2" id="" value="<?php echo $post['titulo']; ?>">
            <label class="form-inline" for="">Extracto:</label>
            <input type="text" name="extracto" class="form-control my-2" id="" value="<?php echo $post['extracto']; ?>">
            <label class="form-inline" for="">Texto:</label>
            <textarea name="texto" class="form-control my-2" id=""><?php echo $post['texto']; ?></textarea>
            <input type="file" class="form-inline my-3" name="thumb">
            <input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb']; ?>">

            <input type="submit" class="btn btn-success my-2" value="Editar Artículo">
        </form>
    </div>
</section>

<?php require '../complements/footer.php' ; ?>
