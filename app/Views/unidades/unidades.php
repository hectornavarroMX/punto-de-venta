<!-- Page Heading -->
<h2 class="h3 mb-2 text-gray-800">
    <?= $titulo ?>
</h2>
<p class="mb-4">
    <?= $ayudaDescripcion ?>
</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
        <a href="<?= base_url('/unidades/nuevo') ?>" class="btn btn-info">Agregar <?= $singular ?></a>
        <a href="<?= base_url('/unidades/eliminados') ?>" class="btn btn-danger">Eliminados</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Abreviación</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $dato) { ?>
                        <tr>
                            <td>
                                <?= $dato['nombre'] ?>
                            </td>
                            <td>
                                <?= $dato['nombre_corto'] ?>
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
