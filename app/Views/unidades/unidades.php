<h2 class="h3 font-weight-bold text-primary">
    <!-- flecha de regresar menú -->
    <a href="<?= base_url('caja') ?>"><i class="fas fa-arrow-circle-left"></i></a>
    <!-- TITULO DESDE EL CONTROLADOR -->
    <?= $titulo ?>
</h2>

<!-- SUBMENÚ -->
<p class="mb-4">
    <a href="<?= base_url('/unidades/nuevo') ?>" class="btn btn-info"> <i class="fas fa-plus-circle"></i> Agregar
        <?= $singular ?>
    </a>
    <a href="<?= base_url('/unidades/eliminados') ?>" class="btn btn-danger"> <i class="fas fa-trash"></i>
        Eliminados</a>
</p>

<!-- CONTENIDO PRINCIPAL CARD -->
<div class="card shadow mt-3">
    <div class="card-header py-3">
        <!-- DESCRIPCIÓN DESDE EL CONTROLADOR -->
        <h6 class="m-0">
            <?= $ayudaDescripcion ?>
        </h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $dato) { ?>
                        <tr>
                            <td>
                                <?= $dato['nombre'] ?> <b>(
                                    <?= $dato['nombre_corto'] ?>)
                                </b>
                            </td>
                            <td>
                                <a href="<?= base_url('/unidades/editar') ?>" class="btn btn-warning">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="<?= base_url('/unidades/eliminar') ?>" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>