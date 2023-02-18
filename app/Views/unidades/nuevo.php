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
            <!-- breadcrumbs -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('unidades') ?>">Unidades</a></li>
                    <li class="breadcrumb-item active">Agregar</li>
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
                <a href="<?= base_url('/unidades') ?>" class="btn btn-secondary"> <i class="fas fa-chevron-circle-left"></i>
                    Regresar</a>
            </p>

        </div>
    </div>
</div><!-- /.container-fluid -->



<!-- CONTENIDO PRINCIPAL CARD -->
<div class="card shadow mt-3">


    <div class="card-body">

        <form action="<?= base_url('/unidades/insertar') ?>" method="post" autocomplete="off">

            <div class="row">
                <div class="form-group col-xs-12 col-sm-6">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder=""
                        aria-describedby="helpId" autofocus>
                    <small id="helpId" class="text-muted">Por ejemplo: Kilogramo</small>
                </div>
                <div class="form-group col-xs-12 col-sm-6">
                    <label for="">Abreviación</label>
                    <input type="text" class="form-control" name="nombre_corto" id="nombre_corto"
                        aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Por ejemplo: kg</small>
                </div>
            </div>


            <div class="float-right px-3">
                <button type="submit" class="btn btn-lg btn-success mt-3"><i class="fas fa-save"></i> Guardar</button>
            </div>

        </form>



    </div>
</div>