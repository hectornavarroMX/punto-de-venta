<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>
                    <?= $titulo ?>
                </h1>
                <h6 class="my-3">
                    <!-- DESCRIPCIÓN DESDE EL CONTROLADOR -->
                    <?= $ayudaDescripcion ?>
                </h6>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item active"><?= $Plural ?></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>


<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <!-- SUBMENÚ -->
            <p class="mb-4">
                <a href="<?= base_url('/unidades/nuevo') ?>" class="btn btn-info"> <i class="fas fa-plus-circle"></i>
                    Agregar
                    <?= $singular ?>
                </a>
                <a href="<?= base_url('/unidades/eliminados') ?>" class="btn btn-danger"> <i class="fas fa-trash"></i>
                    Eliminados</a>
            </p>

        </div>
    </div>
</div><!-- /.container-fluid -->






<!-- CONTENIDO PRINCIPAL CARD -->
<div class="card shadow mt-3">
    <div class="card-header py-3">

    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="example1" width="100%" cellspacing="0">
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
                                <?php echo ($dato['nombre']. ' (<b>'. $dato['nombre_corto'] .'</b>)'); ?>
                            </td>
                            <td>
                                <a href="<?= base_url('/unidades/editar/'.$dato['id']) ?>" class="btn btn-warning">
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