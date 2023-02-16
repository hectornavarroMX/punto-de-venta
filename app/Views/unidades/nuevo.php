<h2 class="h3 font-weight-bold text-primary">
    <!-- flecha de regresar menú -->
    <a href="<?= base_url('/unidades') ?>"><i class="fas fa-arrow-circle-left"></i></a>
    <!-- TITULO DESDE EL CONTROLADOR -->
    <?= $titulo ?>
</h2>


<!-- CONTENIDO PRINCIPAL CARD -->
<div class="card shadow mt-3">
    <div class="card-header py-3">
        <!-- DESCRIPCIÓN DESDE EL CONTROLADOR -->
        <h6 class="m-0">
            <?= $ayudaDescripcion ?>
        </h6>
    </div>

    <div class="card-body">

        <form action="<?= base_url('/unidades/insertar') ?>" method="post" autocomplete="off">

            <div class="row">
                <div class="form-group col-xs-12 col-sm-6">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder=""
                        aria-describedby="helpId">
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
                <a href="<?= base_url('/unidades') ?>" class="btn btn-secondary mt-3">
                    <i class="fas fa-arrow-circle-left    "></i>
                    Regresar
                </a>
                <button type="submit" class="btn btn-success mt-3"><i class="fas fa-save"></i> Guardar</button>
            </div>

        </form>



    </div>
</div>