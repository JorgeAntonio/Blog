<?php $numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conexion); ?>

<section class="my-3">
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">

            <?php if (pagina_actual() === 1) { ?>
                <li class="page-item disabled">
                    <a class="page-link" href="#">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            <?php } else { ?>
                <li class="page-item">
                    <a class="page-link" href="index.php?p=<?php echo pagina_actual() -1; ?>">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            <?php } ?>

            <?php for ($i = 1; $i <= $numero_paginas; $i++) : ?>
                <?php if (pagina_actual() === $i) { ?>
                    <li class="page-item active"><a class="page-link" href=""><?php echo $i; ?></a></li>
                <?php } else { ?>
                    <li class="page-item"><a class="page-link" href="index.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php } ?>
            <?php endfor; ?>

            <?php if (pagina_actual() == $numero_paginas) { ?>
                <li class="page-item disabled">
                    <a class="page-link" href="">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            <?php } else { ?>
                <li class="page-item">
                    <a class="page-link" href="index.php?p=<?php echo pagina_actual() +1; ?>">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            <?php } ?>

        </ul>
    </nav>
</section>

